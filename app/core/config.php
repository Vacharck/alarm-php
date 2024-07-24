<?php

if($_SERVER['SERVER_NAME'] == 'localhost'){
    define ('DBNAME', 'alarmsystem');
    define ('DBHOST','localhost');
    define ('DBUSER','root');
    define('DBPASS','');
    define('DBDRIVER', '');

    define ('ROOT', 'http://localhost/alarm/public');
}else{
    define ('DBNAME', 'my_db');
    define ('DBHOST','www.alarmsystem.com');
    define ('DBUSER','root');
    define('DBPASS','');
    define('DBDRIVER', '');

    define ('ROOT', 'https://www.alarmsystem.com');
}

