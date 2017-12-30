<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdBranches2 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_branches', function($table)
        {
            $table->boolean('main')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_branches', function($table)
        {
            $table->dropColumn('main');
        });
    }
}
