<?php

class ErrorController extends BaseController {

    public function index() {
        $this->PageNotFound();
    }

    public function PageNotFound() {
        parent::view('404');
    }

} 