<?php
$servername="localhost:3307";
$username="root";
$password="";
$dbname="test_db";

//my connection
$conn=new mysqli(
    $servername,$username,$password,$dbname);



if($conn->connect_error){
    die("connection failed: "
    . $conn->connect_error);
}else{
    echo"connected successfully";
}
   


//data   subission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $country = $conn->real_escape_string($_POST['country']);
    $subject = $conn->real_escape_string($_POST['subject']);

    
    $query = "INSERT INTO users (first_name, last_name, country, subject) VALUES ('$first_name', '$last_name', '$country', '$subject')";

   
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
       
        header("Location: index.php"); 
        exit;
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

?>
