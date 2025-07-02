<html>
    <head>
    <title>Booking Seats</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                color : white;
                background-image : url('bus.jpg');
                background-repeat : no-repeat;
                background-attachment : fixed;
                background-size : 100vw 100vh;
            }
            h1 {
                text-align : center;
            }
            #bus {
                position : absolute;
                top : 50vh;
                left : 50vw;
                transform : translate(-50%,-50%);
                -ms-transform : translate(-50%,0%);
                height : fit-content;
                width : fit-content;
                padding : 10px;
                border-radius : 10px;
                background-color : rgba(255,127,80,0.4);
                display : grid;
                grid-template-columns : 10vw 10vw 10vw 10vw 10vw;
                grid-template-rows : 7vh 7vh 7vh 7vh 7vh 7vh 7vh 7vh 7vh 7vh 7vh 7vh;
                justify-content : space-evenly;
            }
            .seats {
                display : grid;
                text-align : center;
                background-color : rgba(127,0,127,0.5);
                margin : 5px;
                border-radius : 5px;
                align-items : center;
            }
            .seats:hover {
                background-color : rgba(127,0,127,0.8);
            }
            .selected {
                background-color : rgba(127,0,127,1.0);
            }
            .booked {
                background-color : rgba(127,0,127,0.2);
            }
            #next {
                position :absolute;
                bottom : 2vh;
                display : flex;
                width : 100vw;
                justify-content : center;
            }
            #next button{
                color : white;
                background-color : lightgreen;
                border : none;
                border-radius : 5px;
                padding : 5px 10px 5px 10px;
            }
        </style>
    </head>
    <body>
        <h1>Please select seats you prefer</h1>
        <div id="bus">
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="seats" onclick="select(this)">1</div>
            <div class="seats" onclick="select(this)">2</div>
            <div class="space"></div>
            <div class="seats" onclick="select(this)">3</div>
            <div class="seats booked" onclick="select(this)">4</div>
            <div class="seats" onclick="select(this)">5</div>
            <div class="seats" onclick="select(this)">6</div>
            <div class="space"></div>
            <div class="seats" onclick="select(this)">7</div>
            <div class="seats" onclick="select(this)">8</div>
            <div class="seats" onclick="select(this)">9</div>
            <div class="seats booked" onclick="select(this)">10</div>
            <div class="space"></div>
            <div class="seats" onclick="select(this)">11</div>
            <div class="seats" onclick="select(this)">12</div>
            <div class="seats" onclick="select(this)">13</div>
            <div class="seats" onclick="select(this)">14</div>
            <div class="space"></div>
            <div class="seats" onclick="select(this)">15</div>
            <div class="seats booked" onclick="select(this)">16</div>
            <div class="seats" onclick="select(this)">17</div>
            <div class="seats" onclick="select(this)">18</div>
            <div class="space"></div>
            <div class="seats booked" onclick="select(this)">19</div>
            <div class="seats booked" onclick="select(this)">20</div>
            <div class="seats" onclick="select(this)">21</div>
            <div class="seats" onclick="select(this)">22</div>
            <div class="space"></div>
            <div class="seats" onclick="select(this)">23</div>
            <div class="seats" onclick="select(this)">24</div>
            <div class="seats" onclick="select(this)">25</div>
            <div class="seats" onclick="select(this)">26</div>
            <div class="space"></div>
            <div class="seats" onclick="select(this)">27</div>
            <div class="seats" onclick="select(this)">28</div>
            <div class="seats" onclick="select(this)">29</div>
            <div class="seats" onclick="select(this)">30</div>
            <div class="space"></div>
            <div class="seats" onclick="select(this)">31</div>
            <div class="seats" onclick="select(this)">32</div>
            <div class="seats" onclick="select(this)">33</div>
            <div class="seats" onclick="select(this)">34</div>
            <div class="space"></div>
            <div class="seats" onclick="select(this)">35</div>
            <div class="seats" onclick="select(this)">36</div>
            <div class="seats booked" onclick="select(this)">37</div>
            <div class="seats booked" onclick="select(this)">38</div>
            <div class="space"></div>
            <div class="seats booked" onclick="select(this)">39</div>
            <div class="seats booked" onclick="select(this)">40</div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
        </div>
        <div id="next">
            <button onclick="next()">Next</button>
        </div>
        <script>
            let seat = 0;
            function select(x) {
                if(x.classList.contains("booked")) {
                    console.log("this seat is already booked");
                } else {
                    if(x.classList.contains("selected")) {
                        x.classList.remove("selected");
                        seat--;
                    } else {
                        x.classList.add("selected");
                        seat++;
                    }
                }
            }
            function next() {
                if(seat==0) {
                    alert("you have to select atleast 1 seat to continue");
                } else {
                    window.location='payment.php?num='+seat;
                }
            }
        </script>
    </body>
</html>