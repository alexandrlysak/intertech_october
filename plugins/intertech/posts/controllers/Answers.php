<?php namespace Intertech\Posts\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Answers extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Intertech.Posts', 'blog-menu-item', 'comments_answers-menu-item');
    }
}
