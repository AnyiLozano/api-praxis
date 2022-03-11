<?php

namespace Api;

require dirname(__DIR__) . "/app/Http/Controllers/Web/HomeController.php";
require dirname(__DIR__) . "/app/Http/Controllers/Web/TerapeuticNumberController.php";
require dirname(__DIR__) . "/app/Http/Controllers/AuthController.php";
require dirname(__DIR__) . "/app/Http/Controllers/Web/ProductsController.php";

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProductsController;
use App\Http\Controllers\Web\TerapeuticNumberController;

class RoutesWeb
{
    public $home = null;
    public $terapeutic_number = null;
    public $auth = null;
    public $products = null;

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
        $this->terapeutic_number = new TerapeuticNumberController;
        $this->auth = new AuthController;
        $this->products = new ProductsController;
    }

    public function configRoutes()
    {
        $this->homeRoutes();
        $this->terapeuticNumberRoutes();
        $this->authRoutes();
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

    public function terapeuticNumberRoutes()
    {
        register_rest_route('terapeutic-number', 'get-assets', array(
            'methods' => 'GET',
            'callback' => array($this->terapeutic_number, 'getTerapeuticNumberAssets')
        ));
    }

    public function authRoutes()
    {
        register_rest_route('auth', 'register', array(
            'methods' => 'POST',
            'callback' => array($this->auth, 'register')
        ));

        register_rest_route('auth', 'login', array(
            'methods' => 'POST',
            'callback' => array($this->auth, 'login')
        ));

        register_rest_route('users', 'get-users', array(
            'methods' => 'GET',
            'callback' => array($this->auth, 'getUsers')
        ));

        register_rest_route('users', 'delete-user', array(
            'methods' => 'POST',
            'callback' => array($this->auth, 'deleteUser')
        ));

        register_rest_route('users', 'active-user', array(
            'methods' => 'POST',
            'callback' => array($this->auth, 'activeUser')
        ));

        register_rest_route('products', 'get-assets', array(
            'methods' => 'GET',
            'callback' => array($this->products, 'productsAssets')
        ));
    }
}
