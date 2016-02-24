
<?php
/*
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "password_man";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Creating a database
$sql = "CREATE DATABASE password_man";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}


// sql to create table
$sql = "CREATE TABLE userpass (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";


if ($conn->query($sql) === TRUE) {
    echo "Table userpass created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

<?php echo <br>
/>
$sql = "INSERT INTO userpass (username, password)
VALUES ('Mina', 'Password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
*/
?>