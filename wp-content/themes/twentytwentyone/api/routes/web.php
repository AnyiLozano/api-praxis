<?php

namespace Api;

require dirname(__DIR__) . "/app/Http/Controllers/Web/HomeController.php";

use App\Http\Controllers\Web\HomeController;

class RoutesWeb
{
    public $home = null;

    public function __construct()
    {
        $this->initControllers();

        add_action(
            'rest_api_init',
            array($this, 'configRoutes')
        );
    }

    public function initControllers()
    {
        $this->home = new HomeController;
    }

    public function configRoutes()
    {
        $this->homeRoutes();
    }

    public function homeRoutes()
    {
        register_rest_route('complements', 'get-logo', array(
            'methods' => 'GET',
            'callback' => array($this->home, 'getLogo')
        ));

        register_rest_route('complements', 'get-menus', array(
            'methods' => 'GET',
            'callback' => array($this->home, 'getMenus')
        ));

        register_rest_route('home', 'get-home-assets', array(
            'methods' => 'GET',
            'callback' => array($this->home, 'getHomeAssets')
        ));
    }
}