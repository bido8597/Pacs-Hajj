<?php


require_once('mysqli_connect.php');


if(isset($_POST['submit']))
{
    //Product Values


        //InsertQuery
       $query="INSERT INTO hajjerdb.transaction(Amount,StoreID,HajjerID) VALUES (?,?,?)";
       $stmt=mysqli_prepare($dbc,$query);
       //Binding Product values to InseryQuery
        $str=1;
        $hajid=55479255;
       mysqli_stmt_bind_param($stmt,"dii",$_POST['price'],$str,$hajid);
       mysqli_stmt_execute($stmt);
       //checking Affected rows to check the query succsess
       $affected_rows = mysqli_stmt_affected_rows($stmt);
       //Redirecting the Admin to the product page
       if($affected_rows == 1){
        $query2 ="SELECT count(*) as total FROM `transaction` " ;
        $res= mysqli_query($dbc,$query2);
        $data=mysqli_fetch_assoc($res);
        $query="UPDATE `haijer` SET `Balance`= `Balance`-".$_POST['price']." WHERE 1";
        $res= mysqli_query($dbc,$query);
        header("location:RFIDAUTH.php?Insuc=".$data['total']);

        echo 'Product Entered';
        mysqli_stmt_close($stmt);
        //closing Database Connection
        mysqli_close($dbc);

    }
}
     mysqli_close($dbc);


?>
