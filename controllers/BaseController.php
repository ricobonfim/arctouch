<?php

abstract class BaseController {

    abstract protected function index();

    protected function view(array $parameters = array(), string $templateName = "") {
        $pageName = strlen($templateName) ? $templateName : 'index';
        $className = strtolower(str_replace('Controller', '', get_class($this)));

        $templatePath = "view/{$className}/{$pageName}.php";

        extract($parameters);
        
        include 'view/layout/main.layout.php';
    }

}