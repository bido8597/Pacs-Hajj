function wow_default_alert() {

    alert("Please pass the bracelet in less than 10 seconds ");
    var downloadTimer = setInterval(function () {
            if (1 <= 0) {
                console.log("finished");
                //document.getElementsByClassName("wow-alert-overlay")[0].style.display = "none";
                //document.getElementsByClassName("wow-alert-content")[0].style.display = "none";

                document.getElementsByClassName("wow-alert-overlay")[0].outerHTML = "";
                document.getElementsByClassName("wow-alert-content")[0].outerHTML = "";


                //document.getElementsByClassName("msg")[0].style.display = "none";
                //document.getElementsByClassName("msg")[1].style.display = "none";
                clearInterval(downloadTimer);
            }
            document.body.onkeyup = function (e) {
                if (e.keyCode == 32) {
                    document.getElementsByClassName("wow-alert-overlay")[0].outerHTML = "";
                    document.getElementsByClassName("wow-alert-content")[0].outerHTML = "";
                    clearInterval(downloadTimer);
                    document.getElementsByClassName("success")[0].style.display = "block";

                }
            }

        },
        1000);


}
function alert_home() {

    alert("Please pass the bracelet");
    var downloadTimer = setInterval(function () {
            if (3 <= 0) {
               
                //document.getElementsByClassName("wow-alert-overlay")[0].style.display = "none";
                //document.getElementsByClassName("wow-alert-content")[0].style.display = "none";

                document.getElementsByClassName("wow-alert-overlay")[0].outerHTML = "";
                document.getElementsByClassName("wow-alert-content")[0].outerHTML = "";


                //document.getElementsByClassName("msg")[0].style.display = "none";
                //document.getElementsByClassName("msg")[1].style.display = "none";
                clearInterval(downloadTimer);
            }
            document.body.onkeyup = function (e) {
                if (e.keyCode == 32) {
                     console.log("finished");
                    document.getElementsByClassName("wow-alert-overlay")[0].outerHTML = "";
                    document.getElementsByClassName("wow-alert-content")[0].outerHTML = "";
                    clearInterval(downloadTimer);
                    //window.location.href="../Deposit.html";
                    window.location = "Cinfo.php";

                }
            }

        },
        1000);


}
function wow_default_alert_with_callback() {
    alert("Hello World! Press 'YES' & Check Your Console Log.", {
        label: "YES",
        success: function () {
            console.log("User clicked YES");
        }
    });
}
