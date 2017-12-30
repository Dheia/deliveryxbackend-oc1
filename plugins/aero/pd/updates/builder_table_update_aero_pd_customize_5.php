<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdCustomize5 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_customize', function($table)
        {
            $table->boolean('system_reviews_switch')->nullable();
            $table->boolean('delivery_own_switch')->nullable();
            $table->boolean('delivery_pimienta_switch')->nullable();
            $table->text('analytics_google_code')->nullable();
            $table->text('analytics_facebook_code')->nullable();
            $table->boolean('website_integration_mode_switch')->nullable();
            $table->string('mobile_google_play_url', 255)->nullable();
            $table->string('mobile_appstore_url', 255)->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->dropColumn('delivery_own');
            $table->dropColumn('delivery_pimienta');
            $table->dropColumn('website_switch');
            $table->dropColumn('google_play_url');
            $table->dropColumn('appstore_url');
            $table->dropColumn('communication_sms_sender');
            $table->dropColumn('communication_push_sender');
            $table->dropColumn('web_reviews_switch');
            $table->dropColumn('analytics_google_analytics_code');
            $table->dropColumn('analytics_facebook_pixel_code');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_customize', function($table)
        {
            $table->dropColumn('system_reviews_switch');
            $table->dropColumn('delivery_own_switch');
            $table->dropColumn('delivery_pimienta_switch');
            $table->dropColumn('analytics_google_code');
            $table->dropColumn('analytics_facebook_code');
            $table->dropColumn('website_integration_mode_switch');
            $table->dropColumn('mobile_google_play_url');
            $table->dropColumn('mobile_appstore_url');
            $table->increments('id')->unsigned()->change();
            $table->boolean('delivery_own')->nullable();
            $table->boolean('delivery_pimienta')->nullable();
            $table->boolean('website_switch')->nullable();
            $table->string('google_play_url', 255)->nullable();
            $table->string('appstore_url', 255)->nullable();
            $table->string('communication_sms_sender', 255)->nullable();
            $table->string('communication_push_sender', 255)->nullable();
            $table->boolean('web_reviews_switch')->nullable();
            $table->text('analytics_google_analytics_code')->nullable();
            $table->text('analytics_facebook_pixel_code')->nullable();
        });
    }
}
