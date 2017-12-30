<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroPdConfiguracion extends Migration
{
    public function up()
    {
        Schema::create('aero_pd_configuracion', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('general_bd_color')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_pd_configuracion');
    }
}
