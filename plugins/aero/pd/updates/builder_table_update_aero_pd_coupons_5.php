<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdCoupons5 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_coupons', function($table)
        {
            $table->text('stock')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_coupons', function($table)
        {
            $table->smallInteger('stock')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
