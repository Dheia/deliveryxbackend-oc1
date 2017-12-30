<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdReservations2 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_reservations', function($table)
        {
            $table->date('date_offer_start')->nullable();
            $table->date('date_offer_end')->nullable();
            $table->smallInteger('branches_id')->nullable()->change();
            $table->boolean('public')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_reservations', function($table)
        {
            $table->dropColumn('date_offer_start');
            $table->dropColumn('date_offer_end');
            $table->smallInteger('branches_id')->nullable(false)->change();
            $table->boolean('public')->nullable(false)->change();
        });
    }
}
