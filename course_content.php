<?php 
include('include/header.php');
include('include/conn.php');
$msg="";
$course=$_GET["course"];
$heading=$_GET["heading"];

?>
<html>

<head>
    <title>
        <?php echo "".$course."-".$heading."" ?> | Smart-Learn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>
    
    <div class="">
        <br>
        <br>
        <h2 class="center" style="color:red;"><?php if(!empty($msg)){echo $msg;} ?></h2>
        <section class="content">
           <?php 
    $sqlcourse="SELECT * FROM course WHERE c_name='".$course."'";
            $rescourse=mysqli_query($conn,$sqlcourse);
            if(mysqli_num_rows($rescourse)>0){
                while($row=mysqli_fetch_assoc($rescourse)){
                $cname=$row["c_name"];
                $cicon="data:image/*;base64,".base64_encode($row["c_icon"])."";
                }
            }

    ?>
            <div class='row wrap90'>
                <div class='col col-3 courseheaderleft'>
                    <div class="">
                        <img class='icon1' alt='course icon' src='<?php echo $cicon ?>'>
                    </div>
                    <div class='center'>
                        <h5>learn  <?php echo $cname ?></h5>
                    </div>
                    <hr>
                    <div class='courseindex'>
                       <h4 class='center' style='color:white;background-color:#4880db;padding:5px'><?php echo $cname ?> Tutorial</h4>
                        <hr>
                        <div>
                          <table class="table table-hover">
                          
                           <?php
                            $sql="SELECT * FROM course_content WHERE course='".$course."'";
                                $res=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($res)>0)
                                {
                                while($row=mysqli_fetch_assoc($res)){
                                echo "<tr><td><a class='wow fadeInUp' style='color:#797979;' href='course_content.php?course=".$course."&heading=".$row["heading"]."'><i class='fa fa-caret-right'>&nbsp;</i>".$row["course"]." - ".$row["heading"]."</a></td></tr>";
            
                                }
                                }
                                else{
                                echo "<span style='color:red'>no headings found!</span>";
                                }
                            ?>
                           
                            </table>
                            
                        </div>
                    </div>
                </div>
                <div class='col col-8 courseheader'>
                    <div class='row courseheader1'>
                        <div class='left'>
                            <img class='icon2' src='<?php echo $cicon ?>' alt='icon'>
                        </div>
                        <div class='col center' style='margin:auto'>
                            <h2 style='font-size:3rem'><?php echo $cname ?></h2>
                            <h5>Learning made simple</h5>
                        </div>
                    </div>
                    <hr>
                    
                    <!-- fetching previous and next records php code here  -->
                   <?php
                        $fetch_id=mysqli_query($conn,"SELECT id,heading FROM course_content WHERE course='".$course."' AND heading='".$heading."'");
                                 $curr_id=mysqli_fetch_assoc($fetch_id);
                                
                        $fetch_prev=mysqli_query($conn,"select * from course_content where id = (select max(id) from course_content where id < ".$curr_id["id"].")");
                                 $prev=mysqli_fetch_assoc($fetch_prev);
                                 if($curr_id["heading"]=="Home"){
                                     
                                     $prev_heading="Home";
                                 }else{
                                 $prev_heading=$prev["heading"];
                                 }
                                 
                        $fetch_next=mysqli_query($conn,"select * from course_content where id = (select min(id) from course_content where id > ".$curr_id["id"].")");
                                 $next=mysqli_fetch_assoc($fetch_next);
                                 $next_heading=$next["heading"];
                               
                    ?>
                    <!-- previous and next records fetching ends here -->
                    
                    <div class='row'>
                        <span class='col left'><a href='course_content.php?course=<?php echo $course ?>&heading=<?php echo $prev_heading; ?>'><button class='btn btn-light'><i class='fa fa-arrow-circle-left'></i> Previous Page</button></a></span>
                        <span class='col center'><?php echo"<a target='_blank' href='converttopdf.php?course=".$course."&heading=".$heading."'><button class='btn btn-light'><i class='fa fa-file-pdf-o'></i> Pdf version</button></a>"; ?></span>
                        <span class='col right'><a href='course_content.php?course=<?php echo $course ?>&heading=<?php echo $next_heading; ?>'><button class='btn btn-light'> Next Page <i class='fa fa-arrow-circle-right'></i></button></a></span>
                    </div>
                    <hr>
                    <div class='coursebody'>
                       <?php
                            $sql="SELECT * FROM course_content WHERE course='".$course."' AND heading='".$heading."'";
                                $res=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($res)>0)
                                {
                                while($row=mysqli_fetch_assoc($res)){
                                    echo "<h2 class='subheading'>".$cname." - ".$row["heading"]."</h2><br>";
                                echo "<div class='contentbody wow fadeInUp'>".$row["content"]."</div>";
                                
                                }
                                }
                                else{
                                echo "<span style='color:red'>no content found!</span>";
                                }
                            ?>

                    </div>
                    <hr>
                   <div class='row'>
                        <span class='col left'><a href='course_content.php?course=<?php echo $course ?>&heading=<?php echo $prev_heading; ?>'><button class='btn btn-light'><i class='fa fa-arrow-circle-left'></i> Previous Page</button></a></span>
                        <span class='col center'><?php echo"<a target='_blank' href='converttopdf.php?course=".$course."&heading=".$heading."'><button class='btn btn-light'><i class='fa fa-file-pdf-o'></i> Pdf version</button></a>"; ?></span>
                        <span class='col right'><a href='course_content.php?course=<?php echo $course ?>&heading=<?php echo $next_heading; ?>'><button class='btn btn-light'> Next Page <i class='fa fa-arrow-circle-right'></i></button></a></span>
                    </div>
                    <hr>
                </div>
            </div> 
        </section>

    </div>


</body>

</html>
<?php include('include/footer.php'); ?>

