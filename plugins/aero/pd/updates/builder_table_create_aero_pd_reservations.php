<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroPdReservations extends Migration
{
    public function up()
    {
        Schema::create('aero_pd_reservations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('item')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 0)->nullable();
            $table->string('stock')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->smallInteger('branches_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_pd_reservations');
    }
}
