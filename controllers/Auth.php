<?php

class Auth extends BaseController
{
    public function index(){

    }
    public function login()
    {
        $data['title_page'] = "Đăng Nhập";
        $this->view('/login',$data);
    }

    public function register()
    {
        $data['title_page'] = "Đăng ký";
        $this->view('/register',$data);
    }
}
