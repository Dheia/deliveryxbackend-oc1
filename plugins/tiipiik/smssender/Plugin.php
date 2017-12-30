<?php namespace Tiipiik\SmsSender;

use App;
use Backend;
use System\Classes\PluginBase;

/**
 * SmsSender Plugin Information File
 */
class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'SmsSender',
            'description' => 'Envíe SMS.',
            'author'      => 'Tiipiik',
            'icon'        => 'icon-envelope-square'
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Tiipiik\SmsSender\ReportWidgets\MessagesOverview'=>[
                'label'=>'SmsSender messages overview',
                'context'=>'dashboard'
            ]
        ];
    }

    public function registerSettings()
    {
        return [
            'smssender' => [
                'label' => 'SMS Sender',
                'icon' => 'icon-envelope-square',
                'description' => 'Envíe SMS.',
                'class' => 'Tiipiik\SmsSender\Models\Setting',
                'order' => 100
            ]
        ];
    }

}