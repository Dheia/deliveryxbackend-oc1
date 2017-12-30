<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdCoupons6 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_coupons', function($table)
        {
            $table->boolean('type')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_coupons', function($table)
        {
            $table->dropColumn('type');
        });
    }
}
