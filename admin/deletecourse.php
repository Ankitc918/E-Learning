<?php 
include('include/conn.php');


    $id=$_GET["id"];

if(! $id){
    die('could not delete data : '.mysqli_error());
}
else{
 if(isset($_POST["del"])){
    $sql ="DELETE FROM course WHERE c_id='".$id."'";
     $sql1="DELETE FROM course_content WHERE course='bbbb'";
$res=mysqli_query($conn,$sql);
     $res1=mysqli_query($conn,$sql1);
    if($res && $res1){
        echo "<script>alert('successfully deleted !');
         window.location.href='updatecourse.php';</script>";
    }
     else{
        echo "failed to delete";
    }
 }
    
 
}


?>
<html>

<head>
    <title>Admin Delete Course</title>
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

       <div class="col col-10" style="margin-top:10px;">
           <!-- Modal -->
  <div class="container">
   
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title center">Confirm </h4>
        </div>
        <div class="modal-body center" style="color:red">
          <b>Are you sure you want to delete this course?</b>
        </div>
        
        
        <?php
            $sql1="SELECT * FROM course WHERE c_id=".$id."";
            $res1=mysqli_query($conn,$sql1);
            if(mysqli_num_rows($res1)>0){
                while($row1=mysqli_fetch_assoc($res1)){
                                $getcname=$row1["c_name"];
                                $getcdes=$row1["c_description"];
                                $getcimage="data:image/*;base64,".base64_encode($row1["c_image"])."";
                                $getcicon="data:image/*;base64,".base64_encode($row1["c_icon"])."";
                }
            }
          ?>
          <div class="container">
               <div class="row">
                                <div class="col col-sm-3">
                                    <label for="cname">Course Name</label>
                                </div>
                                <div class="col col-sm">
                                    <input type="text" id="cname" name="cname" class="form-control" value="<?php echo $getcname; ?>" disabled>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col col-sm-3">
                                    <label for="cdes">Description</label>
                                </div>
                                <div class="col col-sm">
                                    <textarea type="text" id="cdes" name="cdes" class="form-control" rows="5" value=""  disabled><?php echo $getcdes; ?></textarea>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col col-sm-3">
                                    <label for="cimage">Course Image</label>
                                </div>
                                <div class="col col-sm">
                                   <img class='img-fluid' height="40% auto" width="70% auto" src='<?php echo $getcimage; ?>' >
                                   
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col col-sm-3">
                                    <label for="cicon">Course Icon</label>
                                </div>
                                <div class="col col-sm">
                                   <img class='img-fluid' height="20% auto" width="40% auto" src='<?php echo $getcicon; ?>'>
                                    
                                </div>
                            </div><br>

                          

          </div>
        <div class="modal-footer">
        <form method="post">
         <button type="submit" name="del" id="del" class="btn btn-danger">Confirm</button>
          <a class="btn btn-default" href="updatecourse.php">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  
       </div>
        
    </div>
</body>
</html>
