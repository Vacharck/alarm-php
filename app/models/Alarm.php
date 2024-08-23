<?php 

class Alarm{
    use Model;

    protected $table = "alarm";

    protected $allowedColumns = [
        "title",
        "summary",
        "end_date",
        "user_id"
    ];

    public function validate($data){
        $this->errors = [];

        if(empty($data["title"])){
            $this->errors["title"] = "Missing title";
        }

        if(empty($data["end_date"])){
            $this->errors["end_date"] = "Missing end date";
        }else{
            $date = $data["end_date"];
            $compDate = DateTime::createFromFormat("Y/m/d H:i:s", $date);

            //Boolean variable used to compare if the given date was written in valid datetime format
            $comparassion = $compDate && $compDate->format("Y/m/d H:i:s") == $date;

            if ($comparassion == false) {
                $this->errors["end_date"] = "The end date must be written in proper Year/Month/Day Hour/Minutes/Seconds format";
            }
        }

        if(empty($_SESSION['USER']->user_id)){
            $this->errors["user_id"] = "Login in order to create an alarm";
        }elseif (!filter_var($_SESSION['USER']->user_id, FILTER_VALIDATE_INT)) {
            $this->errors["user_id"] = "The user id must be a number";
        }else{
            if($_SESSION['USER']->user_id == 0){
                $this->errors["user_id"] = "The user id can't be 0";
            }
        }

        if(empty($this->errors))
        {
            return true;
        }

        return false;
    }
}