<?php

class Signin{
    use Controller;
    public function index(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $user = new User;
            
            if ($user->validateSignIn($_POST)) {
                $arr['email'] = $_POST['email'];
                $userSession = $user->first($arr);
                $_SESSION['USER'] = $userSession;
                redirect('home');
            }
            
            $data['errors'] = $user->errors;
        }
        $this->view("signin", $data);
    }
}