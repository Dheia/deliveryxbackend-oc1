<?php namespace Aero\Pd\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAeroPdCustomize4 extends Migration
{
    public function up()
    {
        Schema::table('aero_pd_customize', function($table)
        {
            $table->boolean('communication_sms_switch')->nullable();
            $table->string('communication_sms_sender', 255)->nullable();
            $table->string('communication_sms_remitant', 255)->nullable();
            $table->boolean('communication_push_switch')->nullable();
            $table->string('communication_push_sender', 255)->nullable();
            $table->boolean('marketing_mailchimp_switch')->nullable();
            $table->string('marketing_mailchimp_apikey', 255)->nullable();
            $table->boolean('web_reviews_switch')->nullable();
            $table->boolean('web_comments_switch')->nullable();
            $table->string('payments_currency', 255)->nullable();
            $table->boolean('web_multilanguage_switch')->nullable();
            $table->boolean('development_api_switch')->nullable();
            $table->boolean('system_reservations_switch')->nullable();
            $table->text('analytics_google_analytics_code')->nullable();
            $table->text('analytics_facebook_pixel_code')->nullable();
            $table->string('contact_address', 255)->nullable();
            $table->string('contact_email', 255)->nullable();
            $table->string('contact_whatsapp', 255)->nullable();
            $table->string('social_facebook_page_url', 255)->nullable();
            $table->string('social_twitter_user', 255)->nullable();
            $table->string('social_youtube_channel_url', 255)->nullable();
            $table->string('social_instagram_url', 255)->nullable();
            $table->boolean('social_facebook_delivery_switch')->nullable();
            $table->boolean('support_chat_switch')->nullable();
            $table->renameColumn('online_messenger_switch', 'support_messenger_switch');
            $table->dropColumn('sms_switch');
            $table->dropColumn('sms_sender');
            $table->dropColumn('sms_remitant');
            $table->dropColumn('push_switch');
            $table->dropColumn('push_sender');
            $table->dropColumn('mailchimp_switch');
            $table->dropColumn('mailchimp_apikey');
            $table->dropColumn('reviews_switch');
            $table->dropColumn('comments__switch');
            $table->dropColumn('currency');
            $table->dropColumn('multilanguage_switch');
            $table->dropColumn('api_switch');
            $table->dropColumn('reservations_switch');
            $table->dropColumn('google_analytics_code');
            $table->dropColumn('facebook_pixel_code');
            $table->dropColumn('address');
            $table->dropColumn('email');
            $table->dropColumn('whatsapp');
            $table->dropColumn('facebook_page_url');
            $table->dropColumn('twitter_user');
            $table->dropColumn('youtube_channel_url');
            $table->dropColumn('instagram_url');
            $table->dropColumn('facebook_delivery_switch');
            $table->dropColumn('online_chat_switch');
        });
    }
    
    public function down()
    {
        Schema::table('aero_pd_customize', function($table)
        {
            $table->dropColumn('communication_sms_switch');
            $table->dropColumn('communication_sms_sender');
            $table->dropColumn('communication_sms_remitant');
            $table->dropColumn('communication_push_switch');
            $table->dropColumn('communication_push_sender');
            $table->dropColumn('marketing_mailchimp_switch');
            $table->dropColumn('marketing_mailchimp_apikey');
            $table->dropColumn('web_reviews_switch');
            $table->dropColumn('web_comments_switch');
            $table->dropColumn('payments_currency');
            $table->dropColumn('web_multilanguage_switch');
            $table->dropColumn('development_api_switch');
            $table->dropColumn('system_reservations_switch');
            $table->dropColumn('analytics_google_analytics_code');
            $table->dropColumn('analytics_facebook_pixel_code');
            $table->dropColumn('contact_address');
            $table->dropColumn('contact_email');
            $table->dropColumn('contact_whatsapp');
            $table->dropColumn('social_facebook_page_url');
            $table->dropColumn('social_twitter_user');
            $table->dropColumn('social_youtube_channel_url');
            $table->dropColumn('social_instagram_url');
            $table->dropColumn('social_facebook_delivery_switch');
            $table->dropColumn('support_chat_switch');
            $table->renameColumn('support_messenger_switch', 'online_messenger_switch');
            $table->boolean('sms_switch')->nullable();
            $table->string('sms_sender', 255)->nullable();
            $table->string('sms_remitant', 255)->nullable();
            $table->boolean('push_switch')->nullable();
            $table->string('push_sender', 255)->nullable();
            $table->boolean('mailchimp_switch')->nullable();
            $table->string('mailchimp_apikey', 255)->nullable();
            $table->boolean('reviews_switch')->nullable();
            $table->boolean('comments__switch')->nullable();
            $table->string('currency', 255)->nullable();
            $table->boolean('multilanguage_switch')->nullable();
            $table->boolean('api_switch')->nullable();
            $table->boolean('reservations_switch')->nullable();
            $table->text('google_analytics_code')->nullable();
            $table->text('facebook_pixel_code')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('whatsapp', 255)->nullable();
            $table->string('facebook_page_url', 255)->nullable();
            $table->string('twitter_user', 255)->nullable();
            $table->string('youtube_channel_url', 255)->nullable();
            $table->string('instagram_url', 255)->nullable();
            $table->boolean('facebook_delivery_switch')->nullable();
            $table->boolean('online_chat_switch')->nullable();
        });
    }
}
