<html>
<head>
<title>Bus Routes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body {
        background-image : url('bus.jpg');
        background-repeat : no-repeat;
        background-attachment : fixed;
        background-size : 100vw 100vh;
    }
    #fromto {
        display : flex;
        flex-direction : row;
        justify-content : space-evenly;
        margin-top : 5vh;
        background-color:rgba(255,255,255,0.5);
        border-radius:5px;
        padding : 15px;
    }
    input[type=text] {
        text-align : center;
        border : 2px solid black;
        border-radius : 5px;
    }
    #table {
        margin-top : 20vh;
        background-color : rgba(0,0,0,0.4);
    }
    table {
        width : 100vw;
        color : white;
    }
    tr:nth-child(odd) {
        background-color : rgba(0,0,0,0.3);
    }
    tr:nth-child(even) {
        background-color : rgba(0,0,0,0.5);
    }
    th, td {
        text-align : center;
    }
    table button {
        color : white;
        background-color : lightgreen;
        border : none;
        border-radius : 5px;
        padding : 5px;
    }
    #show {
        text-align : center;
        margin-top : 30px;
    }
    #show button {
        border : none;
        border-radius : 5px;
        color : white;
        background-color : purple;
        padding : 10px 20px 10px 20px;
    }
</style>
<script>
    function reverse() {
        let temp = f.value;
        f.value = t.value;
        t.value = temp;
    }
    function change() {
        if(f.value&&t.value) {
            if(f.value!=t.value) {
                window.location = "bus_routes.php?f="+f.value+"&t="+t.value;
            } else {
                alert("please select distinct places to travel");
            }
        } else {
            alert("please select both from and to places to continue");
        }
    }
    function book(num) {
        window.location = "booking.php?b="+num;
    }
</script>
</head>
<body>
    <datalist id="places">
        <option value="Vijayawada">
        <option value="Chennai">
        <option value="Bangalore">
        <option value="Vizag">
        <option value="Thirupathi">
        <!-- <option value="Delhi">
        <option value="Chandigarh">
        <option value="Kolkata">
        <option value="Mumbai">
        <option value="Lucknow">
        <option value="Ahmadabad">
        <option value="Kochi">
        <option value="Srinagar"> -->
    </datalist>
    <div id="fromto">
        <input type="text" id="from" list="places" placeholder="From Place">
        <span onclick="reverse()">
        <img src="reverse.png" width="30px" height="30px">
        </span>
        <input type="text" id="to" list="places" placeholder="To Place">
    </div>
    <div id="show"><button onclick="change()">Show</div>
    <div id="table">
        <table>
            <thead>
                <tr>
                    <th>Bus No.</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Price</th>
                    <th>Bookings</th>
                </tr>
            </thead>
            <tbody id="changer">
            </tbody>
        </table>
    </div>
    <script>
    let f = document.getElementById("from");
    let t = document.getElementById("to");
    let c = document.getElementById("changer");
    </script>
</body>
<script>
    <?php
    if($_REQUEST["f"]&$_REQUEST["t"]) {
        echo "f.value = '".$_GET["f"]."';";
        echo "t.value = '".$_GET["t"]."';";
        $conn = new mysqli("localhost","root","","myDB");
        $sql = "select * from buses where fromplace='".$_GET["f"]."' and toplace='".$_GET["t"]."';";
        $result = $conn -> query($sql);
        $row = $result->fetch_assoc();
        while($row) {
            echo "c.innerHTML+='<tr><td>".$row["bus_no"]."</td><td>".$row["travel_date"]."</td><td>".$row["travel_time"]."</td><td>Rs.".$row["price"]."</td><td><button onclick=\"book(".$row["bus_no"].")\">Book</button></td></tr>';";
            $row = $result->fetch_assoc();
        }
        $conn -> close();
    }
    ?>
</script>
</html>