<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroPdBranchesDrivers extends Migration
{
    public function up()
    {
        Schema::create('aero_pd_branches_drivers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('branch_id');
            $table->integer('drivers_id');
            $table->primary(['branch_id','drivers_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_pd_branches_drivers');
    }
}
