<?php

class Alarm{
    use Controller;
    public function index($a = "", $b = "", $c = ""){
        $this->view('alarm');
    }
}