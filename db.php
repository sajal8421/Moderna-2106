<?php 

define("DBHOST", 'localhost');
define("DBUSER", 'root');
define("DBPASS", '');
define("DBNAME", 'moderna_2106');

$conn = mysqli_connect(DBHOST, DBUSER,DBPASS,DBNAME);

if(mysqli_connect_errno()){
    echo "Database Connection Error". mysqli_connect_error();
    exit();
}