<?php
    session_start();

?>
            
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Page 1</title>
    </head>
    <body>
                Welcome Professor 
                <?php
                    if($_SESSION['user'] == "Mina"){
                        
                    } else {
                        header('Location: page.php');
                    }
                    echo $_SESSION['user'];
                    ?>
        <?php 
  $now = time();
 if ($now > $_SESSION['expire']) {
            session_destroy();
                  }


                ?>
        <br>
        This is a website, it has:
        <br>
        A login with a username and password
        <br>
        It gets validated by the database
        <br>
        You cant see the password
        <br>
        It also has a session that expires after 15 minutes
        <br>
        Just one database too
        <br>
        And this should be on gitbuh
        <br>
        This was an intereresting and informative project, thank you :)
        
        <br>
        Also, here is a logout button
        <br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        <input type="submit" name="submit" value="logout"> 
        <br> 
        </form>
        
<?php 
 if(isset($_POST['submit'])){
     header("Location:logout.php");
 } else {
     echo "now it works";
     echo "<br>";
     echo "And its too late in the night to make a changing password and username system :(";
     echo "<br>";
     echo "<h4>It may not be pretty, but its mine</h4>";
 }
     ?>

                 

            
        
    </body>
</html>