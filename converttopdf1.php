<head>
  
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' href='css/bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='css/style.css' type='text/css'>
    
    <link href='https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Trade+Winds' rel='stylesheet'>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' ></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>

</head>
<?php
include('include/conn.php');
require('fpdf/fpdf.php');
class PDF extends FPDF
{
    protected $B = 0;
    protected $I = 0;
    protected $U = 0;
    protected $HREF = '';

    function WriteHTML($html)
    {
        // HTML parser
        $html = str_replace("\n",' ',$html);
        $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
        foreach($a as $i=>$e)
        {
            if($i%2==0)
            {
                // Text
                if($this->HREF)
                    $this->PutLink($this->HREF,$e);
                else
                    $this->Write(5,$e);
            }
            else
            {
                // Tag
                if($e[0]=='/')
                    $this->CloseTag(strtoupper(substr($e,1)));
                else
                {
                    // Extract attributes
                    $a2 = explode(' ',$e);
                    $tag = strtoupper(array_shift($a2));
                    $attr = array();
                    foreach($a2 as $v)
                    {
                        if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                            $attr[strtoupper($a3[1])] = $a3[2];
                    }
                    $this->OpenTag($tag,$attr);
                }
            }
        }
    }

    function OpenTag($tag, $attr)
    {
        // Opening tag
        if($tag=='B' || $tag=='I' || $tag=='U')
            $this->SetStyle($tag,true);
        if($tag=='A')
            $this->HREF = $attr['HREF'];
        if($tag=='BR')
            $this->Ln(5);
    }

    function CloseTag($tag)
    {
        // Closing tag
        if($tag=='B' || $tag=='I' || $tag=='U')
            $this->SetStyle($tag,false);
        if($tag=='A')
            $this->HREF = '';
    }

    function SetStyle($tag, $enable)
    {
        // Modify style and select corresponding font
        $this->$tag += ($enable ? 1 : -1);
        $style = '';
        foreach(array('B', 'I', 'U') as $s)
        {
            if($this->$s>0)
                $style .= $s;
        }
        $this->SetFont('',$style);
    }

    function PutLink($URL, $txt)
    {
        // Put a hyperlink
        $this->SetTextColor(0,0,255);
        $this->SetStyle('U',true);
        $this->Write(5,$txt,$URL);
        $this->SetStyle('U',false);
        $this->SetTextColor(0);
    }
}

$pdf= new PDF();
$pdf->SetAuthor('Ankit Chauhan');
$pdf->SetTitle('".$_GET["heading"]."');
$sql="SELECT * FROM course_content WHERE course='".$_GET["course"]."' AND heading='".$_GET["heading"]."'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
        $content="".$row["content"]."";
    }
}
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$html="<header>".$_SERVER["REQUEST_URI"]." - <span class='right' style='color:#096d96'>".date("d-m-Y")." (crafted by Ankit Chauhan)</span></header><hr><div style='padding:40px;'><h1 style='text-align:center;color:#096d96'>".$_GET["heading"]."</h1><br>".$content."</div><hr><footer>".$_SERVER["REQUEST_URI"]."<span class='right' style='color:#096d96'> - ".date("d-m-Y")." (crafted by Ankit Chauhan)</span></footer>";

$pdf->WriteHTML(utf8_decode($html));
$pdf->Output();



 
        echo "file saved successfully";
?>
