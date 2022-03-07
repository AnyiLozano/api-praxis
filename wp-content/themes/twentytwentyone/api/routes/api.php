<?php

namespace Api;

require dirname(__DIR__) . "/app/Http/Controllers/HomeController.php";
require dirname(__DIR__) . "/app/Http/Controllers/ComplementsController.php";
require dirname(__DIR__) . "/app/http/controllers/TerapeuticNumber.php";

use App\Http\Controllers\ComplementsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TerapeuticNumberController;

class Routes
{
    public ?HomeController $home = null;
    public ?ComplementsController $complements = null;
    public ?TerapeuticNumberController $terapeutic_number = null;

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
    }

    public function configRoutes()
    {
        $this->homeRoutes();
        $this->terapeuticNumberRoutes();
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
}