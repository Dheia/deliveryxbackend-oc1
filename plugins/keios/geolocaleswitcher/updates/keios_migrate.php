<?php namespace Keios\GeoLocaleSwitcher\Seeds;

use Seeder;
use System\Classes\PluginManager;

/**
 * Class KeiosMigrate
 *
 * @package Keios\GeoLocaleSwitcher\Seeds
 */
class KeiosMigrate extends Seeder
{
    /**
     * Migrate Method
     */
    public function run()
    {
        if (PluginManager::instance()->exists('Voipdeploy.GeoLocaleSwitcher')) {
            \Artisan::call('plugin:remove', ['name' => 'Voipdeploy.GeoLocaleSwitcher', '--force' => true]);
        }
    }
}