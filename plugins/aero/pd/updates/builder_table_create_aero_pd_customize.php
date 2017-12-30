<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAeroPdCustomize extends Migration
{
    public function up()
    {
        Schema::create('aero_pd_customize', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->boolean('sms_switch')->nullable();
            $table->string('sms_sender')->nullable();
            $table->string('sms_remitant')->nullable();
            $table->boolean('push_switch')->nullable();
            $table->string('push_sender')->nullable();
            $table->string('push_icon')->nullable();
            $table->boolean('mailchimp_switch')->nullable();
            $table->string('mailchimp_apikey')->nullable();
            $table->boolean('reviews_switch')->nullable();
            $table->boolean('comments__switch')->nullable();
            $table->string('payments_options')->nullable();
            $table->string('currency')->nullable();
            $table->boolean('delivery_opendelivery_switch')->nullable();
            $table->boolean('delivery_own')->nullable();
            $table->boolean('delivery_pimienta')->nullable();
            $table->boolean('multilanguage_switch')->nullable();
            $table->boolean('api_switch')->nullable();
            $table->boolean('reservations_switch')->nullable();
            $table->text('google_analytics_code')->nullable();
            $table->text('facebook_pixel_code')->nullable();
            $table->boolean('website_switch')->nullable();
            $table->string('google_play_url')->nullable();
            $table->string('appstore_url')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_phone_2')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('facebook_page_url')->nullable();
            $table->string('twitter_user')->nullable();
            $table->string('youtube_channel_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->boolean('facebook_delivery_switch')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aero_pd_customize');
    }
}
