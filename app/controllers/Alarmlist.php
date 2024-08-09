<?php

class Alarmlist{
    use Controller;

    public function index(){
        $this->view("alarmlist");
    }
}