<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroPdTheme extends Migration
{
    public function up()
    {
        Schema::create('aero_pd_theme', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('theme_id')->nullable();
            $table->string('theme_background_color')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_pd_theme');
    }
}
