<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroPdProductsCoupons extends Migration
{
    public function up()
    {
        Schema::create('aero_pd_products_coupons', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('products_id');
            $table->integer('coupons_id');
            $table->primary(['products_id','coupons_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_pd_products_coupons');
    }
}
