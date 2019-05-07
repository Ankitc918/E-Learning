<?php 
    include('../include/conn.php');
if($conn){
    echo "success";
}
?>
<?php
  session_start();
if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($_POST['username']);
  $password = mysqli_real_escape_string($_POST['password']);
echo "Login";
  $query = "SELECT * FROM login WHERE username='".$username."'";
    $res=mysqli_query($conn,$query);
echo "Login";
 
  $table_user ="";
  $table_password = "";

  if(mysqli_num_rows($res)>0){

      while($row = mysqli_fetch_assoc($res)){

        $table_user = $row['username'];
        $table_password = $row['password'];
}
    if(($username == $table_user) && ($password == $table_password)){

          if($password == $table_password){

            $_SESSION['user'] = $username;
            header("location: trip.php");
          }
    }else {

            Print '<script>alert("Incorrect Password !!!"); </script>';
            Print '<script>window.location.assign("sign-in.html"); </script>';
    }
}else{

             Print '<script>alert("Incorrect Username !!!"); </script>';
             Print '<script>window.location.assign("sign-in.html"); </script>';
  }
}
?>