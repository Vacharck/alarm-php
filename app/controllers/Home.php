<?php

class Home
{
    use Controller;
    public function index(){

        /*Select user test

        $arr['user_id'] = 1;
        $arr['name'] = "Julius";
        $result = $user->where($arr);

        */

        /*Delete user test
        
        $user->delete(value, 'column_database');

        */

        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;

        $this->view('navbar', $data);
        $this->view('home');
    }

}

