<?php

class AlarmNew{
    use Controller;
    public function index(){
        
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $alarm = new Alarm;

            if($alarm->validate($_POST)){
                $arr = $_POST;
                $arr["user_id"] = $_SESSION['USER']->user_id;
                $alarm->insert($arr);
                redirect('home');
            }

            $data['errors'] = $alarm->errors;
        }
        $this->view("alarmnew", $data);
    }
}