<?php

class Model {

    public $string;
    public $template;

    public function __construct() {
        $this->string = "The string has been loaded through the template.";
        $this->template = "mysite/view/tpl/template.php";
    }

}
