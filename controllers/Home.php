<?php

class Home extends BaseController
{
    public function __construct()
    {

    }

    public function index()
    {
        $data['view'] = '/home/index';
        $this->view("/home/index",[
            'title_page' => "Trang chủ"
        ]);
    }
}
