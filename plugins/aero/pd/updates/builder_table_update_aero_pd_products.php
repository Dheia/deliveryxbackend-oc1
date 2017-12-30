<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdProducts extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_products', function($table)
        {
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_products', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
