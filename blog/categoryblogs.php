<?php
session_start();
include('conn.php');
$sql="SELECT id,title FROM posts";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
        
        echo " <li style='margin:2px;' ><a href='blogpage.php?title=".$row["title"]."&id=".$row["id"]."'><span class='fa fa-caret-right'></span>".$row['title']."</a></li>";
    }
} else {
    echo "0 results";
}
?>