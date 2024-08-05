<?php

class Home
{
    use Controller;
    public function index(){

        $user = new User;

        /*Select test

        $arr['user_id'] = 1;
        $arr['name'] = "Julius";
        $result = $user->where($arr);

        */

        /*Insert test, add php validation type and hash password to prevent sql injection

        $arr['name'] = "Paco";
        $arr['email'] = "email@email.com";
        $arr['password'] = "password";
        $result = $user->insert($arr);

        */

        /*Delete test
        
        $user->delete(value, 'column_database');

        */

        /*Update test

        $arr['name'] = 'newName';
        $arr['password'] = 'newPassword';
        $user->update(2, $arr);

        */

        /*Show function test
        
        $result = "template";
        show($result);

        */

        $this->view('home');
    }

    public function edit(){

        $this->view('home');
        
    }
}

