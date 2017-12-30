<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroPdProductsExtras extends Migration
{
    public function up()
    {
        Schema::create('aero_pd_products_extras', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('products_id');
            $table->integer('extras_id');
            $table->primary(['products_id','extras_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_pd_products_extras');
    }
}
