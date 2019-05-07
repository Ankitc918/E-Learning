<?php 

include('include/conn.php');
$getcourse=$_GET["course"];
$getheading=$_GET["heading"];
$sql1="SELECT * FROM course_content WHERE course='".$getcourse."' AND heading='".$getheading."'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1)>0){
    while($row1=mysqli_fetch_assoc($res1)){
        $getcontent=$row1["content"];
        $contentid=$row1["id"];
    }
}
?>
<?php 
 if(isset($_POST['submit'])){
     
     $heading=mysqli_real_escape_string($conn,$_POST['heading']);
     $content=mysqli_real_escape_string($conn,$_POST['content']);
     $sql="UPDATE course_content SET heading='".$heading."',content='".$content."' WHERE id='".$contentid."'";
     $res=mysqli_query($conn,$sql);
     if($res!=null){
         echo "<script>alert('successfully updated your content!');
         window.location.href='updatecourse_content.php';</script>";
     }
     else{
         echo "<script>alert('failed to update content');</script>";
     }
 } ?>
<script src="https://cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<html>

<head>
    <title>Admin Edit Content</title>
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
           <span class="right"><a class="btn btn-dark" href="updatecourse_content.php">Back</a></span>
            <h2 style="color:#4880db" class="center">Edit Course Content</h2>
            
                <div class="container" style="background-color:white;border-radius:5px;">
                    <br>
                    
                   <section class="editcontent" style="display">
                    <form action="" id="editblogtodb" class="form-group" method="POST" style="background-color:white;border-radius:5px;">
                    <div class="row">
                        <div class="col col-sm-3">
                            <label for="course">Course</label>
                        </div>
                        <div class="col col-sm">
                            <input type="text" id="course" name="course" class="form-control" value="<?php echo $getcourse; ?>" disabled required>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col col-sm-3">
                            <label for="heading">Heading</label>
                        </div>
                        <div class="col col-sm">
                            <input type="text" id="heading" name="heading" class="form-control" value="<?php echo $getheading; ?>" required>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col col-sm-3">
                            <label for="content">Content</label>
                        </div>
                        <div class="col col-sm">
                            <textarea type="textarea" id="content" name="content" class="form-control"  required><?php echo $getcontent; ?></textarea>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col col-sm-3">

                        </div>
                        <div class="col col-sm">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary left">Update</button>
                        </div>
                    </div><br>
                    </form>
                    </section>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>
                   
                  
                 <script>
                CKEDITOR.replace('content');
                
                function myselected() {
                  var x = document.getElementById("c_name").value;
                 var y= document.getElementById("demo").innerHTML = "You selected: " + x;
                return x;
                }

            </script>