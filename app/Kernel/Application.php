<?php
namespace App\Kernel;

class Application extends Container {

    private $BASEDIR;

    public function __construct()
    {
        $this->BASEDIR = realpath( __DIR__ . '/../../');

        $this->registerRoute();
    }

    /**
     *  注册路由
     */
    public function registerRoute(){
        $router = require $this->BASEDIR . '/config/router.php';
    }

    public function run(){
        echo "hello";
    }
}