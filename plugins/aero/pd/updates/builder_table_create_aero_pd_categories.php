<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroPdCategories extends Migration
{
    public function up()
    {
        Schema::create('aero_pd_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('category')->nullable();
            $table->string('slug')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('public')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_pd_categories');
    }
}
