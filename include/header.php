<?php session_start(); ?>
<header>
    <div class="header">
        <div class="row wrap90" style="padding:2px;">
            <div class="col col-sm-3 left" style="margin:auto;">

                <h2>
                    <a href="index.php"><i class="fa fa-graduation-cap" style="color:gold"></i><i style="color:lightgoldenrodyellow;font-family:comic-sans;">E-Learning</i></a>
                </h2>

            </div>
            <!--  full screen menu -->
            <div class="col col-sm-9 right fullmenu" style="margin:auto">
                <nav class="navbar navbar-expand-sm right">
                    <ul class="navbar-nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="courses" href="#"><i class="fa fa-book"></i> Courses</a>
                            <div class="dropdown-menu" aria-labelledby="Preview">
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
                            <a class="nav-link" href="about.php"><i class="fa fa-user"></i> About Us</a>
                        </li>
                        <?php if(empty($_SESSION["name"])){ ?>
                        <li class="nav-item">
                            <a id="login" class="nav-link" style="margin-top:-8px;"><a href="login.php" onclick="checkuser()"><i class="fa fa-lock"></i> Login</a>/<a href="register.php"> Register</a></a>
                        </li>
                        <?php } else{?>
                        <li class="nav-item">
                            <a id="logout" class="nav-link" style="margin-top:-8px;"><a href="logout.php"><i class="fa fa-id-badge"></i>
                                    <?php print $_SESSION["name"] ?>(logout)</a></a>
                        </li>
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
    <button class="fa fa-chevron-up" onclick="pagetopFunction()" id="myBtnTop" title="Go to top"></button>
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
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }

</script>
