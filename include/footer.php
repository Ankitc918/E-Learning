<div class="footer" style="margin-top:50px;">
    <div class="wrap90" style="padding:2px;font-size:16px">
        <div class="row">
            <div class="col" style="margin:auto;">

                <h2><a href="index.php"><i class="fa fa-graduation-cap" style="color:gold"></i><i style="color:lightgoldenrodyellow">E-Learning</i></a></h2>

            </div>
            <div class="col">
                <h3 style="color:lightgrey">COURSES</h3>
               
                <ul class="links" style="display:grid;">
                   <?php 
                                include('include/conn.php');
                                    $msg="";
                                                $default="Home";
                                $sql="SELECT * FROM course";
                                $res=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($res)>0)
                                {
                                    while($row=mysqli_fetch_assoc($res)){
                                        echo "<a href='course_content.php?course=".$row["c_name"]."&heading=".$default."'><li class='fa fa-check'>".$row["c_name"]."</li></a>";

                                    }
                                }
                                else{
                                    $msg="no courses found!";
                                    echo $msg;
                                }
                                    ?>

                </ul>
               
            </div>
            <div class="col" style="margin:auto">
                <h3 style="color:lightgrey">Contact Us</h3>
                <span>Ankit Chauhan <br>Address: ground floor, Abc building, Bazpur,<br> Uttarakhand 262401</span><br>
                <i class="fa fa-whatsapp fa-lg" title="Message us on Whatsapp"></i> :
                <a href="https://api.whatsapp.com/send?phone=91858888" target="_blank"><u>+91-858888</u> </a><br>
                <i class="fa fa-envelope fa-lg" title="Mail us"></i> :
                <a href="mailto:onlineexamsystembyankit@gmail.com" target="_blank"><u>ankitc918@gmail.com</u></a>
            </div>
            <div class="col center" style="margin:auto">
                <h3 style="color:lightgrey">Follow</h3>
                <h5>
                    <ul>
                        <a href="https://www.facebook.com/Ankitc918" target="_blank">
                            <li class="fa fa-facebook fa-lg" title="Follow us on Facebook"></li>
                        </a>
                        <a href="https://www.youtube.com/Ankitc918" target="_blank">
                            <li class="fa fa-youtube-play fa-lg" title="Follow us on Youtube"></li>
                        </a>
                        <a href="https://www.instagram.com/Ankitc918" target="_blank">
                            <li class="fa fa-instagram fa-lg" title="Follow us on Instagram"></li>
                        </a>
                        <a href="https://www.linkedin.com/in/ankit-chauhan-349a08165" target="_blank">
                            <li class="fa fa-linkedin fa-lg" title="Follow us on Linkedin"></li>
                        </a>

                    </ul>
                </h5>
            </div>
        </div>
    <br>
    </div>
    <div class="wrap100 center" style="background-color:#696969;padding:5px;">
        <span>&copy; Copyright 2019. All Rights Reserved. Developed by Ankit Chauhan</span>
    </div>
</div>
