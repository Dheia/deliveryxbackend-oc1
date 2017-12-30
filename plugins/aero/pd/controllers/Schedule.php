<?php namespace Aero\Pd\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Schedule extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'pd_shedule' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Aero.Pd', 'menuBranches', 'menuSchedule');
    }
}