<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdCustomize extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_customize', function($table)
        {
            $table->renameColumn('push_icon', 'online_chat_options');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_customize', function($table)
        {
            $table->renameColumn('online_chat_options', 'push_icon');
        });
    }
}
