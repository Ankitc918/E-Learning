<!doctype html>
<?php 
include('conn.php');
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Blog Page</title>
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

                <div class="col-sm-2" style="margin-top:15px;font-size:15px">
                    <div class="categorysec" style="background-color:transparent">
                        <span style="font-size:20px">Browse Blog</span>
                        <hr>
                        <div class="row">
                           <ul style="color:#4880db">
                            <?php
                   include('categoryblogs.php');
                   ?>
                       </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8" style="background-color:transparent;border:2px solid #4880db;border-radius:5px;margin-top:15px;margin-bottom:15px;">
                    <?php
   
    $sql="SELECT id,title,author,upload_date,content,image,category FROM posts where id=".$_GET["id"]."";
    $res=mysqli_query($conn,$sql);
            
    if ($res->num_rows>0) {
        // output data of each row
        while($row=$res->fetch_assoc())
            echo "
            <div class='' id=".$row["id"]." style='width:100%;margin-top:10px;margin-bottom:10px;box-shadow:2px 2px 3px #4880db'>
                        
                        <div class='card-body'>
                            <div class='card-title text-center' style='font-size:35px;color:#4880db'>
                                <span id='title' name='title'>".$row["title"]."</span>
                            </div><hr>
                            
                                <img class='card-img' style='height:20vw' src='images/mtaind.jpg'>
                            <hr>
                         <div class='row'>
                            <div class='col'>
                                <div class='text-left' id='author' name='author' style='font-size:15px;'><b>".$row["author"]."</b></div>
                                <div class='row'>
                                <div class='col text-left' id='upload_date' name='upload_date' style='font-size:15px;'><span style='color:grey'>published on:".$row["upload_date"]."</span></div>
                                <div class='col text-right' id='category' name='category' style='font-size:15px;'><span style='color:grey'>".$row["category"]."</span></div>
                                </div>
                            </div>
                           
                            </div>
                            <hr>
                            <div class='row container' style='font-family:sans-serif;font-size:22px;'>
                                <div>".$row["content"]."</div>
                            </div>
                        </div>
                </div>
         
                    ";

                } else {
                    echo "0 results";
                }
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
                    <div class="categorysec" style="background-color:transparent;">
                        <span style="font-size:20px;">Related Blogs</span>
                        <hr>
                        <ul style="color:#4880db;margin-left:-30px;font-size:15px;">
                            <?php 
                            include('relatedblogs.php');
                            ?>
                        </ul>
                    </div>
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
