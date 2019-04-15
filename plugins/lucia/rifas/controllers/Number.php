<?php namespace Lucia\Rifas\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Number Back-end Controller
 */
class Number extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Lucia.Rifas', 'rifas', 'number');
    }
}
