
<?php
include('include/conn.php');
require('pdfcrowd/pdfcrowd.php');
$sql="SELECT * FROM course_content WHERE course='".$_GET["course"]."' AND heading='".$_GET["heading"]."'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
        $content="".$row["content"]."";
    }
}

    // Set parameters
$apikey = '813602d7-2ae8-43a8-b53a-5062b51dc535';
$value = "<head> <link rel='stylesheet' href='css/bootstrap/css/bootstrap.min.css'>
<link rel='stylesheet' href='css/style.css' type='text/css'></head><header>".$_SERVER["REQUEST_URI"]." - <span class='right' style='color:#096d96'>".date("d-m-Y")." (crafted by Ankit Chauhan)</span></header><hr><div style='padding:40px;'><h1 style='text-align:center;color:#096d96'>".$_GET["heading"]."</h1><br>".$content."</div><hr><footer>".$_SERVER["REQUEST_URI"]."<span class='right' style='color:#096d96'> - ".date("d-m-Y")." (crafted by Ankit Chauhan)</span></footer>"; // can aso be a url, starting with http..
 
// Convert the HTML string to a PDF using those parameters.  Note if you have a very long HTML string use POST rather than get.  See example #5
$result = file_get_contents("http://api.html2pdfrocket.com/pdf?apikey=" . urlencode($apikey) . "&value=" . urlencode($value));
 
// Save to root folder in website

//echo file_get_contents("".$_GET["course"]."-".$_GET["heading"].".pdf",$result);
 if(file_put_contents("".$_GET["course"]."-".$_GET["heading"].".pdf", $result))
        echo "file saved successfully";
?>
