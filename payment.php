<html>
    <head>
        <title>Booking Seats</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                background-image : url('payment.jpeg');
                background-repeat : no-repeat;
                background-attachment : fixed;
                background-size : 100vw 100vh;
                color : white;
                text-align : center;
            }
            .form {
                display : flex;
                justify-content : center;
                padding : 10px;
                margin-top : 10vh;
            }
            form {
                color : black;
                background-color : rgba(255,255,255,0.5);
                border-radius : 10px;
                padding : 10px;
            }
            fieldset {
                border : none;
            }
            input {
                text-align : center;
            }
            input[type="radio"] {
                display : none;
            }
            input[type="submit"] {
                color : white;
                background-color : rgb(64,64,64);
                border : none;
                border-radius : 5px;
                padding : 10px;
            }
            .selected {
                padding : 5px;
                border-bottom : 2px solid ;
                background-color : rgba(64,64,64,0.3)
            }
        </style>
        <?php
        $cn = "";
        $dt = "";
        $cv = "";
        $n = "";
        $p = 0;
        if($_SERVER["REQUEST_METHOD"]=="POST") {
            $cn = $_POST["cardno"];
            $dt = $_POST["date"];
            $cv = $_POST["cvv"];
            $n = $_POST["name"];
            $p = 1;
        } else {
            echo "<p style='font-size:1.5em'>You are going to book ".$_GET["num"]." seats</p>";
        }
        ?>
    </head>
    <body>
        <h1>Payment</h1>
        <div class="form">
            <form action="?" method="POST">
                <fieldset id="form">
                    <fieldset id="selection">
                        <label id="1" for="self" class="<?php if(!$n) {echo "selected";}?>" style="margin-right:10px;" onclick="selection(1)">Self</label>
                        <input type="radio" id="self" name="decision" checked>
                        <label id="2" for="others" style="margin-left:10px;" onclick="selection(2)">Others</label>
                        <input type="radio" id="others" name="decision">
                    </fieldset>
                    <label for="name">Name : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
                    <input type="text" id="name" name="name" value="<?php if(!$n) {echo "Sahiti";} else {echo $n;}?>" readonly required><br><br>
                    <label for="cardno">Enter Card No. : &nbsp</label>
                    <input type="text" id="cardno" name="cardno" maxlength="16" onkeypress="return onlyNumberKey(event)" value="<?php echo $cn;?>" required><br><br>
                    <label for="date">Enter the Expiry date:</label>
                    <input type="date" id="date" name="date" value="<?php echo $dt;?>" required><br><br>
                    <label for="cvv">Enter CVV No. :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
                    <input type="text" style="width:3em;" id="cvv" name="cvv" maxlength="3" onkeypress="return onlyNumberKey(event)" value="<?php echo $cv;?>" required><br><br>
                    <input type="submit" value="Get OTP">
                </fieldset>
            </form>
        </div>
        <div class="form" id="otpform">
            <form action="ticket.php" method="POST">
                    <input type="hidden" id="hidden" name="hidden" value="<?php if(!$n) {echo "Sahiti";} else {echo $n;} ?>">
                    <label for="OTP">Enter the OTP here : </label>
                    <input type="text" id="OTP" name="OTP" maxlength="6" onkeypress="return onlyNumberKey(event)" required><br><br>
                    <input type="submit" value="Pay">
            </form>
        </div>
        <script>
        function onlyNumberKey(evt) {
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
        function selection(x){
            if(x==1) {
                document.getElementById("1").classList.add("selected");
                document.getElementById("2").classList.remove("selected");
                document.getElementById("name").value = "Sahiti";
                document.getElementById("name").disabled=true;
            } else {
                document.getElementById("1").classList.remove("selected");
                document.getElementById("2").classList.add("selected");
                document.getElementById("name").disabled=false;
                document.getElementById("name").value = "";
            }
        }
        if(<?php echo $p; ?>) {
            document.getElementById("form").disabled=true;
            document.getElementById("otpform").style.display="flex";
            document.getElementById("selection").style.display="none";
        } else {
            document.getElementById("form").disabled=false;
            document.getElementById("otpform").style.display="none";
        }
        </script>
    </body>
</html>