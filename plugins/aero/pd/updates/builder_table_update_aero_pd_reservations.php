<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdReservations extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_reservations', function($table)
        {
            $table->boolean('public');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_reservations', function($table)
        {
            $table->dropColumn('public');
        });
    }
}
