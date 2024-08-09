<?php

class Signup{
    use Controller;
    public function index(){
        $user = new User;
        
        //Review this code for this is a signup not a signin
        if ($user->validate($_POST)) {
            $user->insert($_POST);
            redirect('home');
        }
        
        $this->view("signup");
    }
}