<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroPdExtras extends Migration
{
    public function up()
    {
        Schema::create('aero_pd_extras', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('extra')->nullable();
            $table->decimal('price', 10, 0)->nullable();
            $table->string('slug')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('public')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_pd_extras');
    }
}
