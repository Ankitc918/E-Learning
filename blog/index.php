<!doctype html>
<?php 
session_start();
include('conn.php');

?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Blog Home</title>
</head>

<body>
<section id=blog style="background-image: linear-gradient(-90deg,#cef6ec,#f6ced8);">
    <div class="">

        <div class="header">
            <div class="text-center">
                <span style="font-size:50px;color:white">Blog</span>
                
            </div>
            
        </div>
        <div style="margin-top:70px;">
           
            <div class="row" style="margin:auto;">

                <div class="col-sm-2" style="margin-top:15px;">
                    <div class="categorysec">
                        <h4 style="color:white;font-weight:bold">Browse Categories</h4>
                        <hr>
                        <div class="row">
                            <?php
                   include('category.php');
                   ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 card card-deck" style="background-color:transparent;border:none;">
                    <?php 
                    include('getblogs.php');
                    ?>
                </div>
                <div class="col-sm-2" style="margin-top:15px;">
                    <form novalidate="">
                        <div class="subscribesec " id="subscribesec">
                            <div class="box_new_sub">
                                <div class="title"><span>Subscribe </span>
                                    <div>to our newsletter</div>
                                </div>
                            </div>

                            <div class="input-group">
                                <input name="subscription-mail" type="email" autocomplete="off" class="form-control " required="" placeholder="Enter your Email Address">
                            </div><br>
                            <button type="submit" class="btn btn-warning" style="width:inherit;">
                                SUBSCRIBE
                            </button>
                        </div>
                    </form>
                    <br>

                    <br>
                    <div class="categorysec" style="background-color:transparent;">
                        <span style="font-size:20px;">Trending Courses</span>
                        <hr>
                        <ul style="color:#4880db;margin-left:-30px;font-size:15px;">
                            <li><a href="#"><span class='fa fa-caret-right'></span>abc</a></li>
                            <li><a href="#"><span class='fa fa-caret-right'></span>bcd</a></li>
                            <li><a href="#"><span class='fa fa-caret-right'></span>xyz</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	</body>

</html>