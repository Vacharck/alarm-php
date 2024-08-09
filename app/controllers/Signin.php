<?php

class Signin{
    use Controller;
    public function index(){
        show($_POST);
        $this->view("signin");
    }
}