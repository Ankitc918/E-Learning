<?php include('include/header.php');
include('include/conn.php');?>

<?php  
$msg="";
if(isset($_POST['send']))
{
    $uname=$_SESSION["name"];
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $message=mysqli_real_escape_string($conn,$_POST['message']);
    
    if(!$uname){
        $msg="Not logged in ! Please login first.";
    }
    else{
       
    
    $sql="INSERT INTO contact(username,name,email,phone,message) VALUES('$uname','$name','$email','$phone','$message')";
    $res=mysqli_query($conn,$sql);
    
    if($res){
        $msg="Successfully submitted your message!";
        }
    else{
        $msg="Some error occured while placing message. Please try again.";
        }
    }
       
    
}
?>


<html>

<head>
    <title>Contact | E-Learning</title>
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
        <div id="contactform">
            <div class="d-flex justify-content-center">
                <div class="card" style="background-color:#096d96 !important;height:520px">
                    <div class="card-header">
                        <h3>Drop us a message</h3>
                    </div>
                    <div class="card-body" style="margin-top:10px;">
                        <form class="center" method="POST" action="#">
                            <div class="input-group form-group">
                               <div class="col col-4">
                                   <label for="name">Name</label>
                               </div>
                               <div class="col col-8">
                                   <input class="form-control" id="name" name="name" type="text" placeholder="enter your name">
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
                                   <label for="phone">Phone No.</label>
                               </div>
                               <div class="col col-8">
                                   <input class="form-control" id="phone" name="phone" type="tel" placeholder="enter phone number" required>
                               </div>
                            </div>
                            <div class="input-group form-group">
                               <div class="col col-4">
                                   <label for="message">Message</label>
                               </div>
                               <div class="col col-8">
                                   <textarea class="form-control" id="message" name="message" rows="4" type="text" placeholder="compose your message" required></textarea>
                               </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="send" name="send" value="Submit" class="btn " style="background-color:gold">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center">
                            Your enquiry will be proccessed soon!
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<?php include('include/footer.php'); ?>
