<?php
include('conn.php');
$sql="SELECT id,title,author,upload_date,image FROM posts";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
        
       
        echo "
      
           <div class='abc' style='width:30%;margin:15px;border-radius:5px;background-color:white;'>
                        <img class='card-img-top' src=".$row["image"]." style='width:100%'>
                        <div class='card-body'>
                            <div class='card-title' style='font-size:3vw;'>
                                <span id='title' name='title'>".$row["title"]."</span>
                            </div>
                            <div class='text-left' id='author' name='author' style='font-size:1vw;'>posted by:<b> ".$row["author"]."</b></div>
                            <div class='text-left' id='upload_date' name='upload_date' style='font-size:1vw;'>date : ".$row["upload_date"]."</div>
                        </div> 
           </div>
         
                    ";
    }
} else {
    echo "0 results";
}
?>