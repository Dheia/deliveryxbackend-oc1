<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdExtras2 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_extras', function($table)
        {
            $table->boolean('public')->default(1)->change();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_extras', function($table)
        {
            $table->boolean('public')->default(null)->change();
        });
    }
}
