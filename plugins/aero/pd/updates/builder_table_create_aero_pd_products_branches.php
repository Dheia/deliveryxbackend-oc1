<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroPdProductsBranches extends Migration
{
    public function up()
    {
        Schema::create('aero_pd_products_branches', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('products_id');
            $table->integer('branches_id');
            $table->primary(['products_id','branches_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_pd_products_branches');
    }
}
