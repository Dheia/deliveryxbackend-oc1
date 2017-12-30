<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroPdDrivers extends Migration
{
    public function up()
    {
        Schema::create('aero_pd_drivers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('surename');
            $table->string('age')->nullable();
            $table->string('vehicle_id')->nullable();
            $table->time('work_hour_start')->nullable();
            $table->time('work_end_start')->nullable();
            $table->boolean('alerts')->nullable();
            $table->boolean('work_alerts')->nullable();
            $table->boolean('ratings')->nullable();
            $table->string('vehicle_type')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_pd_drivers');
    }
}
