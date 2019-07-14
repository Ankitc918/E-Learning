<?php
include('include/conn.php');

    $id=$_GET["id"];
$name=$_GET["name"];
            $sql1="SELECT * FROM login WHERE id=".$id."";
            $res1=mysqli_query($conn,$sql1);
            if(mysqli_num_rows($res1)>0){
                while($row1=mysqli_fetch_assoc($res1)){
                                $username=$row1["username"];
                                $email=$row1["email"];
                                }
            }
          ?>
<?php 




if(! $id){
    die('could not delete data : '.mysqli_error());
}
else{
 if(isset($_POST["del"])){
     if($name==$username){
          echo "<script>alert('you cannot delete yourself !');
         window.location.href='updateadmin.php';</script>";
     }else{
    $sql ="DELETE FROM login WHERE id='".$id."'";
$res=mysqli_query($conn,$sql);
    if($res){
        echo "<script>alert('successfully deleted !');
         window.location.href='updateuser.php';</script>";
    }
     else{
        echo "failed to delete";
    }
 }
 }
 
}


?>
<html>

<head>
    <title>User Remove</title>
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
          <b>Are you sure you want to delete this user?</b>
        </div>
        
        
        
          <div class="container">
               <div class="row">
                                <div class="col col-sm-3">
                                    <label for="username">Username</label>
                                </div>
                                <div class="col col-sm">
                                    <input type="text" id="username" name="username" class="form-control" value="<?php echo $username; ?>" disabled>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col col-sm-3">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col col-sm">
                                    <input type="text" id="email" name="email" class="form-control" rows="5" value="<?php echo $email; ?>"  disabled> 
                                </div>
                            </div><br>
                            

                          

          </div>
        <div class="modal-footer">
        <form method="post">
         <button type="submit" name="del" id="del" class="btn btn-danger">Confirm</button>
          <a class="btn btn-default" href="updateuser.php">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  
       </div>
        
    </div>
</body>
</html>
