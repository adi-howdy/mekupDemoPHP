<?php

define("DBHOST", 'localhost');
define("DBUSER", 'root');
define("DBPASS", 'asdf');
define("DATABASE", 'test123');

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'asdf';
$dbname = 'test123';
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname );

function dbConnect() {
    $conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DATABASE);
    echo "Connecting to database....";
    return $conn;
}

function dbDisconnect($conn){
    if($isset($conn)){
        echo "Disconnecting to database... ";
        mysqli_close($conn);
    }
}

function is_post_req(){
    return '$_SERVER["REQUEST_METHOD"] == POST';
}



?>