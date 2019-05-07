<?php include('include/header.php');
include('include/conn.php');?>

<?php   
 $msg="";
if(isset($_POST['login']))
{
   
    $uname=mysqli_real_escape_string($conn,$_POST['username']);
    $upass=mysqli_real_escape_string($conn,$_POST['password']);
    $sql="SELECT * FROM login WHERE username='".$uname."' AND password='".$upass."'";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            if($row["usertype"]=="admin"){
                $_SESSION["name"]=$uname;
                $msg="Welcome ".$uname." (admin)";
                header("location: index.php");
                
            }
            else if($row["usertype"]=="user"){
                $_SESSION["name"]=$uname;
                $msg="Welcome ".$uname;
                header("location: index.php");
            }
            else{
                $msg="incorrect details";
            }
        }
    
    }
    else{
        $msg="Not registered!Register first";
    }
    if($res){
        if(!empty($_POST["remember"])){
            setcookie("username",$_POST["username"],time()+(10*365*24*60*60));
            setcookie("password",$_POST["password"],time()+(10*365*24*60*60));
        }
        else{
            if(isset($_COOKIE["username"])){
                setcookie("username","");
                
            }
            if(isset($_COOKIE["password"])){
                setcookie("password","");
            }
        }
    }
}
?>


<html>

<head>
    <title>Login | E-Learning</title>
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
        <!-- login page content goes here  -->
        <div id="loginform" style="display:block;">
            <div class="d-flex justify-content-center">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                    </div>
                    <div class="card-body" style="margin-top:30px">
                        <form class="center" method="POST" action="#" id="loginform">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" id="username" name="username" class="form-control" placeholder="username" value="<?php if(isset($_COOKIE["username"])){echo $_COOKIE["username"];} ?>" required>

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                </div>
                                <input type="password" id="password" name="password" value="<?php if(isset($_COOKIE["password"])){echo $_COOKIE["password"];} ?>" class="form-control" placeholder="password" required>
                            </div>
                            <div class="row align-items-center remember">
                                <input type="checkbox" name="remember">Remember Me
                            </div>
                            <div class="form-group">
                                <input type="submit" id="login" name="login" value="Login" class="btn float-right" style="background-color:gold">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center">
                            Don't have an account? &nbsp;<a href="register.php" id="register"><u> Register Here</u></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<?php include('include/footer.php'); ?>
