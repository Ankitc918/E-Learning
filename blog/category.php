<?php
include('conn.php');
$sql="SELECT DISTINCT category FROM posts";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
        
       
        echo "<a href='index.php?category=".$row["category"]."'> <button type='button' class='w3-button w3-white w3-hover-black' style='margin:1px auto; border:2px solid black;border-radius:10px;' >".$row['category']."</button></a>";
    }
} else {
    echo "0 results";
}
?>