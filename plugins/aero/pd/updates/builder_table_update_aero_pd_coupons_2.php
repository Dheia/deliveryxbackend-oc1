<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdCoupons2 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_coupons', function($table)
        {
            $table->text('description')->nullable();
            $table->string('coupon', 10)->change();
            $table->dropColumn('product_id');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_coupons', function($table)
        {
            $table->dropColumn('description');
            $table->string('coupon', 255)->change();
            $table->integer('product_id')->nullable();
        });
    }
}
