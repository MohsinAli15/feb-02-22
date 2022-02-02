<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'useraccount';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
    echo 'NOT Connected';
} else {
    echo 'Connected';
}


// ------------------------------------------

// $db_user = "root";
// $db_pass="";
// $db_name="useraccount";


// $db = new PDO('mysql:host=localhost;dbname='.$db_name.';charset-utf8',$db_user,$db_pass);
// $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>