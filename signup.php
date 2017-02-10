<?php
$link = mysqli_connect("localhost", "rushi", "hello", "pro");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$email = mysqli_real_escape_string($link, $_POST['email']);




// attempt insert query execution
$sql = "INSERT INTO silog (username, password, email) VALUES ('$username', '$password', '$email')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
