<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamed";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*echo "Connected to MySQL<br />";*/

    $user= $_POST['username'];
    $pass= $_POST['password'];
    $sql = "SELECT id FROM clients WHERE username= '$user' AND password='$pass'";


    $result = $conn->query($sql);


    echo $result;
    if ($result->num_rows > 0) {
        
        $_SESSION['login_username']=$user;
        
        // output data of each row
        /*$row = $result->fetch_assoc();
            echo "id: " . $row["username"]. " pass: " . $row["password"] . "<br>";
            echo $_SESSION['login_username'];
        header('Location: ../Intro.html');*/

        echo $_SESSION['login_username'];
        
    } else {

        echo $result.odbc_num_rows;
    }



/*header('Location: index.html');*/
?>
