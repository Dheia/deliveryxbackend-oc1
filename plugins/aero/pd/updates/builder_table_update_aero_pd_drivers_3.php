<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdDrivers3 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_drivers', function($table)
        {
            $table->text('phone')->nullable();
            $table->text('observations')->nullable()->change();
            $table->renameColumn('vehicle_type', 'vehicle');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_drivers', function($table)
        {
            $table->dropColumn('phone');
            $table->text('observations')->nullable(false)->change();
            $table->renameColumn('vehicle', 'vehicle_type');
        });
    }
}
