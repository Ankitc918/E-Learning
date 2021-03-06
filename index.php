<?php 
include('include/header.php');
include('include/conn.php');
?>
<html>

<head>
    <title>Smart-Learn Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Trade+Winds" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>
   
    <div class="">
        <section class="heading" style="padding-top:30px;padding-bottom:15px">
            <div class="center wow bounce">
                <span style="font-size:32px;padding:50px">Welcome to <b style="color:seagreen;font-family:Love Ya Like A Sister, cursive;">E-Learning</b></span>
            </div>
        </section>
  
        <section class="banner wrap100">
            <div id="slider" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="wow shake" src="images/slidern1.jpg" alt="slide 1">
                         
                        <div class="carousel-caption wow fadeInLeft">
                             <h3>Programming is Fun!</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="wow swing" src="images/slidern2.jpg" alt="slide 2">
                        <div class="carousel-caption wow fadeInLeft">
                            <h3>Easy to Learn!</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="wow bounce" src="images/slidern3.jpg" alt="slide 3">
                        <div class="carousel-caption wow fadeInLeft">
                            <h3>We can do a lot through programming!</h3>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slider" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#slider" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </section>
        <br>

        <!-- new main content  -->

        <section class="maincontent wrap100">
            <div class="center wow bounce">
                <span>
                    <i class="fa fa-cubes" aria-hidden="true" style="color:#797979;font-size:32px"><span style="font-size:32px">Tutorials <b style="color:seagreen">Library</b></span></i>
                </span>
                <h2 class="center" style="color:red;"><?php if(!empty($msg)){echo $msg;} ?></h2>
            </div>
            <br>
            <section class="courses">
               <?php 
    $msg="";
                $default="Home";
$sql="SELECT * FROM course";
$res=mysqli_query($conn,$sql);
                $i=1;
if(mysqli_num_rows($res)>0)
{
    while($row=mysqli_fetch_assoc($res)){
        if($i%2!=0){
        echo "<div class='row course1' style='background-image: linear-gradient(90deg, rgba(9, 150, 230, 0.5), rgba(72, 130, 120, 0.7)), url(data:image/*;base64,".base64_encode($row["c_image"]).");'>
                    
                    <div class='col col-sm-12 col-md-6 col-lg-6 center'>
                        <span class='wow fadeIn' data-wow-delay='.4s' style='font-size:80px;color:#eee;font-family:Love Ya Like A Sister, cursive;'>Learn ".$row["c_name"]."</span>
                        <p class='wow fadeInRight' data-wow-delay='.5s'>".$row["c_description"]."</p>
                        <a href='course_content.php?course=".$row["c_name"]."&heading=".$default."'><button class='btn1 wow fadeInUp' data-wow-delay='.6s'>
                            Start Learning <i class='fa fa-external-link'></i>
                        </button></a>
                    </div>


                </div>";
        }
        else{
            echo "<div class='row course2'>

                    <div class='col col-sm-12 col-md-6 col-lg-6 center'>
                        <span class='wow fadeIn' data-wow-delay='.4s' style='font-size:80px;color:#000;font-family:Love Ya Like A Sister, cursive;'>Learn ".$row["c_name"]."</span>
                        <p class='wow fadeInLeft' data-wow-delay='.5s'>".$row["c_description"]."</p>
                        <a href='course_content.php?course=".$row["c_name"]."&heading=".$default."'><button class='btn2 wow fadeInUp' data-wow-delay='.6s'>
                            Start Learning <i class='fa fa-external-link'></i>
                        </button></a>
                    </div>
                    <div class='col col-sm-12 col-md-6 col-lg-6'>
                        <img src='data:image/*;base64,".base64_encode($row["c_image"])."' class='container' style='opacity:.8'>
                    </div>


                </div>";
        }
        $i++;
    }
}
else{
    $msg="no courses found!";
}
    ?>
              <br>
               <hr class="center" style="width:350px;border:2px solid #096d96">
               <!-- new main content end -->
               
               <!-- content without loop 
                <div class="row course1">
                    
                    <div class="col col-md-6 center" style="">
                        <span style="font-size:80px;color:#eee;font-family: 'Love Ya Like A Sister', cursive;">Learn HTML</span>
                        <p>HTML stands for Hyper Text Markup Language. It is used to design web pages using markup language. HTML is the combination of Hypertext and Markup language. Hypertext defines the link between the web pages. Markup language is used to define the text document within tag which defines the structure of web pages. This language is used to annotate (make notes for the computer) text so that a machine can understand it and manipulate text accordingly.</p>
                        <button class="btn1" onclick="window.location.href='#'">
                            Start Learning <i class="fa fa-external-link"></i>
                        </button>
                    </div>


                </div>
                <div class="row course2">

                    <div class="col col-md-6 center" style="">
                        <span style="font-size:80px;color:#000;font-family: 'Love Ya Like A Sister', cursive;">Learn HTML</span>
                        <p>HTML stands for Hyper Text Markup Language. It is used to design web pages using markup language. HTML is the combination of Hypertext and Markup language. Hypertext defines the link between the web pages. Markup language is used to define the text document within tag which defines the structure of web pages. This language is used to annotate (make notes for the computer) text so that a machine can understand it and manipulate text accordingly.</p>
                        <button class="btn2" onclick="window.location.href='#'">
                            Start Learning <i class="fa fa-external-link"></i>
                        </button>
                    </div>
                    <div class="col col-md-6">
                        <img src="images/slider2.jpg" class="container">
                    </div>


                </div>
                <div class="row course1">

                    <div class="col col-md-6 center" style="">
                        <span style="font-size:80px;color:#eee;font-family: 'Love Ya Like A Sister', cursive;">Learn HTML</span>
                        <p>HTML stands for Hyper Text Markup Language. It is used to design web pages using markup language. HTML is the combination of Hypertext and Markup language. Hypertext defines the link between the web pages. Markup language is used to define the text document within tag which defines the structure of web pages. This language is used to annotate (make notes for the computer) text so that a machine can understand it and manipulate text accordingly.</p>
                        <button class="btn1" onclick="window.location.href='#'">
                            Start Learning <i class="fa fa-external-link"></i>
                        </button>
                    </div>


                </div>
                <div class="row course2">

                    <div class="col col-md-6 center" style="">
                        <span style="font-size:80px;color:#000;font-family: 'Love Ya Like A Sister', cursive;">Learn HTML</span>
                        <p>HTML stands for Hyper Text Markup Language. It is used to design web pages using markup language. HTML is the combination of Hypertext and Markup language. Hypertext defines the link between the web pages. Markup language is used to define the text document within tag which defines the structure of web pages. This language is used to annotate (make notes for the computer) text so that a machine can understand it and manipulate text accordingly.</p>
                        <button class="btn2" onclick="window.location.href='#'">
                            Start Learning <i class="fa fa-external-link"></i>
                        </button>
                    </div>
                    <div class="col col-md-6">
                        <img src="images/slider2.jpg" class="container">
                    </div>


                </div>
                -->

            </section>
      
        </section>
    </div>
</body>

</html>


<?php 
include('include/footer.php');
?>
