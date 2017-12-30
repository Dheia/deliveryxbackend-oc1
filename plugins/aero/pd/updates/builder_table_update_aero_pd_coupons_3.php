<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdCoupons3 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_coupons', function($table)
        {
            $table->string('coupon', 50)->change();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_coupons', function($table)
        {
            $table->string('coupon', 10)->change();
        });
    }
}
