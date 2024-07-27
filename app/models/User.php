<?php

class User
{
    use Model;

    protected $table = "user";

    protected $allowedColumns = [
        "name",
        "email",
        "password"
    ];
}
