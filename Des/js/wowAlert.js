function wow_default_alert() {

    alert("Please pass the brecelet in less than 10 seconds ");
    var timeleft = 5;
    var downloadTimer = setInterval(function () {
            --timeleft;
            if (timeleft <= 0) {
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

function wow_default_alert_with_callback() {
    alert("Hello World! Press 'YES' & Check Your Console Log.", {
        label: "YES",
        success: function () {
            console.log("User clicked YES");
        }
    });
}
function alert_home() {

    alert("Please pass the bracelet");
    var downloadTimer = setInterval(function () {
            if (timeleft <= 0) {
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
                    window.location.href= "Home.html";
                    
                }
            }

        },
        1000);


}

