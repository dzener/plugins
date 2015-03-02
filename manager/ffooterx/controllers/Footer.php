<?php namespace Manager\Ffooterx\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Footer Back-end Controller
 */
class Footer extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['manager.ffooterx.access_ffooterx'];
    
    public function __construct()
    {
        parent::__construct();
        
        $this->addCss('/plugins/manager/ffooter/assets/ffooterx.css');
        $this->addJs('/plugins/manager/ffooter/assets/js/rotateslide.js');
        
        BackendMenu::setContext('Manager.Ffooterx', 'ffooterx', 'footer');
    }
}