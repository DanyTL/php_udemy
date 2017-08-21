<?php

//pt securitate bagam informatiile intr-un array
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_password'] = '';
$db['db_name'] = 'cms';

//transformare in constante, prin utilizarea $key pt UPPERCASE

foreach ($db as $key => $value){

    define(strtoupper($key), $value);

}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($connection){
//    echo "We are connected...";
}

?>