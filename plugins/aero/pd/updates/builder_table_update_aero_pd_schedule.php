<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdSchedule extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_schedule', function($table)
        {
            $table->text('delivery_options')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_schedule', function($table)
        {
            $table->dropColumn('delivery_options');
        });
    }
}
