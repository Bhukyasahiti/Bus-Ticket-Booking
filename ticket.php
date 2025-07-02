<html>
    <head>
        <title>Booking Seats</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                display : grid;
                justify-content : center;
                align-items : center;
                background-image : url('bus.jpg');
                background-repeat : no-repeat;
                background-attachment : fixed;
                background-size : 100vw 100vh;
            }
            #main {
                background-color : rgba(255,255,255,0.5);
                border-radius : 10px;
                box-shadow : 5px 5px 10px 5px grey;
                padding : 70px;
                height : fit-content;
                width : fit-content;
                text-align : center;
            }
            #flex {
                display : flex;
                justify-content : center;
            }
            button {
                width : 100%;
                border : none;
                border-radius : 10px;
                background-color : rgba(127,0,127,0.5);
                color : white;
            }
        </style>
    </head>
    <body>
        <div id="main">
            <div id="flex">
                <img src="success.png" width="50px" height="50px">
            </div>
            <h3>Your Transaction was Successful</h3>
            <p>Ticket is booked for <?php echo$_POST["hidden"];?></p>
            <button onclick="window.print();">Click here to print the Ticket</button>
        </div>
    </body>
</html>