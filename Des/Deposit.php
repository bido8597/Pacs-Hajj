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
                    <?php echo $_SESSION['Info']['Name'] ?>
                </a>
            </li>
            <li style="float: right"><a href="../html-link.htm"><img src="rfid-chip.svg" style="width:40px; height:40px" title="White flower" alt="Flower"></a></li>
        </ul>
    </div>
    <div class="container-fluid">

        <div class="row content">
            <div class="col-sm-10">
                <form class="form2" action="MoenyDep.php" method="post">

                    <div class="form__group">
                        <label style="float"> </label>
                        <h3 style="text-align: center;"><span class="NormSpan">
                    <?php if(isset($_SESSION['Info']['Balance'])){echo $_SESSION['Info']['Balance'];}else{echo 0;} ?></span> :رصيد العميل</h3>
                        <div class="Test">

                            <input type="text" placeholder="ايداع" class="homeInput" name="MDeposit" />
                            <span style="font-size: 25px">: ايداع المبلغ  </span>
                            <br>

                            <input class="btndp" type="submit" name="Deposit" value="Deposit">
                        </div>
                    </div>


                </form>
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
