<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdDrivers extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_drivers', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('public')->nullable();
            $table->string('surename')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_drivers', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->dropColumn('public');
            $table->string('surename', 255)->nullable(false)->change();
        });
    }
}
