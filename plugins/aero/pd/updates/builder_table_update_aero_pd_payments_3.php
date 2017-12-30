<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdPayments3 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_payments', function($table)
        {
            $table->string('email');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_payments', function($table)
        {
            $table->dropColumn('email');
        });
    }
}
