<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <div id='cssmenu'>
        <ul>
            <li class=''>
                <a href='#'>
                </a>
            </li>
            <li style="float: right"><a href="../html-link.htm"><img src="rfid-chip.svg" style="width:40px; height:40px" title="White flower" alt="Flower"></a></li>
        </ul>
    </div>
    <div class="container-fluid">

        <div class="row content">
            <div class="col-sm-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Regiment No.</th>
                            <th>Last Gate</th>
                            <th>latest entry Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once('mysqli_connect.php');
                        $query ="SELECT * FROM `regiment`";
                        $res=@mysqli_query($dbc,$query);
                        while($row = mysqli_fetch_array($res)){
                            if ($row['Reg_Status']== 1){
                                echo '<tr class="danger"> <td>'.$row['Reg_Num']."</td>
                                <td>".$row['Last_Gate_Entered']."</td>
                                <td>".$row['Date_Latest_Entry']."</td>
                                <td>".$row['Reg_Status']."</td></tr>";
                            }
                            else if($row['Reg_Status']== 2)
                            {
                                echo '<tr class="success"> <td>'.$row['Reg_Num']."</td>
                                <td>".$row['Last_Gate_Entered']."</td>
                                <td>".$row['Date_Latest_Entry']."</td>
                                <td>".$row['Reg_Status']."</td></tr>";
                            }
                               else if($row['Reg_Status']== 3)
                            {
                                echo '<tr class="warning"> <td>'.$row['Reg_Num']."</td>
                                <td>".$row['Last_Gate_Entered']."</td>
                                <td>".$row['Date_Latest_Entry']."</td>
                                <td>".$row['Reg_Status']."</td></tr>";
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-2 hidden-xs sideNav">
                <ul class="nav nav-pills nav-stacked" style="float: right;margin-right: 0%;">
                    <li class="botBord" style="margin-top: 10"><a href="Withdraw.php">سحب</a></li>
                    <li class="botBord" style="margin-top: 10"><a href="Deposit.php">ايداع</a></li>
                    <li class="botBord"><a href="#section2">معلومات الحاج</a></li>
                </ul>
                <br>
            </div>
            <br>
        </div>
    </div>
    <script src="js/index.js"></script>




</body>

</html>
