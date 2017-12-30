<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdCoupons8 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_coupons', function($table)
        {
            $table->decimal('discount', 10, 0)->nullable();
            $table->string('type')->nullable()->unsigned(false)->default(null)->change();
            $table->dropColumn('price_percentage');
            $table->dropColumn('price_discount');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_coupons', function($table)
        {
            $table->dropColumn('discount');
            $table->boolean('type')->nullable()->unsigned(false)->default(null)->change();
            $table->decimal('price_percentage', 10, 0)->nullable();
            $table->decimal('price_discount', 10, 0)->nullable();
        });
    }
}
