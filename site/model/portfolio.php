<?php

class ModelPortfolio extends Model {

    public $template;

    public function __construct($registry) {
        parent::__construct($registry);
        $this->template = DIR_APPLICATION . "view/tpl/template.php";
    }

}
