<?php
include('conn.php');
 if(isset($_POST['submit'])){
     $title=mysqli_real_escape_string($conn,$_POST['title']);
     $author=mysqli_real_escape_string($conn,$_POST['author']);
     $content=mysqli_real_escape_string($conn,$_POST['content']);
     $image=mysqli_real_escape_string($conn,$_POST['image']);
     $category=mysqli_real_escape_string($conn,$_POST['category']);
     $sql="INSERT INTO posts(title,author,upload_date,content,image,category) VALUES('$title','$author',Now(),'$content','images/$image','$category')";
     $res=mysqli_query($conn,$sql);
     if($res!=null){
         echo "successfully added your blog!";
     }
     else{
         echo "failed to upload";
     }
 }
?>