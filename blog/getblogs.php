<?php
include('conn.php');
if(empty($_GET)){
$sql="SELECT id,title,author,upload_date,image,category FROM posts";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
    // output data of each row
    
    while($row = mysqli_fetch_assoc($res)) {
        
        echo "
        
           <div class='abc' id=".$row["id"]."><a href='blogpage.php?title=".$row["title"]."&id=".$row["id"]."'>
                        <img class='card-img-top' src=".$row["image"]." style='width:100%;height:50%'>
                        <div class='card-body'>
                            <div class='card-title' style='font-size:20px;color:#4880db'>
                                <span id='title' name='title'>".$row["title"]."</span>
                            </div>
                         <div class='row'>
                            <div class='col'>
                                <div class='text-left' id='author' name='author' style='font-size:15px;'><b> ".$row["author"]."</b></div>
                                <div class='text-left' id='upload_date' name='upload_date' style='font-size:15px;'>".$row["upload_date"]."</div>
                                
                            </div>
                            <div class='col'>
                                <div class='text-right' id='category' name='category' style='font-size:15px;'><span style='color:grey'>".$row["category"]."</span></div>
                                <div class='text-right' id='share' name='share'><span class='fa fa-share-square'></span></div>
                            </div> 
                            </div>
                        </div>
           </div>
      
        </a>
        
                    ";
    }
    
}}else if(!empty($_GET)){
    $sql="SELECT id,title,author,upload_date,image,category FROM posts WHERE category=".$_GET["category"]."";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
    // output data of each row
    
    while($row = mysqli_fetch_assoc($res)) {
        
        echo "
        
           <div class='abc' id=".$row["id"]."><a href='blogpage.php?title=".$row["title"]."&id=".$row["id"]."'>
                        <img class='card-img-top' src=".$row["image"]." style='width:100%;height:50%'>
                        <div class='card-body'>
                            <div class='card-title' style='font-size:20px;color:#4880db'>
                                <span id='title' name='title'>".$row["title"]."</span>
                            </div>
                         <div class='row'>
                            <div class='col'>
                                <div class='text-left' id='author' name='author' style='font-size:15px;'><b> ".$row["author"]."</b></div>
                                <div class='text-left' id='upload_date' name='upload_date' style='font-size:15px;'>".$row["upload_date"]."</div>
                                
                            </div>
                            <div class='col'>
                                <div class='text-right' id='category' name='category' style='font-size:15px;'><span style='color:grey'>".$row["category"]."</span></div>
                                <div class='text-right' id='share' name='share'><span class='fa fa-share-square'></span></div>
                            </div> 
                            </div>
                        </div>
           </div>
      
        </a>
        
                    ";
    }
    
}
} else {
    echo "0 results";
}

?>
