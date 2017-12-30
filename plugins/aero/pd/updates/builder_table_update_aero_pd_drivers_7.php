<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdDrivers7 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_drivers', function($table)
        {
            $table->renameColumn('public', 'active');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_drivers', function($table)
        {
            $table->renameColumn('active', 'public');
        });
    }
}
