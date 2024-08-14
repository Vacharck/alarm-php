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

    public function validateSignUp($data){
        $this->errors = [];

        if(empty($data['name'])){
            $this->errors['name'] = "Missing name";
        }

        if(empty($data['email']))
        {
            $this->errors['email'] = "Missing email";
        }elseif (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Please write email in proper format";
        }else{   
            $arr['email'] = $data['email'];
            $row = $this->first($arr);

            if(!empty($row)){
                $this->errors['email'] = "The email provided is already in use";
            }
        }

        if(empty($data['password']))
        {
            $this->errors['password'] = "Missing password";
        }

        if(empty($this->errors)){
            return true;
        }

        return false;
    }

    public function validateSignIn($data){
        $this->errors = [];

        $arr["email"] = $data["email"];

        $row = $this->first($arr);

        if(empty($row)){
            $this->errors['email'] = "Email provided hasn't been registered";
        }else{
            $rowPass = $row["password"];
            $userPass = $data["password"];

            if(!password_verify($userPass, $rowPass)){
                $this->errors['password'] = "Incorrect password, try it again";
            }
        }
        
        if(empty($this->errors)){
            return true;
        }

        return false;
    }

}
