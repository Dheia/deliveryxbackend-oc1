<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdReservations3 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_reservations', function($table)
        {
            $table->renameColumn('branches_id', 'branch_id');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_reservations', function($table)
        {
            $table->renameColumn('branch_id', 'branches_id');
        });
    }
}
