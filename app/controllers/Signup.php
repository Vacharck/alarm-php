<?php

class Signup{
    use Controller;
    public function index(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $user = new User;
        
            if ($user->validateSignUp($_POST)) {
                $user->insert($_POST);
                redirect('signin');
            }
            
            $data['errors'] = $user->errors;
        }
        
        $this->view("signup", $data);
    }
}