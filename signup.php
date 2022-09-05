<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "snscolors";

if(isset($_POST['signup'])){
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
          . mysqli_connect_error());
    }
    else{
        $SELECT = "SELECT email From users Where email = ? Limit 1";
        $INSERT = "INSERT Into users (name,email,password)values(?,?,?)";
      
      //Prepare statement
           $stmt = $conn->prepare($SELECT);
           $stmt->bind_param("s", $email);
           $stmt->execute();
           $stmt->bind_result($email);
           $stmt->store_result();
           $rnum = $stmt->num_rows;
      
           //checking username
            if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sss",$name,$email,$pass);
            $stmt->execute();
            echo "New record inserted sucessfully";
           } else {
            echo "Someone already register using this email";
           }
           $stmt->close();
           $conn->close();
          }

}

?>