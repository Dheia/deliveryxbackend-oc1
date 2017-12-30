<?php namespace Keios\Geolocaleswitcher\Components;

use Illuminate\Support\Facades\Input;
use RainLab\Translate\Classes\Translator;
use RainLab\Translate\Models\Locale;
use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use App;

/**
 * Class GeoLocaleSwitcher
 *
 * @package Keios\Geolocaleswitcher\Components
 */
class GeoLocaleSwitcher extends ComponentBase
{

    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'keios.geolocaleswitcher::lang.geocomponent.title',
            'description' => 'keios.geolocaleswitcher::lang.geocomponent.description'
        ];
    }

    /**
     * @return array
     */
    public function defineProperties()
    {
        return [
            'localeChangePage' => [
                'title'       => 'keios.geolocaleswitcher::lang.geocomponent.langpage_title',
                'description' => 'keios.geolocaleswitcher::lang.geocomponent.langpage_description',
                'type'        => 'dropdown',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getLocaleChangePageOptions()
    {
        return ['' => '- none -'] + Page::sortBy('baseFileName')->lists('baseFileName', 'url');
    }

    /**
     * @return array
     */
    public function detectedLocation()
    {
        $geoIP = App::make('geoip');
        $location = $geoIP->getLocation();

        return ['country' => $location['country'], 'city' => $location['city']];
    }

    /**
     * @return mixed
     */
    public function currentLocale()
    {
        $currentLocale = Translator::instance()->getLocale();
        $allAvailableLocale = Locale::listAvailable();

        return $allAvailableLocale[$currentLocale];
    }

    /**
     * onRun method
     *
     * This method checks the website address and find out it if has params.
     * Then it generates proper URL based on the param detected.
     *
     * It helps to not forward visitors to weird URLs like http://domain.com/page/:slug?
     * if vistor decide to change language on page with param. If param is valid,
     * it will keep it, so for example user will stay on /page/latest-article after changing language.
     */
    public function onRun()
    {
        $url = $this->page->url;
        $params = $this->controller->vars['this']['param'];

        foreach ($params as $key => $value) {
            if (str_replace(':', '', $value) == $key) {
                $url = str_replace('?', '', str_replace($value, '', $url));
            } else {
                $url = str_replace('?','',str_replace(':' . $key, $value, $url));
            }
        }

        $this->page['page_url'] = $url;
        $this->page['locale_page'] = url($this->property('localeChangePage'));
    }

}