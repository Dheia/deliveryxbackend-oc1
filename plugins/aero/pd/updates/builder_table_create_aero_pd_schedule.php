<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroPdSchedule extends Migration
{
    public function up()
    {
        Schema::create('aero_pd_schedule', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('branch_id')->nullable();
            $table->string('day')->nullable();
            $table->time('hour_open')->nullable();
            $table->time('hour_close')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_pd_schedule');
    }
}
