<?php

class View {

    private $model;
    private $controller;

    public function __construct($controller, $model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output() {
        $data = $this->model->string;
        require_once($this->model->template);
    }

}
