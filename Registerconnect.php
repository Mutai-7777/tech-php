<?php

$USERNAME= $_POST["USERNAME"];
$EMAIL= $_POST["EMAIL"];
$PASSWORD= $_POST["PASSWORD"];


//CREATE CONNECTION
$con= new mysqli ("localhost", "root","", "CONTACT");

// Check if the connection to the database was successful
if ($con->connect_error) {
    // If the connection failed, stop the script and print the error
    die("Connection failed: " . $con->connect_error);
}

//sql query inserts
    $sql = "INSERT INTO users (username, email, password)
    VALUES ('$USERNAME', '$EMAIL', '$PASSWORD')";


// Execute the SQL query
$result = $con->query($sql);

// Check if the query was successful
if ($result) {
    // If the query was successful, output a JavaScript alert and redirect to 1register.php
    echo "<script>
            alert('User  successfully registered');
            window.location.href = 'test.php';
          </script>";
         
    
} else {
    // If there was an error with the query, print the error
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Close the database connection
$con->close();
?>

?>