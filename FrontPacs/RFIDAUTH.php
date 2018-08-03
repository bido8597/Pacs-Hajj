<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/wow-alert.css">
    <link rel="stylesheet" type="text/css" href="css/example.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body onload="wow_default_alert()">
    <div class="user">
        <header class="user__header">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
            <h1 class="user__title">Payment and Crowed solutions</h1>
        </header>
    </div>

    <div class="success">
        <i class="fa fa-check-circle "></i>
        <br>
        <h3> Payment Successfull </h3>
        <hr>
        <h4 style="">Your transaction number is : <?php echo $_GET['Insuc']; ?></h4>
    </div>

    <script src="js/index.js"></script>



    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.js"></script>
    <script type="text/javascript" src="js/wow-alert.js"></script>
    <script type="text/javascript" src="js/example.js"></script>
</body>

</html>
