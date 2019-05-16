<?php 

include('include/conn.php');
$getid=$_GET["id"];

?>

<script src="https://cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<html>

<head>
    <title>Admin Edit Course</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Trade+Winds" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="row" style="margin:0px;margin-top:10px;padding:0px;">
        <div class="col col-2">
            <?php include('include/header.php');  ?>
        </div>

        <div class="col col-10">

            <div id="Add" class="w3-container blog" style="display">
                <span class="right"><a class="btn btn-dark" href="updatecourse.php">Back</a></span>
                <h2 style="color:#096d96;background-color:#eee;" class="center">Edit Course Details</h2>

                <div class="container" style="background-color:white;border-radius:5px;">
                    <br>


                    <?php 
                    if($getid){
                        $sql1="SELECT * FROM course WHERE c_id='$getid'";
                        $res1=mysqli_query($conn,$sql1);
                            
                        if(mysqli_num_rows($res1)>0){
                            while($row1=mysqli_fetch_assoc($res1)){
                                $getcname=$row1["c_name"];
                                $getcdes=$row1["c_description"];
                                $getcimage="data:image/*;base64,".base64_encode($row1["c_image"])."";
                                $getcicon="data:image/*;base64,".base64_encode($row1["c_icon"])."";
                          }
                        }
                            }
                       
                    ?>
                    <section class="editcontent" style="display">
                        <form action="" id="editcourse" class="form-group" enctype="multipart/form-data" method="POST" style="background-color:white;border-radius:5px;">
                            <div class="row">
                                <div class="col col-sm-3">
                                    <label for="cname">Course Name</label>
                                </div>
                                <div class="col col-sm">
                                    <input type="text" id="cname" name="cname" class="form-control" value="<?php echo $getcname; ?>" required>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col col-sm-3">
                                    <label for="cdes">Description</label>
                                </div>
                                <div class="col col-sm">
                                    <textarea type="text" id="cdes" name="cdes" class="form-control" rows="5" value="" required><?php echo $getcdes; ?></textarea>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col col-sm-3">
                                    <label for="cimage">Course Image</label>
                                </div>
                                <div class="col col-sm">
                                   <img class='img-fluid' height="40% auto" width="70% auto" src='<?php echo $getcimage; ?>'>
                                    <input type="file" id="cimage" name="cimage" class="form-control" accept="image/*">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col col-sm-3">
                                    <label for="cicon">Course Icon</label>
                                </div>
                                <div class="col col-sm">
                                   <img class='img-fluid' height="20% auto" width="40% auto" src='<?php echo $getcicon; ?>'>
                                    <input type="file" id="cicon" name="cicon" class="form-control" accept="image/*">
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col col-sm-3">

                                </div>
                                <div class="col col-sm">
                                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                                    <a class="btn btn-light" href="updatecourse.php">Cancel</a>
                                </div>
                            </div><br>
                        </form>
                    </section>
                    <?php 
                       if(isset($_POST["submit"])){
                           
                           $newcname=$_POST["cname"];
                           $newcdes=$_POST["cdes"];
                           if($_FILES['cimage']['name']!="" && $_FILES['cicon']['name']!=""){
                               $newcimage=addslashes(file_get_contents($_FILES["cimage"]["tmp_name"]));
                               $newcicon=addslashes(file_get_contents($_FILES["cicon"]["tmp_name"]));
                               $sqlupdate="UPDATE course SET c_name='".$newcname."',c_description='".$newcdes."',c_image='".$newcimage."',c_icon='".$newcicon."' WHERE c_id='".$getid."'";
                               $sqlcontentcourse="UPDATE course_content SET course='".$newcname."' WHERE course='".$getcname."'";
                           }else
                           if($_FILES['cimage']['name'] != ""){
                               $newcimage=addslashes(file_get_contents($_FILES["cimage"]["tmp_name"]));
                               $sqlupdate="UPDATE course SET c_name='".$newcname."',c_description='".$newcdes."',c_image='".$newcimage."' WHERE c_id='".$getid."'";
                               $sqlcontentcourse="UPDATE course_content SET course='".$newcname."' WHERE course='".$getcname."'";
                           }else
                           if($_FILES['cicon']['name'] != ""){
                                $newcicon=addslashes(file_get_contents($_FILES["cicon"]["tmp_name"]));
                               $sqlupdate="UPDATE course SET c_name='".$newcname."',c_description='".$newcdes."',c_icon='".$newcicon."' WHERE c_id='".$getid."'";
                               $sqlcontentcourse="UPDATE course_content SET course='".$newcname."' WHERE course='".$getcname."'";
                           }else{
                              $sqlupdate="UPDATE course SET c_name='".$newcname."',c_description='".$newcdes."' WHERE c_id='".$getid."'";
                               $sqlcontentcourse="UPDATE course_content SET course='".$newcname."' WHERE course='".$getcname."'";
                           }
                           $resnew=mysqli_query($conn,$sqlupdate);
                           $resnew1=mysqli_query($conn,$sqlcontentcourse);
                           if($resnew && $resnew1){
                             echo "<script>alert('successfully updated your content!');
                             window.location.href='updateeditcourse.php?id=".$getid."'</script>";
                               
                             }
                             else{
                                 echo "<script>alert(failed to update your content!);</script>";
                             }
                       }
                        
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<script>
    CKEDITOR.replace('content');

</script>
