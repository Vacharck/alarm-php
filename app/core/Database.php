<?php

Trait Database{
    private function connect(){
        $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
        $conn = new PDO($string, DBUSER,DBPASS);
        return $conn;
    }

    public function query($query, $data = []){
        $conn = $this->connect();
        $stm = $conn->prepare($query);
        $check = $stm->execute($data);
        
        if($check){
            $result = $stm->fetchAll(PDO::FETCH_OBJ);

            //var_dump($result);
            
            if(is_array($result) && count($result)){
                return $result;
            }
        }

        return false;
    }

    public function get_row($query, $data = []){
        $conn = $this->connect();
        $stm = $conn->prepare($query);
        $check = $stm->execute($data);
        
        if($check){
            $result = $stm->fetchAll(PDO::FETCH_OBJ);

            //var_dump($result);
            
            if(is_array($result) && count($result)){
                return $result[0];
            }
        }

        return false;
    }
    
}