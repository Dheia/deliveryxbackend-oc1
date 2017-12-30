<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdProducts2 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_products', function($table)
        {
            $table->boolean('featured')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_products', function($table)
        {
            $table->dropColumn('featured');
        });
    }
}
