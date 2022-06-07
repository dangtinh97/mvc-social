<?php

abstract class BaseController
{
    const BASE_VIEW = '';
    abstract function index();
    public function view(string $view,array $data)
    {
        $data['view'] = $view;
        return include_once ('/var/www/public/mvc/views/base.php');
    }
}
