<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdTheme2 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_theme', function($table)
        {
            $table->boolean('active')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_theme', function($table)
        {
            $table->dropColumn('active');
        });
    }
}
