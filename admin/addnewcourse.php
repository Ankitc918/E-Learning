<?php 

include('include/conn.php');
 if(isset($_POST['submit'])){
$sql1="SELECT * FROM course WHERE c_name='".$_POST["cname"]."'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1)>0){
    while($row1=mysqli_fetch_assoc($res1)){
        if($row1["c_name"]==$_POST["cname"]){
            echo "<p class='center' style='color:red;'>course already exist!</p>";
        }
    }
}
     else{
 

?>
<!-- add new course to database code -->
<?php 


     $cname=mysqli_real_escape_string($conn,$_POST['cname']);
     $cdes=mysqli_real_escape_string($conn,$_POST['cdes']);
     $cimage=addslashes(file_get_contents($_FILES["cimage"]["tmp_name"]));
     $cicon=addslashes(file_get_contents($_FILES["cicon"]["tmp_name"]));
     $sql="INSERT INTO course(c_name,c_description,date_added,c_image,c_icon) VALUES('$cname','$cdes',Now(),'$cimage','$cicon')";
     $res=mysqli_query($conn,$sql);
     if($res!=null){
         $msg="successfully added new course";
         echo $msg;
     }
     else{
         $msg="failed to add new course";
    echo $msg;
     }
 }
 }
?>
<script src="https://cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<html>

<head>
    <title>Admin Home</title>
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
            <h2 style="color:#4880db" class="center">Add New Course</h2>
            <form action="" id="addcoursetodb" class="form-group" method="POST"  enctype="multipart/form-data" style="background-color:white;border-radius:5px;">
                <div class="container">
                    <br>
                    
                    <div class="row">
                        <div class="col col-sm-3">
                            <label for="cname">Course Name</label>
                        </div>
                        <div class="col col-sm">
                            <input type="text" id="cname" name="cname" class="form-control" required>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col col-sm-3">
                            <label for="cdes">Course Description</label>
                        </div>
                        <div class="col col-sm">
                            <textarea type="text" id="cdes" name="cdes" class="form-control" required></textarea>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col col-sm-3">
                            <label for="cimage">Course Image</label>
                        </div>
                        <div class="col col-sm">
                            <input type="file" id="cimage" name="cimage" class="form-control"  accept="image/*" required>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col col-sm-3">
                            <label for="cicon">Course Icon</label>
                        </div>
                        <div class="col col-sm">
                            <input type="file" id="cicon" name="cicon" class="form-control"  accept="image/*" required>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col col-sm-3">

                        </div>
                        <div class="col col-sm">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Add Course</button>
                             <a id="cancel" name="cancel" class="btn btn-light" href="index.php">Cancel</a>
                        </div>
                    </div><br>

                </div>
            </form>
            <script>
                CKEDITOR.replace('content');

            </script>
        </div>

    </div>
    </div>
</body>

</html>
