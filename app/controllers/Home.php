<?php

class Home
{
    use Controller;
    public function index(){

        $user = new User;

        /*Select user test

        $arr['user_id'] = 1;
        $arr['name'] = "Julius";
        $result = $user->where($arr);

        */

        /*Insert user test, add php validation type and hash password to prevent sql injection

        $arr['name'] = "Paco";
        $arr['email'] = "email@email.com";
        $arr['password'] = "password";
        $arr['password'] = encryptPassword($arr["password"])
        $result = $user->insert($arr);

        */

        /*Delete user test
        
        $user->delete(value, 'column_database');

        */

        /*Update user test

        $arr['name'] = 'newName';
        $arr['password'] = 'newPassword';
        $user->update(2, $arr);

        */

        /*Show function test
        
        $result = "template";
        show($result);

        */

        $this->view('navbar');
        $this->view('home');
    }

    public function edit(){

        $this->view('navbar');
        $this->view('home');
        
    }
}

