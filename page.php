<?php session_start()
 ?>
<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 



<?php

// define variables and set to empty values
$nameErr = $passErr = "";
$uname = $pword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["username"])) {
     $nameErr = "Username is required";
   } else {
     $uname = test_input($_POST["username"]);
     // check if name only contains letters and whitespace
     
   }
   
   if (empty($_POST["password"])) {
     $passErr = "password is required";
   } else {
     $pword = test_input($_POST["password"]);
     // check if e-mail address is well-formed
   }  
   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>Login screen</h2>
<p><span class="error"></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Username: <input type="text" name="username" value="<?php echo $uname;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   Password: <input type="password" name="password" value="<?php echo $pword;?>">
   <span class="error">* <?php echo $passErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>



<?php
 if(isset($_POST['submit'])){   


$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "password_man";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Username or Password incorrect";
}
#this echo Works :/ not the other onen:\


# page redirct   
$sql = "SELECT id, username, password FROM userpass";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $row["id"].  $row["username"]. $row["password"]. "<br>";
        if ($row["username"] == $uname && $row["password"] == $pword){
           
            $_SESSION['user'] = $uname;

            $_SESSION['start'] = time(); 
            $_SESSION['expire'] = $_SESSION['start'] + (15 * 60);
            header("Location:index.php");
        }
    }
} else {
    echo "Username or Password incorrect";
}
$conn->close();
} 

?>

</body>
</html>