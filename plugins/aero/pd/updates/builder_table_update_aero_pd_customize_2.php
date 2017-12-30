<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdCustomize2 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_customize', function($table)
        {
            $table->boolean('online_chat_switch')->nullable();
            $table->dropColumn('online_chat_options');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_customize', function($table)
        {
            $table->dropColumn('online_chat_switch');
            $table->string('online_chat_options', 255)->nullable();
        });
    }
}
