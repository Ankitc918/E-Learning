<?php include('include/header.php');
include('include/conn.php');?>

<?php  
$msg="";
if(isset($_POST['register']))
{
    $uname=mysqli_real_escape_string($conn,$_POST['username']);
    $upass=mysqli_real_escape_string($conn,$_POST['password']);
    $uemail=mysqli_real_escape_string($conn,$_POST['email']);
    $fetch="SELECT * FROM login WHERE (username='".$uname."' AND password='".$upass."') OR (email='".$uemail."')";
    $resfetch=mysqli_query($conn,$fetch);
    if(mysqli_num_rows($resfetch)>0){
        $msg="Already registered with us ! Please login.";
    }
    else{
    $sql="INSERT INTO login(username,password,email,usertype) VALUES('$uname','$upass','$uemail','user')";
    $res=mysqli_query($conn,$sql);
    if($res){
        $msg="Successfully registered! Please Login to continue.";
        }
    else{
        $msg="some error occured while registering. Try again.";
        }
    }
}
?>


<html>

<head>
    <title>Register | E-Learning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>

        .card{
            height: 450px;
            margin-top: 50px;
            margin-bottom: 50px;
            width: 450px;
            background-color: #096d96 !important;
            background-image: url("https://www.transparenttextures.com/patterns/diagmonds.png");
            }


            .input-group-prepend span{
            width: 50px;
            background-color: gold;
            color: black;
            }

            .remember input
            {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
            }
       @media (max-width:415px) and (orientation:portrait){
           .card{
               height: 350px;
           }
    
}
  </style>
</head>

<body style="color:white;">
    <div class="container">
        <br>
        <div class="msg center" style="color:green"><?php echo $msg; ?></div>
        
        <!-- register page content goes here  -->
        <div id="registerform">
            <div class="d-flex justify-content-center">
                <div class="card" style="background-color:#797979 !important;height:500px">
                    <div class="card-header">
                        <h3>Register Here</h3>
                    </div>
                    <div class="card-body" style="margin-top:30px;">
                        <form class="center" method="POST" action="#">
                            <div class="input-group form-group">
                               <div class="col col-4">
                                   <label for="username">Username</label>
                               </div>
                               <div class="col col-8">
                                   <input class="form-control" id="username" name="username" type="text" placeholder="enter username" required>
                               </div>
                            </div>
                            <div class="input-group form-group">
                               <div class="col col-4">
                                   <label for="email">Email</label>
                               </div>
                               <div class="col col-8">
                                   <input class="form-control" id="email" name="email" type="email" placeholder="enter email" required>
                               </div>
                            </div>
                            
                            <div class="input-group form-group">
                               <div class="col col-4">
                                   <label for="password">Password</label>
                               </div>
                               <div class="col col-8">
                                   <input class="form-control" id="password" name="password" type="password" placeholder="enter password" required>
                               </div>
                            </div>
                            <div class="input-group form-group">
                               <div class="col col-4">
                                   <label for="confirm_password">Confirm Password</label>
                               </div>
                               <div class="col col-8">
                                   <input class="form-control" id="confirm_password" name="confirm_password" type="password" placeholder="confirm password" required>
                               </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="register" name="register" value="Register" class="btn " style="background-color:gold">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center">
                            Already a user? &nbsp;<a href="login.php" id="login"><u> Sign In</u></a> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!-- validate password code goes here -->
<script>

    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
    
  
    
</script>

<?php include('include/footer.php'); ?>
