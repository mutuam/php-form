<?php
require_once'submit.php';

function display_data(){
    global $conn;
    $query= "select * from users";
    $result= mysqli_query($conn,$query);
    return $result;
}

?>