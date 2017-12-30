<?php namespace Keios\GeoLocaleSwitcher\Classes;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Config\Repository;

/**
 * Class GeoLocaleServiceProvider
 *
 * @package Keios\GeoLocaleSwitcher
 */
class GeoLocaleServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->setUpGeoIp($this->app->make('config'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    /**
     * @param Repository $repository
     */
    protected function setUpGeoIp(Repository $repository)
    {
        $repository->set('geoip.service', 'maxmind');
        $repository->set('geoip.maxmind.type', 'database');
        $repository->set(
            'geoip.maxmind.database_path',
            base_path().'/plugins/keios/geolocaleswitcher/database/database.mmdb'
        );
    }

}