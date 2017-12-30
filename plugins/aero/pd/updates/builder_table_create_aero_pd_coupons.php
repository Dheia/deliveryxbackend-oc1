<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroPdCoupons extends Migration
{
    public function up()
    {
        Schema::create('aero_pd_coupons', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('product_id')->nullable();
            $table->decimal('price_percentage', 10, 0)->nullable();
            $table->decimal('price_discount', 10, 0)->nullable();
            $table->dateTime('date_expiration')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_pd_coupons');
    }
}
