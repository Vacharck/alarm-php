<?php

function show($info){
    echo "<pre>";
    print_r($info);
    echo "</pre>";
}

function esc($str){
    return htmlspecialchars($str);
}