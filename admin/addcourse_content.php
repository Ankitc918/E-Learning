<?php 

include('include/conn.php');
$sql1="SELECT c_name FROM course";
$res1=mysqli_query($conn,$sql1);
?>
<?php 
 if(isset($_POST['submit'])){
     $course=mysqli_real_escape_string($conn,$_POST['course']);
     $heading=mysqli_real_escape_string($conn,$_POST['heading']);
     $content=mysqli_real_escape_string($conn,$_POST['content']);
     $sql="INSERT INTO course_content(course,heading,content) VALUES('$course','$heading','$content')";
     $res=mysqli_query($conn,$sql);
     if($res!=null){
         echo "successfully added your content!";
     }
     else{
         echo "failed to update content";
     }
 } ?>
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
    <div class="container wrap80">


        <div id="Add" class="w3-container blog" style="display">
            <h2 style="color:#4880db">Add Course Content</h2>
            <form action="" id="addblogtodb" class="form-group" method="POST" style="background-color:white;border-radius:5px;">
                <div class="container">
                    <br>
                    
                    <div class="row">
                        <div class="col col-sm-3">
                            <label for="course">Course</label>
                        </div>
                        <div class="col col-sm">
                            <select name="course" class="form-control" required>
                              <option  disabled selected value>--select course--</option>
                               <?php
                                if(mysqli_num_rows($res1)>0)
                                    {
                                    while($row1=mysqli_fetch_assoc($res1)){
                                        echo "<option value='".$row1["c_name"]."'>".$row1["c_name"]."</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col col-sm-3">
                            <label for="heading">Heading</label>
                        </div>
                        <div class="col col-sm">
                            <input type="text" id="heading" name="heading" class="form-control" required>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col col-sm-3">
                            <label for="content">Content</label>
                        </div>
                        <div class="col col-sm">
                            <textarea type="textarea" id="content" name="content" class="form-control" required></textarea>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col col-sm-3">

                        </div>
                        <div class="col col-sm">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary left">Add</button>
                        </div>
                    </div><br>

                </div>
            </form>
            <script>
                CKEDITOR.replace('content');

            </script>
        </div>

    </div>
</body>

</html>
