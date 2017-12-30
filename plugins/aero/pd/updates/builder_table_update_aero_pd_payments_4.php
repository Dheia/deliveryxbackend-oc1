<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdPayments4 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_payments', function($table)
        {
            $table->string('email')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_payments', function($table)
        {
            $table->string('email', 255)->nullable(false)->change();
        });
    }
}
