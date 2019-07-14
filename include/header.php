<?php session_start(); ?>

<head>
   
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Trade+Winds" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script>new WOW().init();</script>
    <link rel="stylesheet" href="css/animate.css" type="text/css">
   
</head>
<header>





    <div class="header">
        <div class="row wrap90" style="padding-top:8px;padding-bottom:8px">
            <div class="col col-sm-3 left" style="margin:auto;">
                <a href="index.php"> <img class="img-fluid" src="./images/n2logo.png" alt="logo" style="height:70px"></a>


            </div>
            <!--  full screen menu -->
            <div class="col col-sm-9 right fullmenu" style="margin:auto">
               <div class="Navbar__Link-toggle">
      <i class="fa fa-bars"></i>
    </div>
                <nav class="navbar navbar-expand-sm right">
                    <ul class="navbar-nav" id="topmenu" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="courses" href="#"><i class="fa fa-book"></i> Courses</a>
                            <div class="dropdown-menu" style="margin-top:0px" aria-labelledby="dropdown-menu-button">
                                <?php 
                                include('include/conn.php');
                                    $msg="";
                                                $default="Home";
                                $sql="SELECT * FROM course";
                                $res=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($res)>0)
                                {
                                    while($row=mysqli_fetch_assoc($res)){
                                        echo "<a class='dropdown-item' href='course_content.php?course=".$row["c_name"]."&heading=".$default."'>".$row["c_name"]."</a>";

                                    }
                                }
                                else{
                                    $msg="no courses found!";
                                    echo $msg;
                                }
                                    ?>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog/index.php"><i class="fa fa-rss"></i> Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php"><i class="fa fa-user"></i> About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php"><i class="fa fa-envelope"></i> Contact Us</a>
                        </li>
                        <?php if(empty($_SESSION["name"])){ ?>
                        <li class="nav-item">
                            <a id="login" class="nav-link" style="margin-top:-8px;"><a href="login.php"><i class="fa fa-lock"></i> Login </a>/<a href="register.php"> Register</a></a>
                        </li>
                        <?php } else{?>
                        <li class="nav-item">
                            <a id="logout" class="nav-link" style="margin-top:-8px;"><a href="logout.php"><i class="fa fa-id-badge"></i>
                                    <?php print ucfirst($_SESSION["name"]); ?>(logout)</a></a>
                        </li>
                        <?php $sql="SELECT * FROM login WHERE username='".$_SESSION["name"]."' AND usertype='admin'";
                            $res=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_assoc($res)){
                                   
                               echo " <li class='nav-item'>
                                    <a id='adminpanel' class='nav-link wow fadeIn' href='admin/index.php'>Admin Panel</a>
                                </li>";
                                }
                            }
                                    ?>
                        <?php } ?>

                    </ul>
                </nav>
            </div>
            <!-- end full screen menu -->

            <!-- short menu -->
            <!--Navbar-->


            <!-- end short menu -->
        </div>

    </div>
    <button class="fa fa-chevron-up wow bounceInUp" onclick="pagetopFunction()" id="myBtnTop" title="Go to top"></button>
</header>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtnTop").style.display = "block";
        } else {
            document.getElementById("myBtnTop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function pagetopFunction() {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        return false;
    }
    
    function classToggle() {
  const navs = document.querySelectorAll('.nav-item')
  
  navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
}

document.querySelector('.Navbar__Link-toggle').addEventListener('click', classToggle);

</script>
