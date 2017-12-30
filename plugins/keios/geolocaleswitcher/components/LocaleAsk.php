<?php namespace Keios\Geolocaleswitcher\Components;

use Keios\GeoLocaleSwitcher\Classes\GeoLocaleRepository;
use RainLab\Translate\Models\Locale as LocaleModel;
use RainLab\Translate\Classes\Translator;
use RainLab\Translate\Models\Locale;
use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use App;
use Session;

/**
 * Class LocaleAsk
 *
 * @package Keios\Geolocaleswitcher\Components
 */
class LocaleAsk extends ComponentBase
{

    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'keios.geolocaleswitcher::lang.localecomponent.title',
            'description' => 'keios.geolocaleswitcher::lang.localecomponent.description',
        ];
    }

    /**
     * @return array
     */
    public function defineProperties()
    {
        return [];
    }

    /**
     * @return array
     */
    public function getLocaleChangePageOptions()
    {
        return ['' => '- none -'] + Page::sortBy('baseFileName')->lists('baseFileName', 'url');
    }

    /**
     * onRun - assign global twig variables
     */
    public function onRun()
    {
        $this->page['detected_location'] = $this->detectedLocation();
    }

    /**
     * @return null
     */
    public function localeChangePage()
    {
        $localeChangePage = $this->property('localeChangePage');

        return ($localeChangePage ?: null);
    }

    /**
     * @return array
     */
    public function detectedLocation()
    {
        $geoIP = App::make('geoip');
        $location = $geoIP->getLocation();
        $country = null;
        $city = null;
        $iso = null;

        if (array_key_exists('country', $location)) {
            $country = $location['country'];
        }
        if (array_key_exists('city', $location)) {
            $city = $location['city'];
        }
        if (array_key_exists('isoCode', $location)) {
            $iso = $location['isoCode'];
        }

        return [
            'country' => $country,
            'city'    => $city,
            'iso'     => $iso,
        ];
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
     * @return array
     */
    public function displayedLocales()
    {
        $availableLocales = LocaleModel::listAvailable();
        $repo = new GeoLocaleRepository();
        $locationCode = \Session::get('geoip-location.isoCode');
        /** @var array $countryLocales */
        $countryLocales = $repo->resolve($locationCode)->getAllLocales();
        $availableLocaleIds = [];
        $displayedLocales = [];
        foreach ($availableLocales as $localeId => $locale) {
            $availableLocaleIds[] = $localeId;
        }

        foreach ($countryLocales as $locale) {
            if (in_array($locale, $availableLocaleIds, false)) {
                $localeName = $availableLocales[$locale];
                $displayedLocales[$locale] = $localeName;
            }
        }

        return $displayedLocales;
    }

}