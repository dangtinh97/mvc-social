<?php

abstract class BaseController
{
    public function view(string $view,array $data)
    {
        $data['view'] = $view;
        return include_once ('/var/www/public/mvc/views/base.php');
    }
}
