<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdBranches extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_branches', function($table)
        {
            $table->renameColumn('street', 'address');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_branches', function($table)
        {
            $table->renameColumn('address', 'street');
        });
    }
}
