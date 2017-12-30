<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdPayments extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_payments', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_payments', function($table)
        {
            $table->dropColumn('deleted_at');
            $table->increments('id')->unsigned()->change();
        });
    }
}
