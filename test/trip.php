<html>

<head>
    <title>E-Learning Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" media="screen">
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <style>
        .carousel-inner img {
            width: 100%;
            height: 90%;

        }

        body {
            background-color: #eee;
            font-family: Verdana, Geneva, Tahoma, Arial, Helvetica, sans-serif !important;
        }

        body>div {
            padding-top: 60px;
        }

        .box1 {
            background-color: white;
            padding: 20px;
        }
        .box1:hover{
            box-shadow: 0px 0px 3px 3px lightgrey;
        }
        .filterpanel{
            background-color: white;
            padding-top: 10px;
        }
        .amenities>ul>li{
            list-style: none;
        }
        .amenities>ul>li>.ui_checkbox{
            background-color: transparent;
            
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <section class="col col-3 filterpanel">
                <div class="text-center">
                    Filter List
                </div>
                <hr>

                <div data-role="main" class="price">
                    <div data-role="rangeslider">
                        <label for="price-min">Price:</label>
                        <input type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
                        <label for="price-max">Price:</label>
                        <input type="range" name="price-max" id="price-max" value="800" min="0" max="1000">
                    </div>

                </div>
                <hr>
                <div class="amenities">
                    <label>Amenities</label>
                    <ul style="margin:0;padding:0;">
                        <li>
                            <input type="checkbox" id="checkbox1" value="abc">
                            <label for="checkbox1">Free Wifi</label>
                        </li>
                        <li>
                            <input type="checkbox" id="checkbox2" value="abc">
                            <label for="checkbox2">Free Parking</label>
                        </li>
                        <li>
                            <input type="checkbox" id="checkbox3" value="abc">
                            <label for="checkbox3">Air Conditioning</label>
                        </li>
                       
                    </ul>
                    
                </div>
                <hr>
            </section>
            <section class="col col-9 innercontent">
                <div class="container box1">
                    <div class="row" style="height:240px;">
                        <div class="col col-4">
                            <div id="slider" class="carousel slide" data-ride="carousel">
                                <ul class="carousel-indicators">
                                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                                    <li data-target="#slider" data-slide-to="1"></li>
                                    <li data-target="#slider" data-slide-to="2"></li>
                                </ul>
                                <div class="carousel-inner">
                                  
                                    <div class="carousel-item active">
                                        <img class="wow shake" src="images/slider1.jpg" alt="Los Angeles">

                                    </div>
                                    <div class="carousel-item">
                                        <img class="wow swing" src="images/slider2.jpg" alt="Chicago">

                                    </div>
                                    <div class="carousel-item">
                                        <img class="wow bounce" src="images/slider3.jpg" alt="New York">

                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#slider" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#slider" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col col-8">
                            <h3>Hotel name</h3>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <span>
                                        booking site logo
                                        <hr>
                                        &#8377; price
                                        <hr>
                                        <a class="btn btn-primary" style="width:100%;color:white">view offer</a>
                                    </span>
                                </div>
                                <div class="col">
                                    <span>
                                        other sites price list
                                    </span>
                                </div>
                                <div class="col">
                                    <span>
                                        rating & amenities provided
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</body>

</html>
