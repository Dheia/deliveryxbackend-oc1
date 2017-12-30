<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdExtras extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_extras', function($table)
        {
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_extras', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
