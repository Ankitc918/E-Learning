
<?php
include('include/conn.php');
require('fpdf/pdfcrowd.php');
$sql="SELECT * FROM course_content WHERE course='".$_GET["course"]."' AND heading='".$_GET["heading"]."'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
        $content="".$row["content"]."";
    }
}

try
{
    // create the API client instance
    $client = new \Pdfcrowd\HtmlToPdfClient("ankitc918", "d4a16e7801f98917a59e53e5bb65f52d");

    // run the conversion and write the result to a file
    $pdf=$client->convertString("<h1 style='text-align:center;color:#096d96'>".$_GET["heading"]."</h1><br>".$content."");
    header("Content-Type: application/pdf");
    header("Accept-Ranges: none");
    header("Content-Disposition: inline; filename=\"".$_GET["course"]."-".$_GET["heading"].".pdf\"");
    
    echo $pdf;
}
catch(\Pdfcrowd\Error $why)
{
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // handle the exception here or rethrow and handle it at a higher level
    throw $why;
}
?>