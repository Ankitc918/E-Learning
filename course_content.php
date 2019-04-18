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
        <?php echo "mtitle" ?> | E-Learning</title>
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
                                echo "<tr><td><a style='color:#797979' href='course_content.php?course=".$course."&heading=".$row["heading"]."'><i class='fa fa-caret-right'>&nbsp;</i>".$row["course"]." - ".$row["heading"]."</a></td></tr>";
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
                    <div class='row'>
                        <span class='col left'><button class='btn btn-light'><i class='fa fa-arrow-circle-left'> Previous Page</i></button></span>
                        <span class='col right'><button class='btn btn-light'>Next Page <i class='fa fa-arrow-circle-right'></i></button></span>
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
                                echo "<div class='contentbody'>".$row["content"]."</div>";
                                }
                                }
                                else{
                                echo "<span style='color:red'>no content found!</span>";
                                }
                            ?>

                    </div>
                    <hr>
                    <div class='row'>
                        <span class='col left'><button class='btn btn-light'><i class='fa fa-arrow-circle-left'> Previous Page</i></button></span>
                        <span class='col right'><button class='btn btn-light'>Next Page <i class='fa fa-arrow-circle-right'></i></button></span>
                    </div>
                    <hr>
                </div>
            </div> 
        </section>

    </div>


</body>

</html>
<?php include('include/footer.php'); ?>
