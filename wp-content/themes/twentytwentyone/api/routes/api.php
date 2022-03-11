<?php

namespace Api;

require dirname(__DIR__) . "/app/Http/Controllers/HomeController.php";
require dirname(__DIR__) . "/app/Http/Controllers/ComplementsController.php";
require dirname(__DIR__) . "/app/http/controllers/TerapeuticNumber.php";
require dirname(__DIR__) . "/app/http/controllers/ProductsController.php";

use App\Http\Controllers\ComplementsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TerapeuticNumberController;
use App\Http\Controllers\ProductsController;

class Routes
{
    public ?HomeController $home = null;
    public ?ComplementsController $complements = null;
    public ?TerapeuticNumberController $terapeutic_number = null;
    public ?ProductsController $products = null;

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
        $this->home = new HomeController();
        $this->complements = new ComplementsController();
        $this->terapeutic_number = new TerapeuticNumberController();
        $this->products = new ProductsController();
    }

    public function configRoutes()
    {
        $this->homeRoutes();
        $this->terapeuticNumberRoutes();
        $this->productsRoutes();
    }

    public function homeRoutes()
    {
        register_rest_route('/admin/home', 'get-content-types', array(
            'methods' => 'GET',
            'callback' => array($this->complements, 'getContentTypes')
        ));

        register_rest_route('/admin/home', 'get-home-contents', array(
            'methods' => 'GET',
            'callback' => array($this->home, 'getHomeContents')
        ));

        register_rest_route('/admin/home', 'create-home-contents', array(
            'methods' => 'POST',
            'callback' => array($this->home, 'createHomeContents')
        ));

        register_rest_route('/admin/home', 'edit-home-contents', array(
            'methods' => 'POST',
            'callback' => array($this->home, 'editHomeContents')
        ));

        register_rest_route('/admin/home', 'change-status', array(
            'methods' => 'POST',
            'callback' => array($this->home, 'changeStatus')
        ));
    }

    public function terapeuticNumberRoutes()
    {
        register_rest_route('/admin/terapeutic-number', 'get-terapeutic-number-contents', array(
            'methods' => 'GET',
            'callback' => array($this->terapeutic_number, 'getTerapeuticNumberContents')
        ));

        register_rest_route('/admin/terapeutic-number', 'create-terapeutic-number-contents', array(
            'methods' => 'POST',
            'callback' => array($this->terapeutic_number, 'createTerapeuticNumberContents')
        ));

        register_rest_route('/admin/terapeutic-number', 'edit-terapeutic-number-contents', array(
            'methods' => 'POST',
            'callback' => array($this->terapeutic_number, 'editTerapeuticNumberContents')
        ));

        register_rest_route('/admin/terapeutic-number', 'change-status', array(
            'methods' => 'POST',
            'callback' => array($this->terapeutic_number, 'changeStatus')
        ));
    }

    public function productsRoutes()
    {
        register_rest_route('/admin/products', 'get-products-contents', array(
            'methods' => 'GET',
            'callback' => array($this->products, 'getProductsContents')
        ));

        register_rest_route('/admin/products', 'create-products-contents', array(
            'methods' => 'POST',
            'callback' => array($this->products, 'createProductsContents')
        ));

        register_rest_route('/admin/products', 'edit-products-contents', array(
            'methods' => 'POST',
            'callback' => array($this->products, 'editProductsContents')
        ));

        register_rest_route('/admin/products', 'change-status', array(
            'methods' => 'POST',
            'callback' => array($this->products, 'changeStatus')
        ));
    }
}
