<?php
// Retrieve POST data from the form submission
$NAME = $_POST['NAME'];
$EMAIL = $_POST['EMAIL'];
$MESSAGE=$_POST['MESSAGE'];

// Create a new MySQLi connection to the database
$con = new mysqli("localhost", "root", "", "CONTACT");

// Check if the connection to the database was successful
if ($con->connect_error) {
    // If the connection failed, stop the script and print the error
    die("Connection failed: " . $con->connect_error);
}

// Prepare the SQL query to insert the data into the RESP table
$sql = "INSERT INTO RESP (NAME, EMAIL, MESSAGE) VALUES ('$NAME', '$EMAIL', '$MESSAGE')";

// Execute the SQL query
$result = $con->query($sql);

// Check if the query was successful
if ($result) {
    // If the query was successful, output a JavaScript alert and redirect to 1register.php
    echo "<script>
            alert('Record successfully added');
            window.location.href = 'test.php';
          </script>";
         
    
} else {
    // If there was an error with the query, print the error
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Close the database connection
$con->close();
?>