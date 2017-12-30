<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdDrivers2 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_drivers', function($table)
        {
            $table->date('date_birthday')->nullable();
            $table->text('observations');
            $table->text('alerts')->nullable()->unsigned(false)->default(null)->change();
            $table->renameColumn('work_end_start', 'work_hour_end');
            $table->dropColumn('age');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_drivers', function($table)
        {
            $table->dropColumn('date_birthday');
            $table->dropColumn('observations');
            $table->boolean('alerts')->nullable()->unsigned(false)->default(null)->change();
            $table->renameColumn('work_hour_end', 'work_end_start');
            $table->string('age', 255)->nullable();
        });
    }
}
