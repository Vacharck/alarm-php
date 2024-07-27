<?php

class Home extends Controller
{
    public function index($a = "", $b = "", $c = ""){

        $user = new User;

        /*

        select test
        $arr['user_id'] = 1;
        $arr['name'] = "Julius";
        $result = $user->where($arr);

        insert test, add php validation type and hash password to prevent sql injection
        $arr['name'] = "Paco";
        $arr['email'] = "email@email.com";
        $arr['password'] = "password";
        $result = $user->insert($arr);

        delete test
        $user->delete(value, 'column_database');

        update test
        $arr['name'] = 'newName';
        $arr['password'] = 'newPassword';
        $user->update(2, $arr);

        show function test
        $result = "template";
        show($result);

        $arr['name'] = 'newName2';
        $arr['password'] = 'newPassword2';
        $user->update(4, $arr);

        */

        

        $this->view('home');

    }
}

