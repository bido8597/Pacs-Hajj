<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Hajj_PACS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>


    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/FormStyle.css">

</head>

<body>

    <div id='cssmenu'>
         <ul>
            <li class=''>
                <a href='#' style="padding-top: 20%;">
                    <?php echo $_SESSION['Info']['Name'] ?>
                </a>
            </li>
            <li style="float: right"><a href="../html-link.htm"><img src="rfid-chip.svg" style="width:40px; height:40px" title="White flower" alt="Flower"></a></li>
        </ul>
    </div>
    <div class="container-fluid">
        <div class="row content">
            <!- Info In Here-->
            <div class="col-sm-10">
                <form id = "data" style ="margin-top: 5%; float:right;color:black;"action = "process.php" method= post>
                <label style = "float:right;">الاسم</label><input type = "text" name = "Name" readonly value="<?php echo $_SESSION['Info']['Name'];?>"/>
                    <br><br>
                    <label style = "float:right;">الجنسية</label><input type="text" name = "national" readonly value="<?php echo $_SESSION['Info']['Nnationality'];?>"/><br><br>
                    <label style = "float:right;">رقم الهوية</label><input type="text" name = "passNumber" readonly value="<?php echo $_SESSION['Info']['HaijerID'];?>"/><br><br>
                    <label style = "float:right;">عدد المرافقين </label><input type="number" min ="0" name = "dependents" readonly value="<?php echo $_SESSION['Info']['Haijer_Deps'];?>"/><br><br>
                    <label style = "float:right;">المال المتبقي </label><input type="number" name = "money"/readonly value="<?php echo $_SESSION['Info']['Balance'];?>"><br><br>
                </form>
                <br><br>

            </div>
            <div class="col-sm-2 sideNav">
                <ul class="nav" style="float: right;">
                    <li class="botBord" style="margin-top: 10px"><a href="Withdraw.php">سحب</a></li>
                    <li class="botBord" style="margin-top: 10px"><a href="Deposit.php">ايداع</a></li>
                    <li class="botBord"><a href="AccountInfo.php">معلومات الحاج</a></li>
                    <li class="botBord" style="margin-top: 10"><a href="gates.php">تتبع الافواج</a></li>
                </ul>
                <br>
            </div>
            <br>
        </div>
    </div>
    <script src="js/index.js"></script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/NewForm.js"></script>



</body>

</html>
