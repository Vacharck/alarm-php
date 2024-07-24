<?php

class Home extends Controller
{
    public function index($a = "", $b = "", $c = ""){

        $model = new Model;

        /*select test
        $arr['user_id'] = 1;
        $arr['name'] = "Julius";
        $result = $model->where($arr);
        */

        /*insert test, add php validation type and hash password to prevent sql injection
        $arr['name'] = "Paco";
        $arr['email'] = "email@email.com";
        $arr['password'] = "password";

        $result = $model->insert($arr);
        */

        $result = "template";
        show($result);
        $this->view('home');

    }
}

