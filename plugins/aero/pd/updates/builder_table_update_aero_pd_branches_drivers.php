<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdBranchesDrivers extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_branches_drivers', function($table)
        {
            $table->dropPrimary(['branch_id','drivers_id']);
            $table->renameColumn('branch_id', 'branches_id');
            $table->primary(['branches_id','drivers_id']);
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_branches_drivers', function($table)
        {
            $table->dropPrimary(['branches_id','drivers_id']);
            $table->renameColumn('branches_id', 'branch_id');
            $table->primary(['branch_id','drivers_id']);
        });
    }
}
