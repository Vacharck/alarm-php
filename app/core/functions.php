<?php

function show($info){
    echo "<pre>";
    print_r($info);
    echo "</pre>";
}

function esc($str){
    return htmlspecialchars($str);
}

function redirect($path){
    header("Location: ".ROOT."/".$path);
    die;
}

function encryptPassword($pass){
    $encryptedPass = password_hash($pass, PASSWORD_DEFAULT);
    return $encryptedPass;
}