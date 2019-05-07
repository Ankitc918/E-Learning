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
    <div class="row" style="margin:0px;margin-top:10px;padding:0px;">
        <div class="col col-2">
            <?php include('include/header.php');  ?>
        </div>

        <div class="col col-10">


            <div id="Add" class="w3-container blog " style="display">
                <h2 style="color:#4880db" class="center">Welcome Admin</h2>
                <div class="bg-white ">
                   <div class="container">
                    
                    <p>
                        Smart-Learn allows admin to use CRUD operations on the courses and their content.<br>
                        Check Create, Read, Update, or Delete boxes to grant specific rights to allow the administrator to perform these tasks from the Admin Panel page in their Admin console.
                        
                       <ul style="list-style-type:disc">
                            <li>Create</li>
                            <li>Update</li>
                            <li>Delete</li>
                            <li>Read</li>
                        </ul>
                   <i class="fa fa-arrow-left fa-2x"></i> You can perform CRUD operations using the side menu bar given on the left side of the page.<br>
                    
                    </p>
                    </div>
  <video playsinline="playsinline" height="auto" width="100%" autoplay="autoplay" muted="muted" loop="loop">
    <source src="/media/1.mov" type="video/*">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">Video Header</h1>
        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
      </div>
    </div>
  </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
