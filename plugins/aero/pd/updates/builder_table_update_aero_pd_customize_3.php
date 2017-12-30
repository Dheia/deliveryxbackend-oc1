<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdCustomize3 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_customize', function($table)
        {
            $table->boolean('online_messenger_switch');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_customize', function($table)
        {
            $table->dropColumn('online_messenger_switch');
        });
    }
}
