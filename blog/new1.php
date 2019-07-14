<?php 
        include('conn.php');


		  	if(isset($_POST['submit'])){
		  	$title=mysqli_real_escape_string($conn,$_POST['title']);
     $author=mysqli_real_escape_string($conn,$_POST['author']);
     $upload_date=date();
     $content=mysqli_real_escape_string($conn,$_POST['content']);
     $image=mysqli_real_escape_string($conn,$_POST['image']);
     $category=mysqli_real_escape_string($conn,$_POST['category']);
     $sql="INSERT INTO posts(title,author,content,category) VALUES('.$title.','.$author.','.$content.','.$category.')";
     $res=mysqli_query($conn,$sql);
     if($res!=null){
         echo "successfully added your blog!";
     }
     else{
         echo "failed to upload";
     }
            
            }

      
?>


  
  <head>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	  <script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="/code4pt/styles/js/bootstrap.js"></script>
<script src="/code4pt/styles/js/jquery.js"></script>	  
  </head>

  <body>
    
<br> <br><br> <br><br> <br><br> <br>

<style>
	
.success {
    width: 100%;
    background-color: aquamarine;
    text-align: center;
    padding: 7px;
    font-size: 21px;
}
.warning {
    width: 100%;
    background-color: #ff7f7f;
    text-align: center;
    padding: 7px;
    font-size: 21px;
    color: aliceblue;
}
.Message_box {
    width: 100%;
    background-color: lightgray;
    text-align: center;
    padding: 7px;
    font-size: 21px;
    color: black;
}
#course_fee {
    color: #fff;
    background-color: #41cc78;
    text-align: center;
    font-weight: bold;
}
	.wrap{
		margin:0 auto;
		margin-top:20px;
		margin-bottom:20px;
		width:97%;
		border:2px solid green;
		box-shadow:1px 2px 3px 4px #BCF5A9;
		
	}
	</style>

	<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

	
  
	  
	  
<header>
        <div style="background-color: #5fcf80;padding-top:5px;padding-bottom:5px;margin-top:0px;color:#ffffff;">
            <center>
                <h2> Registration</h2>

            </center>
        </div>
    </header>
<div class="clearfix";>


    
<div class="wrap">

            <div class="row" style="background: white;  border-radius: 25px;"  class="border-right-0">

                <div class="col-lg-8 col-lg-offset-2">
        <?php if(isset($msg)) { echo $msg; } else { echo "<div style='background-color:white' class='Message_box'>Please fill the details given below.</div>"; } ?>

                    <p class="lead"></p>

                    <!-- We're going to place the form here in the next step -->
            

   <!-- <form class="well form-horizontal" action=" " method="post"  id="contact_form"> -->


<section style=background-image:url(img/green.jpg);background-repeat:no-repeat;>
<form  method="post" action="#" role="form">
<fieldset>
    <div class="messages"></div>

    <div class="controls">


<div class="row">
 <div class="col-md-12">

<h2> PROGRAM DETAILS </h2>

</div>
</div>

<hr style="color:green; border-top:1px solid green;">
<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name"><span style="color: black;">Program </span><span style="color: red;">* </span> </label>
                    <select id="program" type="text" name="program" class="form-control" required>
                          <option value="Select">Select</option>
							
                          
                        </select> 
                    <div class="help-block with-errors"></div>
                </div>
            </div>

       
      <div class="col-md-6">
                <div class="form-group">
                   <label for="form_lastname"><span style="color: black;">Location </span> <span style="color: red;">* </span> </label>
                    <select type="text" name="location" id="location" class="form-control" required>
                          <option value="Select">Select</option>
						<option value="Noida">Noida</option>
						<option value="Kolkata">Kolkata</option>
						<option value="Hyderabad">Hyderabad</option>
						<option value="Vizag">Vizag</option>
						<option value="Lucknow">Lucknow</option>
						  
                         <?php /*
                          $query = mysql_query("SELECT * FROM register_mta ");
						  while($row = mysql_fetch_assoc($query)){
                          $location=location($row['location']); 
                          } */
                        ?>

                        </select> 
                      
             <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>


        <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    
          <label for="form_lastname"><span style="color: black;">Course </span> <span style="color: red;">* </span> </label>
                    <select  type="text" name="course" id="course" class="form-control" required>
                          <option value="Select">Select</option>
                        </select> 
                    
           <input type="hidden" name="fee" id="fee">
                   <div id="course_fee"></div>
           
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname"><span style="color: black;">Batch </span><span style="color: red;">* </span>  </label>
                    <select id="form_name" type="text" name="batch" class="form-control" required >
                          <option value="Select">Select</option>
                          <option value="STP-MAY-FIRST-BATCH-19">STP-MAY-FIRST-BATCH-19</option>
                          <option value="STP-JUNE-FIRST-BATCH-19">STP-JUNE-FIRST-BATCH-19</option>
						  <option value="STP-JUNE-SECOND-BATCH-19">STP-JUNE-SECOND-BATCH-19</option>
						  <option value="STP-JULY-FIRST-BATCH-19">STP-JULY-FIRST-BATCH-19</option>
						<option value="STP-JULY-SECOND-BATCH-19">STP-JULY-SECOND-BATCH-19</option>     
                     </select> 
                   <div class="help-block with-errors"></div>
                </div>
            </div>
			
        </div>
		<div class="row">
		<div class="col-md-12">
			<button type="button" class="btn-success" onclick="show();">Next</button>
		</div>
	</div>


        
<div id="flop" style="display:none;">
<div class="row">
 <div class="col-md-12">

<h2> PERSONAL DETAILS </h2>

</div>
</div>

<hr style="color:green; border-top:1px solid green;">



    
<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email"><span style="color: black;"> Name </span> <span style="color: red;">* </span> </label>
                    <input id="form_email" type="text" name="fname" style="width:300px;" class="form-control" placeholder="Please enter your name *" required data-error="Valid email is required." required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            
        </div>




        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email"><span style="color: black;">Email </span> <span style="color: red;">* </span> </label>
                    <input id="form_email" type="email" name="email" style="width:300px;" class="form-control" placeholder="Please enter your email *" required data-error="Valid email is required." required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone"><span style="color: black;">Phone </span> <span style="color: red;">* </span></label>
                    <input id="form_phone" type="number" name="phone" style="width:300px;" class="form-control" placeholder="Please enter your phone" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
	<div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message"><span style="color: black;">Current Location</span> <span style="color: red;">* </span> </label>
                    <textarea id="form_message" type="text" name="address" cols="80" class="form-control" placeholder="Enter details Here  *" rows="4"  data-error="Please,leave us a message." required ></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>

	</div>
<div class="row">
		<div class="col-md-12">
			<button type="button" class="btn-success" onclick="show_y();">Next</button>
		</div>
	</div>
	
		</div>
<div id="div2" style="display:none;">
<div class="row">
 <div class="col-md-12">

<h2 style="margin-left : 15px;"> CURRENT ACADEMIC DETAILS </h2>

</div>
</div>


<!--
        
        <div class="col-md-6">
<hr style="color:green; border-top:1px solid green;">
                <div class="form-group">
                    <label for="form_lastname"><span style="color: black;">State </span><span style="color: red;">* </span>  </label>
                    <select type="text" name="state" id="state" class="form-control" style="width:300px;" required>
                          <option value="Select">Select</option>
                       // <?php
                       //   $Ssql=mysql_query("select * from state order by state");
            //    while($Srow=mysql_fetch_array($Ssql)) {
            //    echo "<option value=".$Srow['id'].">".$Srow['state']."</option>";  
            //    }
               ?>
                          
                        </select> 
                   <div class="help-block with-errors"></div>
                </div>
            </div>

        
<div class="col-md-6">
            <hr style="color:green; border-top:1px solid green;">
                <div class="form-group">
                    <label for="form_lastname"><span style="color: black;">City </span> <span style="color: red;">* </span> </label>
                    <select  type="text" name="city" id="city" class="form-control" style="width:300px;" required>
                          <option value="Select">Select</option>
                        </select> 
                   <div class="help-block with-errors"></div>
                </div>
            </div>
      
      -->
        

<div class="col-md-6">

        
            
            

                <div class="form-group">
                    <label for="form_lastname"><span style="color: black;">University Name </span> <span style="color: red;">* </span> </label>
                    <select id="university_name" type="text" name="university_name" class="form-control" style="width:300px;" required>
                          <option value="Select">Select</option>
                          <?php
                          $Usql=mysql_query("select * from university order by univ_name");
              while($Urow=mysql_fetch_array($Usql)) {
              echo "<option value=".$Urow['id'].">".$Urow['univ_name']."</option>";  
              }
              ?>
                        </select> 
                   <div class="help-block with-errors"></div>
                </div>
            </div>
        
<!--
/*
<div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname"><span style="color: black;">College Name </span> <span style="color: red;">* </span> </label>
                    <select id="college_name" type="text" name="college_name" class="form-control" style="width:300px;" required>
                          <option value="Select">Select</option>
                        </select> 
                   <div class="help-block with-errors"></div>
                </div>
            
      
      </div>    
*/      
-->     
      <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone"><span style="color: black;">College Name </span> <span style="color: red;">* </span></label>
                    <input id="form_phone" type="text" name="college_name" style="width:300px;" class="form-control" placeholder="Please Enter Your College Name" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
      
      
      
  
      

      
        
         <div class="col-md-6">
            
                <div class="form-group">
                    <label for="form_lastname"><span style="color: black;">Pursuing Qualifiaction </span> <span style="color: red;">* </span> </label>
                    <select id="form_name" type="text" name="pursuing_qualification" class="form-control" style="width:300px;" required>
                          <option value="Select">Select</option>
                          
            <option value="B.C.A.">B.C.A.</option>
            <option value="B.E.">B.E.</option>
            <option value="B.Sc.">B.Sc.</option>
            <option value="B.Tech">B.Tech</option>
            <option value="Diploma in Engg.[ Polytechnic ]">Diploma in Engg.[ Polytechnic ]</option>
            <option value="M.Sc">M.Sc</option>
            <option value="MCA">MCA</option>
            <option value="Other">Other</option>

                        </select> 
                   <div class="help-block with-errors"></div>
                </div>
            </div>
       

        <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname"><span style="color: black;">Branch </span> <span style="color: red;">* </span> </label>
                    <select id="form_name" type="text" name="branch" class="form-control" style="width:300px;" required>
                          <option value="Select">Select</option>
                          <option value="BIOMEDICAL ENGINEERING">BIOMEDICAL ENGINEERING</option>
<option value="AERONOTICAL ENGINEERING">AERONOTICAL ENGINEERING</option>
<option value="COMPUTER SCIENCE &amp; ENGINEERING">COMPUTER SCIENCE &amp; ENGINEERING</option>
<option value="I.T.">I.T.</option>
<option value="ELECTRICAL AND ELECTRONICS">ELECTRICAL AND ELECTRONICS</option>
<option value="CHEMICAL ENGINEERING">CHEMICAL ENGINEERING</option>
<option value="E.I.">E.I.</option>
<option value="ELECTRONICS &amp; COMMUNICATION">ELECTRONICS &amp; COMMUNICATION</option>
<option value="APPLIED ELECTRONICS &amp; INSTRUMENTATION">APPLIED ELECTRONICS &amp; INSTRUMENTATION</option>
<option value="ELECTRONICS AND COMMUNICATION">ELECTRONICS AND COMMUNICATION</option>
<option value="COMPUTER ENGINEERING">COMPUTER ENGINEERING</option>
<option value="MCA">MCA</option>
<option value="EN BRANCH">EN BRANCH</option>
<option value="BIO-TECHNOLOGY">BIO-TECHNOLOGY</option>
<option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
<option value="ELECTRICAL ENGINEERING">ELECTRICAL ENGINEERING</option>
<option value="CIVIL ENGINEERING">CIVIL ENGINEERING</option>
<option value="MECHANICAL ENGINEERING">MECHANICAL ENGINEERING</option>
<option value="ELECTRONICS &amp; TELECOMMUNICATION">ELECTRONICS &amp; TELECOMMUNICATION</option>
<option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
<option value="NOT SELECTED">NOT SELECTED</option>
<option value="OTHER BRANCH">OTHER BRANCH</option>
                        </select> 
                   <div class="help-block with-errors"></div>
                </div>
            </div>
	<div class="col-md-6">
            
                <div class="form-group">
                    <label for="form_lastname"><span style="color: black;">How Did You Find Us </span> <span style="color: red;">* </span> </label>
                    <select id="form_name" type="text" name="find_us" class="form-control" style="width:300px;" required>
                          <option value="Select">Select</option>
                          
            <option value="Facebook">Facebook</option>
            <option value="Social Network">Social Network</option>
            <option value="College Notice Board">College Notice Board</option>
            <option value="Poster">Poster</option>
            <option value="Internet Advertisement">Internet Advertisement</option>
            <option value="Google Search">Google Search</option>
            <option value="Friends">Friends</option>
            <option value="Seniors">Seniors</option>
						<option value="Family Members">Family Members</option>
						<option value="Other">Other</option>

                        </select> 
                   <div class="help-block with-errors"></div>
                </div>
            </div>
        

        
        

        

<div class="col-md-12">
<p class="text-muted"><strong><span style="color: red;">* </span></strong> These fields are required. </p>
            </div>
               
			<div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone"><span style="color: black;">Enter Promo Code(Optional) </span> <span style="color: red;"> </span></label>
                    <input id="form_phone" type="text" name="promocode" style="width:300px;" class="form-control" placeholder="enter promo/coupon code here">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
		
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" name="send_message" onclick="mail()" value="Register">
            </div>
        </div>
	</div>
        <br>
        <div class="row">
            <div class="col-md-12">

            

<p>            Enrollment Fees once paid is neither refundable nor transferable. </p>

<p>Kindly Check your INBOX Immediately after Submitting your details in this form.</p>

<p>Problem in filling up this form, contact at : 9219888555, <a href="https://www.mtaind.com/"> info@mtaind.com </a> </p>


                
            </div>
        </div>
    </div>

    <div class="clearfix"> <br> <br> </div>
</fieldset>
    </form>
	</section>

                </div>

            </div>

        </div>

<br > <br >
</body>
</html>

    <!--/ Contact-->
    <!--Footer-->
  
  <script type="text/javascript">
function show(){
var x = document.getElementById("flop");
 x.style.display = "block";
}
function show_y(){
var x = document.getElementById("div2");
 x.style.display = "block";
}
	  </script> 
<script type="text/javascript">
function PopupCenterDual(url, title, w, h) {
// Fixes dual-screen position Most browsers Firefox
var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;
width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

var left = ((width / 2) - (w / 2)) + dualScreenLeft;
var top = ((height / 2) - (h / 2)) + dualScreenTop;
var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

// Puts focus on the newWindow
if (window.focus) {
newWindow.focus();
}
}
</script>
  
  
    <?php include('conn/footer.php')?>
<script type="text/javascript">
$(document).ready(function(){
$('#program').change(function(){
var program=$('#program').val();
    jQuery.ajax({
    type:'POST',
    url:'return.php',
    data:'program='+program+'&part=course_details',
    dataType:'html',
    beforeSend: function(){
    },
    success : function (responseData, status, XMLHttpRequest) {
    jQuery('#location').html(responseData);
    }
    });
});


$('#location').change(function(){
var location=$('#location').val();
    jQuery.ajax({
    type:'POST',
    url:'return.php',
    data:'location='+location+'&part=location_course',
    dataType:'html',
    beforeSend: function(){
    },
    success : function (responseData, status, XMLHttpRequest) {
    jQuery('#course').html(responseData);
    }
    });
});








$('#course').change(function(){
var course=$('#course').val();
    jQuery.ajax({
    type:'POST',
    url:'return.php',
    data:'course='+course+'&part=course_fee_details',
    dataType:'html',
    beforeSend: function(){
    },
    success : function (responseData, status, XMLHttpRequest) {
    jQuery('#course_fee').html(responseData);
    
    }
    });
});
$('#course').change(function(){
var course=$('#course').val();
    jQuery.ajax({
    type:'POST',
    url:'return.php',
    data:'course='+course+'&part=course_fee_detailsD',
    dataType:'html',
    beforeSend: function(){
    },
    success : function (responseData, status, XMLHttpRequest) {
    jQuery('#fee').val(responseData);
    
    }
    });
});

  $('#university_name').change(function(){
 var university=$('#university_name').val();
       jQuery.ajax({
     type:'POST',
     url:'return.php',
     data:'university='+university+'&part=college_details',
     dataType:'html',
     beforeSend: function(){
     },
     success : function (responseData, status, XMLHttpRequest) {
     jQuery('#college_name').html(responseData);
      }
     });
 });
  
  
    
    
$('#state').change(function(){
var state=$('#state').val();
    jQuery.ajax({
    type:'POST',
    url:'return.php',
    data:'state='+state+'&part=city_details',
    dataType:'html',
    beforeSend: function(){
    },
    success : function (responseData, status, XMLHttpRequest) {
    jQuery('#city').html(responseData);
    }
    });
});
});
</script>