<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdProducts3 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_products', function($table)
        {
            $table->text('time_production')->nullable();
            $table->text('time_delivery')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_products', function($table)
        {
            $table->dropColumn('time_production');
            $table->dropColumn('time_delivery');
        });
    }
}
