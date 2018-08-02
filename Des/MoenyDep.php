<?php
session_start();
?>
<?php
require_once('mysqli_connect.php');
if(isset($_POST['Deposit'])||isset($_POST['withdraw']))
{
    $tot=0;
    //Product Values
    if($_POST['MDeposit']>0){
    $tot=$_SESSION['Info']['Balance']+$_POST['MDeposit'];
    $_SESSION['Info']['Balance']=$tot;
    }
    if ($_POST['Mwithdraw']>0)
    {    
    $tot=$_SESSION['Info']['Balance']-$_POST['Mwithdraw'];
    $_SESSION['Info']['Balance']=$tot;
    }
    
    
        //Executing Query 
    $query="UPDATE hajjerdb.haijer SET `Balance`=".$tot." WHERE HaijerID=".$_SESSION['Info']['HaijerID'];
    $res= mysqli_query($dbc,$query);
    //checking Query succsess
    if($res &&$_POST['MDeposit']>0){
    header("location:Deposit.php?Upsuc=1");
    echo "Record updated successfully";
    }
    else if ($res) {
        header("location:Withdraw.php?Upsuc=1");
    }
    
    //closing Database Connection
    mysqli_close($dbc);
}

?>
