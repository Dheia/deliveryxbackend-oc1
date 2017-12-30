<?php namespace Keios\GeoLocaleSwitcher;

use Cms\Classes\CmsController;
use System\Classes\PluginBase;
use Keios\GeoLocaleSwitcher\Models\Settings;

/**
 * GeoLocaleSwitcher Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * @var array
     */
    public $require = ['RainLab.Translate'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'keios.geolocaleswitcher::lang.plugin.name',
            'description' => 'keios.geolocaleswitcher::lang.plugin.description',
            'author'      => 'Keios',
            'icon'        => 'icon-globe',
        ];
    }

    /**
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Keios\GeoLocaleSwitcher\Components\GeoLocaleSwitcher' => 'geoLocaleSwitcher',
            'Keios\GeoLocaleSwitcher\Components\LocaleAsk'         => 'localeAsk',
        ];
    }

    /**
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'keios.geolocaleswitcher.manage_settings' => [
                'tab'   => 'keios.geolocaleswitcher::lang.permissions.tab',
                'label' => 'keios.geolocaleswitcher::lang.permissions.geolocaleswitcher',
            ],
        ];
    }

    /**
     * @return array
     */
    public function registerSettings()
    {
        return [
            'config' => [
                'label'       => 'keios.geolocaleswitcher::lang.plugin.name',
                'icon'        => 'icon-globe',
                'description' => 'keios.geolocaleswitcher::lang.plugin.settings_desc',
                'class'       => 'Keios\GeoLocaleSwitcher\Models\Settings',
                'category'    => 'rainlab.translate::lang.plugin.name',
                'permissions' => ['keios.geolocaleswitcher.manage_settings'],
            ],
        ];
    }

    /**
     * Boot Method
     */
    public function boot()
    {

        $this->app->register('Keios\GeoIP\GeoIPServiceProvider');
        $this->app->register('Keios\GeoLocaleSwitcher\Classes\GeoLocaleServiceProvider');

        if ($this->app->runningInConsole()) {
            return;
        }
        if (Settings::get('enabled')) {
            CmsController::extend(
                function (CmsController $controller) {
                    $controller->middleware('Keios\GeoLocaleSwitcher\Classes\GeoLocaleMiddleware');
                }
            );
        }
    }
}
