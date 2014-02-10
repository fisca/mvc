<?php

// Version
define('VERSION', '0.8a');

// Configuration
if (file_exists('config.php')) {
    require_once('config.php');
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

// App Classes
require_once ('mysite/model/about.php');
require_once ('mysite/view/about.php');
require_once ('mysite/controller/about.php');

require_once ('mysite/model/portfolio.php');
require_once ('mysite/view/portfolio.php');
require_once ('mysite/controller/portfolio.php');

//
$page = $_GET['page'];
if (!empty($page)) {

    $data = array(
        'about' => array(
            'model' => 'AboutModel',
            'view' => 'AboutView',
            'controller' => 'AboutController'
        ),
        'portfolio' => array(
            'model' => 'PortfolioModel',
            'view' => 'PortfolioView',
            'controller' => 'PortfolioController'
        )
    );

    foreach ($data as $key => $components) {
        if ($page == $key) {
            $model = $components['model'];
            $view = $components['view'];
            $controller = $components['controller'];
            break;
        }
    }

    if (isset($model)) {
        $m = new $model();
        $c = new $controller($m);
        $v = new $view($c, $m);
        $v->output();
    }
}