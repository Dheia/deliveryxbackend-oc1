<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdDrivers4 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_drivers', function($table)
        {
            $table->integer('vehicle_id')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_drivers', function($table)
        {
            $table->string('vehicle_id', 255)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
