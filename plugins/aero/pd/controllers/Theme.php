<?php namespace Aero\Pd\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Theme extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'pd_theme' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Aero.Pd', 'menuTheme');
    }
}