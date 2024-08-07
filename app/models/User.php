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

    public function validate($data){
        $this->errors = [];

        if(empty($data['name'])){
            $this->errors['name'] = "Missing name";
        }

        if(empty($data['email']))
        {
            $this->errors['email'] = "Missing email";
        }elseif (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Please write email in proper format";
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

    public function validateCredentials($data){
        $this->errors = [];

        $arrTemp = array($data["email"]);

        $result = $this->first($arrTemp);

        if(empty($result)){
            $this->errors['email'] = "Email provided hasn't been registered";
        }else{
            $tablePass = $result["password"];
            $userPass = $data["password"];

            if(!password_verify($userPass, $tablePass)){
                $this->errors['password'] = "Incorrect password, try it again";
            }
        }
        
        if(empty($this->errors)){
            return true;
        }

        return false;
    }

}
