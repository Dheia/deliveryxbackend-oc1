<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroPdPayments extends Migration
{
    public function up()
    {
        Schema::create('aero_pd_payments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('gateway')->nullable();
            $table->text('description')->nullable();
            $table->string('apikey')->nullable();
            $table->string('secret')->nullable();
            $table->text('url_cancel')->nullable();
            $table->text('url_successful')->nullable();
            $table->string('slug')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_pd_payments');
    }
}
