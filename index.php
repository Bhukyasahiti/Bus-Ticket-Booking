<html>
<head>
    <title>Bus Ticket Booking</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    if($uname=="sahititheboss") {
        if($pass=="1234567890") {
            header("location: bus_routes.php");
        }
        else {
            echo "<p style='color:red; font-size:1.5em; font-weight:500'>Invalid Credentials</p>";
        }
    }
    else {
        echo "<p style='color:red; font-size:1.5em; font-weight:500'>The given username doesn't exists</p>";
    }
}
?>
<script>

</script>
<style>
body {
    background-image : url('bus.jpg');
    background-repeat : no-repeat;
    background-attachment : fixed;
    background-size : 100vw 100vh;
}

body h1,p{
    text-align : center;
    color : white;
}

#form {
    display : grid;
    grid-template-columns : auto;
    grid-template-rows : auto;
    justify-content : center;
}

form {
    display : grid;
    grid-template-columns : auto;
    justify-content : center;
    background-color : rgba(255,0,255,0.3);
    padding : 10%;
    border-radius : 10px;
    outline : purple;
    width : 500px;
    height : 300px;
}

label {
    color : white;
}

input[type=text], input[type=password] {
    border : none;
    outline-color : purple;
    height : 25px;
}

input[type=submit], input[type=reset] {
    color : white;
    width : 300px;
    border : 1px solid white;
    border-radius : 5px;
    padding : 10px;
    background-color : rgb(127,0,127);
}
</style>
</head>
<body>
    <h1>Welcome to Bus Ticket Booking</h1>
    <p>Where you want to go.</p>
    <div id="form">
        <form action="?" method="POST">
            <label for="uname">User Name : </label>
            <input type="text" id="uname" name="uname" required>
            <label for="pass">Password : </label>
            <input type="password" id="pass" name="pass" required><br>
            <div style="text-align:center;">
                <input type="submit" value="Login"><br><br>
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
</body>
</html>