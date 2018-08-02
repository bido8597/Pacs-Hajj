<?php
session_start();
?>

<?php
require_once('mysqli_connect.php');


//Checking User credentials
$SignupErr="";
$RFID=6156161;
$query ="SELECT * FROM `haijer` WHERE `RFID`=".$RFID;

$res=@mysqli_query($dbc,$query);
if($res){

     //Fetching Database credentials
    $row = mysqli_fetch_array($res);
    //Checking user Credentials with the input
    $_SESSION['Info']=$row;
  
    header("location:Deposit.php");
    exit;   
    }
    //Error Ouput
    else {
       
        $SignupErr="Incorrect Email or password";
        header("location:login.php?error=1");
        
      
    }


?>
