<body onload="sleep()">
    <p align="center">Your transaction was successful. Thank you for your donation to...</p>
    <div align="center" id="redirect" style="visibility: hidden">
       <h4>You will be redirected to the homepage in <span id="countdown"><strong>5</strong></span> second(s)...</h4>
    </div>

    <script type="text/javascript">
        function showRedirect() {
            document.getElementById("redirect").style.visibility = "visible";
        }
        setTimeout("showRedirect()", 2500); 
        function sleep() {
            setTimeout("countdown()", 2000);
        }
        var ss = 6;
        function countdown() {
            ss = ss-1;
            if (ss<0) {
                window.location="<?php echo base_url(); ?>seller/dashboard/change_password";
            }
            else {
                document.getElementById("countdown").innerHTML=ss;
                window.setTimeout("countdown()", 1000);
            }
        }
    </script>