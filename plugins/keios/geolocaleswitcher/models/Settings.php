<?php

namespace Keios\GeoLocaleSwitcher\Models;

use October\Rain\Database\Model;


/**
 * Class Settings
 *
 * @package Keios\GeoLocaleSwitcher
 */
class Settings extends Model
{

    /**
     * @var array
     */
    public $implement = ['System.Behaviors.SettingsModel'];

    /**
     * @var string
     */
    public $settingsCode = 'keios_geolocaleswitcher_settings';

    /**
     * @var string
     */
    public $settingsFields = 'fields.yaml';

}
