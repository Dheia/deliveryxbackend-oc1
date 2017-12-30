<?php namespace Keios\Geolocaleswitcher\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

/**
 * Class CreateSettingsTable
 *
 * @package Keios\Geolocaleswitcher\Updates
 */
class CreateSettingsTable extends Migration
{

    /**
     * Database Up Method
     */
    public function up()
    {
        Schema::create('keios_geolocaleswitcher_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    /**
     * Database Down Method
     */
    public function down()
    {
        Schema::dropIfExists('keios_geolocaleswitcher_settings');
    }

}
