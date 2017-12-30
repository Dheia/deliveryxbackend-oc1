<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdPayments2 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_payments', function($table)
        {
            $table->string('gateway_key', 255)->nullable();
            $table->string('gateway_secret', 255)->nullable();
            $table->dropColumn('apikey');
            $table->dropColumn('secret');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_payments', function($table)
        {
            $table->dropColumn('gateway_key');
            $table->dropColumn('gateway_secret');
            $table->string('apikey', 255)->nullable();
            $table->string('secret', 255)->nullable();
        });
    }
}
