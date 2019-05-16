<?php include("conn/header.php"); ?>
<?php include("conn/conn.php");
	if($_SESSION['id']=="") { header("Location:index.php"); }
	$sql="SELECT * FROM register_mta2 WHERE id='".$_SESSION['id']."'";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0)
    {
     while($row=mysqli_fetch_assoc($res)){
	 	$program=$row["program"];
		 $course=$row["course"];
		 $fee=$row["fee"];
		 if($row["location"]==16){
		 	$location="Noida";
		 }else
			 if($row["location"]==17){
		 	$location="Kolkata";
		 }else
			 if($row["location"]==18){
		 	$location="Hyderabad";
		 }else
			 if($row["location"]==20){
		 	$location="Lucknow";
		 }else
			 if($row["location"]==29){
		 	$location="Vizag";
		 }else
			 if($row["location"]==39){
		 	$location="Online";
		 }
		 
		 $batch=$row["batch"];
		 $fname=$row["fname"];
		 $email=$row["email"];
		 $phone=$row["phone"];
		 $address=$row["address"];
		 $university_name=$row["university_name"];
		 $pursuing_qualification=$row["pursuing_qualification"];
		 $college_name=$row["college_name"];
		 $branch=$row["branch"];
		 $username=$row["username"];
		 $found=$row["found"];
		 $created_on=$row["Created_On"];
	 }
	}
?>
<head>
	<style>
		.card{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.card>hr{margin-right:0;margin-left:0}.card>.list-group:first-child .list-group-item:first-child{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.card>.list-group:last-child .list-group-item:last-child{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.card-body{-ms-flex:1 1 auto;flex:1 1 auto;padding:1.25rem}.card-title{margin-bottom:.75rem}.card-subtitle{margin-top:-.375rem;margin-bottom:0}.card-text:last-child{margin-bottom:0}.card-link:hover{text-decoration:none}.card-link+.card-link{margin-left:1.25rem}.card-header{padding:.75rem 1.25rem;margin-bottom:0;color:inherit;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125)}.card-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0}.card-header+.list-group .list-group-item:first-child{border-top:0}.card-footer{padding:.75rem 1.25rem;background-color:rgba(0,0,0,.03);border-top:1px solid rgba(0,0,0,.125)}.card-footer:last-child{border-radius:0 0 calc(.25rem - 1px) calc(.25rem - 1px)}.card-header-tabs{margin-right:-.625rem;margin-bottom:-.75rem;margin-left:-.625rem;border-bottom:0}.card-header-pills{margin-right:-.625rem;margin-left:-.625rem}.card-img-overlay{position:absolute;top:0;right:0;bottom:0;left:0;padding:1.25rem}.card-img{width:100%;border-radius:calc(.25rem - 1px)}.card-img-top{width:100%;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card-img-bottom{width:100%;border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card-deck{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column}.card-deck .card{margin-bottom:15px}@media (min-width:576px){.card-deck{-ms-flex-flow:row wrap;flex-flow:row wrap;margin-right:-15px;margin-left:-15px}.card-deck .card{display:-ms-flexbox;display:flex;-ms-flex:1 0 0%;flex:1 0 0%;-ms-flex-direction:column;flex-direction:column;margin-right:15px;margin-bottom:0;margin-left:15px}}.card-group{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column}.card-group>.card{margin-bottom:15px}@media (min-width:576px){.card-group{-ms-flex-flow:row wrap;flex-flow:row wrap}.card-group>.card{-ms-flex:1 0 0%;flex:1 0 0%;margin-bottom:0}.card-group>.card+.card{margin-left:0;border-left:0}.card-group>.card:first-child{border-top-right-radius:0;border-bottom-right-radius:0}.card-group>.card:first-child .card-header,.card-group>.card:first-child .card-img-top{border-top-right-radius:0}.card-group>.card:first-child .card-footer,.card-group>.card:first-child .card-img-bottom{border-bottom-right-radius:0}.card-group>.card:last-child{border-top-left-radius:0;border-bottom-left-radius:0}.card-group>.card:last-child .card-header,.card-group>.card:last-child .card-img-top{border-top-left-radius:0}.card-group>.card:last-child .card-footer,.card-group>.card:last-child .card-img-bottom{border-bottom-left-radius:0}.card-group>.card:only-child{border-radius:.25rem}.card-group>.card:only-child .card-header,.card-group>.card:only-child .card-img-top{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.card-group>.card:only-child .card-footer,.card-group>.card:only-child .card-img-bottom{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.card-group>.card:not(:first-child):not(:last-child):not(:only-child){border-radius:0}.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer,.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header,.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top{border-radius:0}}.card-columns .card{margin-bottom:.75rem}@media (min-width:576px){.card-columns{-webkit-column-count:3;-moz-column-count:3;column-count:3;-webkit-column-gap:1.25rem;-moz-column-gap:1.25rem;column-gap:1.25rem;orphans:1;widows:1}.card-columns .card{display:inline-block;width:100%}}.accordion .card{overflow:hidden}.accordion .card:not(:first-of-type) .card-header:first-child{border-radius:0}.accordion .card:not(:first-of-type):not(:last-of-type){border-bottom:0;border-radius:0}.accordion .card:first-of-type{border-bottom:0;border-bottom-right-radius:0;border-bottom-left-radius:0}.accordion .card:last-of-type{border-top-left-radius:0;border-top-right-radius:0}.accordion .card .card-header{margin-bottom:-1px}.card-title{background-color:lightblue;margin-top: 0px;padding: 15px;}.card-body{background-color:#eee;margin-top:-8px;}label{font-weight:100;}
	
		.statictabul > ul > li.active {

    border: 0;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: 0px;
    border-bottom: 2px solid #19529c !important;
    font-size: 16px;
    font-weight: 600;
    color: #19529c !important;

}
		.staticpageimgabout {

    background-size: cover;
    height: 43vh;
    min-height: 303px;
    overflow: hidden;
    text-align: center;
    width: 100%;

}
		.staticpageimgabout > img {

    width: 100%;
    height: 100%;

}
		.statictabul > ul {

    background: #ffffff none repeat scroll 0 0;
    border-bottom: 1px solid #e5e5e5;
    margin-top: 0;
    padding-top: 10px;
    text-align: center;

}
.nav-tabs {

    border-bottom: 1px solid #ddd;

}
.nav {

    padding-left: 0;
    margin-bottom: 0;
    list-style: none;

}
		.statictabul > ul > li {

    float: none;
    display: inline-block;
    margin: 0px 21px;

}
.nav-tabs > li {

    float: left;
    margin-bottom: -1px;

}
.nav > li {

    position: relative;
    display: block;

}
		.statictabul > ul > li.active > a {

    border: 0;
    color: #19529c !important;
    font-size: 16px;

}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {

    color: #555;
    cursor: default;
    background-color: #fff;
    border: 1px solid #ddd;
    border-bottom-color: transparent;

}
.statictabul > ul > li > a {

    color: #343434;
    font-size: 16px;
    font-weight: 600;

}
.nav-tabs > li > a {

    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;

}
.nav > li > a {

    position: relative;
    display: block;
    padding: 10px 15px;

}
		.tab-content > .active {

    display: block;

}
		.fade.in {

    opacity: 1;
			background-color:white;

}
.fade {

    opacity: 0;
    -webkit-transition: opacity .15s linear;
    -o-transition: opacity .15s linear;
    transition: opacity .15s linear;

}
		
		.container {

    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;

}
		.row {

    margin-right: -15px;
    margin-left: -15px;

}
		.statich4 {

    color:#19529c !important;
    font-size: 25px;
    font-weight: 900;
    margin: 47px 0 40px;
    text-align: center;
    text-transform: uppercase;

}
.para-graph-static {

    color: #444444;
    font-size: 16px;
    padding-bottom: 26px;

}
.padding50-right {

    padding-right: 50px;

}
		.VisionMission > h4 {

    color: #444444;
    font-size: 18px;
    font-weight: 900;
    margin-top: 0;

}
		.para-graph-static {

    color: #444444;
    font-size: 16px;
    padding-bottom: 26px;

}
		.staticul {

    color: #535353;
    font-size: 17px;
    line-height: 30px;
    padding: 0 110px;
    text-align: center;

}
		.joinreason > ul {

    list-style: outside none none;
    overflow: hidden;

}
		.joinreason > ul > li {

    margin-bottom: 33px;

}
.joinreason > ul > li {

    min-height: 177px;

}
		.joinliimg {

    float: left;
    margin-right: 30px;
    margin-top: 14px;
    width: 15%;

}
		.joinlimain {

    float: left;
    width: 67%;

}
		.joinlititle {

    color: #343434;
    font-size: 24.99px;
    margin: 0 0 8px;
    font-weight: 600;

}
		.joinlicontent {

    color: #535353;
    font-size: 14px;
    line-height: 20px;

}
		#joinnewssec {

    border-right: 1px solid #e9e9e9;
    padding: 30px 92px 30px 0;

}
.padding-left {

    padding-left: 0;

}
		.joinnews {

    color: #535353;
    font-size: 16.81px;
    font-weight: 600;

}
p {

    margin: 0 0 10px;

}
		.joinnews > small {

    color: #535353;
    display: inline-block;
    font-size: 12.86px !important;
    font-weight: normal;

}
		.input-group {

    position: relative;
    display: table;
    border-collapse: separate;

}
		.input-group .form-control:first-child, .input-group-addon:first-child, .input-group-btn:first-child > .btn, .input-group-btn:first-child > .btn-group > .btn, .input-group-btn:first-child > .dropdown-toggle, .input-group-btn:last-child > .btn-group:not(:last-child) > .btn, .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle) {

    border-top-right-radius: 0;
    border-bottom-right-radius: 0;

}
.input-group .form-control, .input-group-addon, .input-group-btn {

    display: table-cell;

}
.input-group .form-control {

    position: relative;
    z-index: 2;
    float: left;
    width: 100%;
    margin-bottom: 0;

}
.signupintext {

    height: 49.2px;

}
.form-control {

    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;

}
		.input-group-btn {

    position: relative;
    font-size: 0;
    white-space: nowrap;

}
.input-group-addon, .input-group-btn {

    width: 1%;
    white-space: nowrap;
    vertical-align: middle;

}
		.signupbut {

    background: #19529c none repeat scroll 0 0;
    color: #ffffff;
    font-size: 17px;
    font-weight: 600;
    padding: 10px 42px 13px;

}
		.input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group {

    z-index: 2;
    margin-left: -1px;

}
.input-group .form-control:last-child, .input-group-addon:last-child, .input-group-btn:first-child > .btn-group:not(:first-child) > .btn, .input-group-btn:first-child > .btn:not(:first-child), .input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group > .btn, .input-group-btn:last-child > .dropdown-toggle {

    border-top-left-radius: 0;
    border-bottom-left-radius: 0;

}
.input-group-btn > .btn {

    position: relative;

}
		.newslettersec {

    border-top: 1px solid #d9d9d9;
    padding: 40px 0;

}
		.newslettertext > p {

    color: #535353;
    font-size: 17px;
    font-weight: 600;
    margin: 0;

}
		.newslettertext > small {

    color: #535353;
    font-size: 13px;

}
		.input-group {

    position: relative;
    display: table;
    border-collapse: separate;

}
		.signupintext {

    height: 49.2px;

}
		.edu-people-section {

    align-items: center;
    background: #f1f1f1 none repeat scroll 0 0;
    border: 1px solid #d2d2d1;
    display: flex;
    min-height: auto;
    padding: 0;
    margin-bottom: 15px;

}
		.edu-people {

    align-items: center;
    pointer-events: none;
    background: #f1f1f1 none repeat scroll 0 0;
    display: flex;
    min-height: auto;
    padding: 15px;
    border-right: 1px solid #e5e5e5;
    z-index: 1;

}
		.edu-people > .img {

    border: 1px solid #d8d8d8;
    display: inline-table;
    height: 165px;
    margin-right: 15px;
    width: 167px;

}
.pull-left {

    float: left;

}
		.edu-people > .img > img {

    height: inherit;

}
		.info-edu {

    width: 55%;

}
.pull-left {

    float: left;

}
		.info-edu > .name {

    color: #444444;
    font-size: 15px;
    font-weight: 900;
    margin-bottom: 0;
    text-transform: uppercase;

}
		.info-edu > .desk {

    color: #444444;
    font-size: 15px;
    font-weight: 500;
    margin-bottom: 0;

}
		.info-edu > .education {

    color: #444444;
    font-size: 15px;
    font-weight: 500;
    margin-bottom: 0;
    margin-top: 15px;

}
		.info-edu > .education > span {

    color: #444444;
    font-size: 15px;
    font-weight: 600;
    margin-bottom: 0;

}
		.edu-people-section-des {

    align-items: center;
    background: #fff none repeat scroll 0 0;
    color: #777;
    display: flex;
    font-size: 14px;
    min-height: 195px;
    padding: 15px 15px 15px 35px;
    vertical-align: middle;

}
	@media (min-width:20px) and (max-width:450px)
	{
		.statictabul > ul {
    border-bottom: 1px solid #e5e5e5;
    margin-top: 2px;
    text-align: center;
}
		.statictabul > ul > li {
    display: inline-block;
    float: none;
    margin: 0;
}
		.edu-people-section {
    display: inline-block !important;
    width: 100%;
}
		.edu-people {
    cursor: pointer;
    pointer-events: inherit !important;
}
		.edu-people > .img {
    display: inline-table;
    height: 137px;
    margin-right: 15px;
    width: 139px;
}
		element {

}
.info-edu > .name {

    color: #444444;
    font-size: 12.17px;
    font-weight: 900;
    margin-bottom: 0;
    text-transform: uppercase;

}
		.info-edu > .desk {

    color: #444444;
    font-size: 12.17px;
    font-weight: 500;
    margin-bottom: 0;

}
		.info-edu > .education {

    color: #444444;
    font-size: 12.17px;
    font-weight: 500;
    margin-bottom: 0;
    margin-top: 15px;

}
	.padding50-right {

    padding-right: 0;

}	
		.para-graph-static {

    font-size: 13px;
    text-align: center;

}
		.VisionMission > h4 {

    text-align: center;
    font-size: 20px;

}
	.staticul {

    color: #343434;
    font-size: 13px;
    line-height: 22px;
    padding: 0 10px;

}
		.joinreason > ul > li {

    margin-bottom: 9px;

}
		.joinliimg {

    float: left;
    margin-right: 14px;
    margin-top: 14px;
    width: 24%;

}
		.joinlimain {

    float: left;
    width: 69%;

}
		.joinlititle {

    color: #343434;
    font-size: 15px;
    font-weight: bold;
    margin: 0 0 3px;

}
		.joinlicontent {

    font-size: 13px;

}
		
}	
		
	</style>
</head>
    <!--/ Modal box-->
    <!--Banner-->
    
    <!--/ Banner-->
    <!--Feature-->
 

    <!--/ work-shop-->
    <!--Faculity member-->
    <!--/ Testimonial-->
    <!--Courses-->
    <!--/ Courses-->
    <!--Pricing-->
  
<div class="bread-new">
    <div class="container">
        <article class="new-breadcrum col-lg-12 col-md-12 col-xs-12 col-sm-12 no-padding">

                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 padding-right rightbreadsec">
                            </div>
        </article>
    </div>
</div>
  <section>
    <article>
		<div class="container-fluid home-header" style="rgba(216, 69, 111, 0.58);">
    <video class="vidBackgroundHeader" poster="img/medical.jpg" playsinline="" autoplay="" muted="" loop="">
        <source src="" type="video/webm">
    </video>
    <div class="row height-full">
      <div class="container padding-top flex-md-middle">
        <h1 class="display-2 white text-center">Microsoft International Certificate</h1>
        <h4 class="white text-center" style="font-size:30px;">Live Technology With Us</h4>
        <h2><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width:50px;display:block;margin:0 auto;">
            <path style="fill:white" d="M26.891,73.511h-3.788l-0.139-0.027c-0.399-0.077-0.801-0.142-1.203-0.207c-0.931-0.15-1.894-0.306-2.852-0.602
            	C9.355,69.727,3.694,63.263,2.083,53.464c-0.286-1.736-0.263-3.487-0.241-5.18c0.006-0.493,0.013-7.604,0.012-8.094l-0.011-3.818	c-0.009-2.988-0.009-2.988,0.011-8.073l0.003-0.75C1.903,16.293,10.337,6.526,21.475,4.83c12.116-1.844,23.626,6.109,26.208,18.106
            	c0.503,2.336,0.491,4.66,0.48,6.907c-0.002,0.342-0.004,0.684-0.004,1.026l0.001,1.464c0.001,4.516,0.001,4.516-0.002,7.64
            	l-0.002,10.147c-0.009,11.194-7.353,20.384-18.277,22.868c-0.679,0.154-1.354,0.26-2.008,0.362
            	c-0.286,0.045-0.572,0.089-0.857,0.139L26.891,73.511z M23.384,70.553h3.257c0.257-0.043,0.515-0.084,0.773-0.124
            	c0.633-0.099,1.23-0.193,1.812-0.325c9.547-2.171,15.966-10.202,15.974-19.985l0.002-10.147c0.002-3.123,0.002-3.123,0.002-7.637
            	l-0.001-1.464c0-0.347,0.002-0.695,0.004-1.042c0.012-2.185,0.022-4.248-0.413-6.269C42.538,13.088,32.494,6.147,21.921,7.755
            	C12.209,9.234,4.855,17.749,4.816,27.562l-0.003,0.75c-0.021,5.071-0.021,5.071-0.012,8.051l0.011,3.82
            	c0.002,0.505-0.005,7.632-0.012,8.139C4.78,49.96,4.76,51.506,5.003,52.986c1.414,8.6,6.386,14.274,14.779,16.865
            	c0.76,0.235,1.581,0.367,2.452,0.508C22.618,70.42,23.001,70.482,23.384,70.553z"></path>
            <path style="fill:blue" class="scrolldown" d="M28.121,25.104c-0.045,0.914,0.002,1.85-0.155,2.735c-0.322,1.817-1.838,2.997-3.381,2.762
              c-1.53-0.233-2.696-1.791-2.705-3.622c-0.006-1.243-0.003-2.488-0.001-3.731c0.005-1.99,1.382-3.643,3.034-3.647
              c1.763-0.004,3.141,1.564,3.162,3.605c0.007,0.631,0.001,1.263,0.001,1.894C28.093,25.102,28.108,25.104,28.121,25.104z"></path>
          </svg>
        </h2>
		  <a class="btn btn-success he" href="register.php" role="button">ENROLL NOW</a>
      </div>
    </div>
  </div>
 
		
		<div class="row" style="margin:0px;background-color:white;">
			<div class="col col-sm-3 col-md-3 col-lg-3">
				<div class="">
					<img class="img-responsive img-thumbnail" style="margin:5px;" src="img/2.jpg" alt="no image available">
					<br>
					<div class="card bg-white">
						<h4 class="card-title">Program</h4>
						<div class="card-body">
						  
						  <p class="card-text"><?php echo $program; ?></p>
						</div>
					 </div>
					<br>
					<div class="card bg-white">
						<h4 class="card-title">Course Detail</h4>
						<div class="card-body">
						  
						  <p class="card-text">
							<span style="font-weight:bold;float:left">Location</span><span style="float:right"><?php echo $location; ?></span><br><hr>
							<span style="font-weight:bold;float:left">Course</span><span style="float:right"><?php echo $course; ?></span><br><hr>
							<span style="font-weight:bold;float:left">Batch</span><span style="float:right"><?php echo $batch; ?></span><br><hr>
							<span style="font-weight:bold;float:left">Fees(Rs)</span><span style="float:right"><?php echo $fee; ?></span><br>
						  </p>
						</div>
					 </div>
					<br>
				</div>
			</div>
			<div class="col col-sm-9 col-md-9 col-lg-9">
					 <div class="statictab">
					<div class="statictabul" id="tabs">
						<ul class="nav nav-tabs" id="imagechange">
							<li id="informationid" class="active" data-type="informationimg"><a data-toggle="tab" href="#INFORMATION">Information</a></li>
							<li id="mycourseid" data-type="mycourseimg"><a data-toggle="tab" href="#MYCOURSE">My Course</a></li>
							<li id="paymentid" data-type="paymentimg"><a data-toggle="tab" href="#PAYMENT">Payment</a></li>
							<li id="myprofileid" data-type="myprofileimg"><a data-toggle="tab" href="#MYPROFILE">My Profile</a></li>
							
							<li id="admitcardid" data-type="admitcardimg"><a data-toggle="tab" href="#ADMITCARD">Admit Card</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div id="INFORMATION" class="tab-pane fade active in">
							<section class="aboutsec-main">
								<div class="container-fluid">
									<div class="row aboutstaticsec">
										<div class="parasection">
											<h4 class="statich4">Important Information</h4>
											
												<ul style="list-style:disc">
													<li>Students will get free Microsoft International Certificate.</li>
													<li>You will attend the training for 2 to 3 hrs a day for 4-6 weeks.</li>
													<li>Summer Training Program-2019, an amount of Rs. 2000/-(inclusive of GST) has to be paid on registration to reserve your seat.</li>
													<li>Enrollment Fee of INR-2000/-(inclusive GST) once paid is neither refundable nor transferable.</li>
													<li>Please Find your match for group discount 3 students-7%, 5 students-10%, 7 to 10-15%,11 to 20-20%, 21 to 25-30%.</li>
													<li>For any queries or issues please contact on +91 9219888555, +91 9311465380, +91 7007867283 or email your queries to info@mtaind.com , our Help-lines shall be opened every day from 9:00 AM to 7:00 PM</li>
												</ul>
											<h2 style="color:green;font-weight:bolder;text-align:center;font-size:28px;">WELCOME TO MTA-IND</h2>
											
										</div>                   
									  </div>
									</div>
							</section>




						</div>

						<div id="MYCOURSE" class="tab-pane fade">

							<section class="container-fluid">
								<div class="row aboutstaticsec">
									<div class="parasection">
										<h4 class="statich4">Course Details</h4>
										<div style="margin:auto;width:70%">
											<div class="row">
												<div class="col col-sm-3 col-md-6 col-lg-6" style="font-weight:bold">Program</div>
												<div class="col col-sm-3 col-md-6 col-lg-6"><?php echo $program; ?></div>
											</div><hr>
											<div class="row">
												<div class="col col-sm-3 col-md-6 col-lg-6" style="font-weight:bold">Location</div>
												<div class="col col-sm-3 col-md-6 col-lg-6"><?php echo $location; ?></div>
											</div><hr>
											<div class="row">
												<div class="col col-sm-3 col-md-6 col-lg-6" style="font-weight:bold">Course</div>
												<div class="col col-sm-3 col-md-6 col-lg-6"><?php echo $course; ?></div>
											</div><hr>
											<div class="row">
												<div class="col col-sm-3 col-md-6 col-lg-6" style="font-weight:bold">Batch</div>
												<div class="col col-sm-3 col-md-6 col-lg-6"><?php echo $batch; ?></div>
											</div><hr>
											<div class="row">
												<div class="col col-sm-3 col-md-6 col-lg-6" style="font-weight:bold">Course Content</div>
												<div class="col col-sm-3 col-md-6 col-lg-6"><?php echo "<a class='btn btn-success' href='#'>View Content</a>"; ?></div>
											</div><hr>
											
										 
										</div>

											
											
										</div>
								
								</div>
							</section>   
						</div>

						<div id="PAYMENT" class="tab-pane fade">
						  
							<section class="container-fluid">
								<div class="row aboutstaticsec">
									<div class="parasection">
										<form method="post" action="PayUMoney/PayUMoney_form.php">
										<h4 class="statich4">Payment</h4>
										<div class="form-group row">
											<div class="col col-sm-2 col-md-2 col-lg-2" style="font-weight:bold;">
												Enrollment No:
											</div>
											<div class="col col-sm-4 col-md-4 col-lg-4">
												<input class="form-control" name="enrollmentno" type="text" value="<?php echo $username ; ?>" disabled>
											</div>
										
										</div><br>
										<div class="form-group row">
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Program 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<input class="form-control" name="program" type="text" value="<?php echo $program ; ?>" disabled>
													</div>

												</div>
											</div>
											
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Location 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<input class="form-control" name="location" type="text" value="<?php echo $location ; ?>"  disabled>
													</div>

												</div>
											</div>
										</div><br>
										<div class="form-group row">
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Course 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<input class="form-control" name="course" type="text" value="<?php echo $course ; ?>"  disabled>
													</div>

												</div>
											</div>
											
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Batch 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<input class="form-control" name="batch" type="text" value="<?php echo $batch ; ?>"  disabled>
													</div>

												</div>
											</div>
										</div><br>
										<div class="form-group row">
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Name 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<input class="form-control" name="fname" type="text" value="<?php echo $fname ; ?>"  disabled>
													</div>

												</div>
											</div>
											
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Email 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<input class="form-control" name="email" type="text" value="<?php echo $email ; ?>"  disabled>
													</div>

												</div>
											</div>
										</div><br>
										<div class="form-group row">
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Mobile No. 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<input class="form-control" name="phone" type="text" value="<?php echo $phone ; ?>"  disabled>
													</div>

												</div>
											</div>
											
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Address 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<input class="form-control" name="address" type="text" value="<?php echo $address ; ?>"  disabled>
													</div>

												</div>
											</div>
										</div><br>
										<div class="form-group row">
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Course Fees(Rs.) 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<input class="form-control" name="fee" type="text" value="<?php echo $fee ; ?>"  disabled>
													</div>

												</div>
											</div>
											
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Payment Type 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<select name="paytype" class="form-control" id="paytype" onchange="showAmount();" required>
															<option selected value disabled>-- select option --</option>
															<option value="Full">Full payment</option>
															<option value="Partial">Partial payment</option>
															
														</select>
													</div>

												</div>
											</div>
										</div><br>
										<div class="form-group row">
											<div class="col col-sm-2 col-md-2 col-lg-2" style="font-weight:bold;">
												Pay Amount
											</div>
											<div class="col col-sm-4 col-md-4 col-lg-4">
												<input id="payamount" name="payamount" class="form-control" placeholder="--select payment type first--" value="" readonly>
													
													<script>

															function showAmount() {
																var selectedValue = document.getElementById("paytype").value;

																var y = document.getElementById("payamount");
																if(selectedValue=="Full"){
																   y.value = <?php echo $fee; ?>;
																}
																else if(selectedValue=="Partial"){
																   y.value = "2050";
																}

															}
														</script>
											</div>
										
										</div><br>
										<div class="form-group text-center">
											<a href="PayUMoney/PayUMoney_form.php"><button type="submit" class="btn btn-primary" style="border:1px;">
			 <img src="img/payumoney_logo.png"></button>
		  </a>
										</div><br>
										</form>
									</div>
								</div>
							</section>
							



						</div>
						<div id="MYPROFILE" class="tab-pane fade">

							<section class="container-fluid">
								<div class="row aboutstaticsec">
									<div class="parasection">
										<h4 class="statich4">Profile</h4>
										<div class="row">
											<div class="col col-sm-2 col-md-2 col-lg-2" style="font-weight:bold;">
												Enrollment No:
											</div>
											<div class="col col-sm-4 col-md-4 col-lg-4">
												<label><?php echo "MGSTP" + $username; ?></label>
											</div>
										
										</div><br>
										<div class="row">
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Name 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<label><?php echo $fname; ?></label>
													</div>

												</div>
											</div>
											
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Email 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<label><?php echo $email; ?></label>
													</div>

												</div>
											</div>
										</div><br>
										<div class="row">
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Mobile No. 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<label><?php echo $phone; ?></label>
													</div>

												</div>
											</div>
											
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Address 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<label><?php echo $address; ?></label>
													</div>

												</div>
											</div>
										</div><br>
										<div class="row">
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Program 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<label><?php echo $program; ?></label>
													</div>

												</div>
											</div>
											
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Location 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<label><?php echo $location; ?></label>
													</div>

												</div>
											</div>
										</div><br>
										<div class="row">
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Course 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<label><?php echo $course; ?></label>
													</div>

												</div>
											</div>
											
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Batch 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<label><?php echo $batch; ?></label>
													</div>

												</div>
											</div>
										</div><br>
										
										<div class="row">
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														College 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<label><?php echo $college_name; ?></label>
													</div>

												</div>
											</div>
											
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														University 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<label><?php echo $university_name; ?></label>
													</div>

												</div>
											</div>
										</div><br>
										<div class="row">
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Qualification 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<label><?php echo $pursuing_qualification; ?></label>
													</div>

												</div>
											</div>
											
											<div class="col col-sm-6 col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-sm-4 col-md-4 col-lg-4" style="font-weight:bold;">
														Branch 
													</div>
													<div class="col col-sm-8 col-md-8 col-lg-8">
														<label><?php echo $branch; ?></label>
													</div>

												</div>
											</div>
										</div><br>
										
										
									</div>
								</div>
							</section>   
						</div>
						
						<div id="ADMITCARD" class="tab-pane fade">

							<section class="container-fluid">
								<div class="row aboutstaticsec">
									<div class="parasection">
										<h4 class="statich4">ADMIT CARD</h4>
										<article class="container-fluid" style="border:2px solid black;padding:15px;margin:auto;">
											<div class="row">
												
												<div class="col col-sm-6 col-md-6 col-lg-6">
													<div class="row">
														<div class="col col-sm-6 col-md-6 col-lg-6" style="font-weight:bold;">
															Enrollment No
														</div>
														<div class="col col-sm-6 col-md-6 col-lg-6">
															<?php echo $username ; ?>
														</div>
													</div><br>
													<div class="row">
														<div class="col col-sm-6 col-md-6 col-lg-6" style="font-weight:bold;">
															Student Name
														</div>
														<div class="col col-sm-6 col-md-6 col-lg-6">
															<?php echo $fname ?>
														</div>
													</div><br>
													<div class="row">
														<div class="col col-sm-6 col-md-6 col-lg-6" style="font-weight:bold;">
															Email
														</div>
														<div class="col col-sm-6 col-md-6 col-lg-6">
															<?php echo $email ?>
														</div>
													</div><br>
													<div class="row">
														<div class="col col-sm-6 col-md-6 col-lg-6" style="font-weight:bold;">
															Contact
														</div>
														<div class="col col-sm-6 col-md-6 col-lg-6">
															<?php echo $phone ?>
														</div>
													</div><br>
													<div class="row">
														<div class="col col-sm-6 col-md-6 col-lg-6" style="font-weight:bold;">
															College/University
														</div>
														<div class="col col-sm-6 col-md-6 col-lg-6">
															<?php echo $college_name ?>
														</div>
													</div><br>
													<div class="row">
														<div class="col col-sm-6 col-md-6 col-lg-6" style="font-weight:bold;">
															Course
														</div>
														<div class="col col-sm-6 col-md-6 col-lg-6">
															<?php echo $course ?>
														</div>
													</div><br>
													<div class="row">
														<div class="col col-sm-6 col-md-6 col-lg-6" style="font-weight:bold;">
															Location
														</div>
														<div class="col col-sm-6 col-md-6 col-lg-6">
															<?php echo $location ?>
														</div>
													</div><br>
													<div class="row">
														<div class="col col-sm-6 col-md-6 col-lg-6" style="font-weight:bold;">
															Batch
														</div>
														<div class="col col-sm-6 col-md-6 col-lg-6">
															<?php echo $batch ?>
														</div>
													</div><br>
													

												</div>
												<div class="col col-sm-6 col-md-6 col-lg-6">
													pic here
												</div>
												<div class="row" style="margin:0px">
														<div class="col col-sm-3 col-md-3 col-lg-3" style="font-weight:bold;">
															Fee Details
														</div>
														<div class="col col-sm-5 col-md-6 col-lg-6 table-responsive">
															<table class="table table-hover">
																<thead style="background-color:lightblue;color:black;font-weight:bold">
																	<tr>
																		<td>Course Fee(&#8377;)</td>
																		<td>Discount(&#8377;)</td>
																		<td>Paid(&#8377;)</td>
																		<td>Remaining(&#8377;)</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td><?php echo $fee; ?></td>
																		<td>0</td>
																		<td>0</td>
																		<td><?php echo $fee; ?></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div><br>
												
											</div>
											
										</article>
									</div>
								</div>
							</section>   
						</div>
						
						
					</div>
				</div>
			</div>
		</div>

       
    </article>
</section>

<div class="row col-sm-4 col-md-4 col-lg-4">
	
<!-- Add Here Content in it  -->

</div>




    <!--/ Pricing-->
    <!--Contact-->
   

    <!--/ Contact-->
    <!--Footer-->
<script>
	      
function(i) {
  i.preventDefault(), e.call(t(this), "show")
}
</script>
<script>
function(e) {
  var event_Category = "";
  var event_action = "";
  var user_id = null;
  if (typeof userinfo != "undefined") {
    user_id = userinfo['id'];
  }
  var timestamp = new Date($.now());
  var page_title = $(location).attr("href");
  var link = $(this).attr("href");
  var flag = false;
  if (typeof link != "undefined" && link != "javascript:void(0)") {
    switch (link) {
      case "/mycourses":
        event_Category = "My Courses";
        event_action = "Mycourse Tab Click";
        flag = true;
        break;
      case "/":
        if (typeof $(this).parents("div").attr("class") != "undefined" && $(this).parents("div").attr("class").indexOf("navbar-header") >= 0) {
          event_Category = "Edureka logo";
          event_action = "Header Edureka Logo";
          flag = true;
        }
        break;
      case "/communities":

        if (typeof $(this).parents("ul").attr("class") != "undefined" && $(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
          event_Category = "Navigate To Forum";
          event_action = "Header Community Drop Down";
          flag = true;
        }
        break;
      case "/blog":
        if (typeof $(this).parents("ul").attr("class") != "undefined" && $(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
          event_Category = "Navigate To Blog";
          event_action = "Header Navigation";
          flag = true;

        }
        break;
      case "/tickets":
        //                if ( typeof $(this).parents("article").attr("class") != "undefined" && $(this).parents("article").attr("class").indexOf("new-breadcrum") >= 0) {
        event_Category = "Navigate To My Tickets";
        event_action = "Support Button";
        flag = true;
        //                }
        break;
      default:
        if (link.indexOf("/search/category/") >= 0) {
          event_Category = "Select Course Cat";
          event_action = "Header Course Cat Section";
          flag = true;
        } else if (link.indexOf("/my-profile") >= 0) {

        } else if (link.indexOf("/my-activity") >= 0) {
          if ($(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
            event_Category = "Navigate To Activity Stream";
            event_action = "Header Profile Drop Down";
            flag = true;
          }
        } else if (link.indexOf("/search/favourite") >= 0) {

        } else if (link.indexOf("/signout") >= 0) {
          if ($(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
            event_Category = "Log Out";
            event_action = "Header Profile Drop Down";
            flag = true;
          }
        } else if (link.indexOf("/change_password") >= 0) {
          if ($(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
            event_Category = "Navigate to Change Password";
            event_action = "Header Profile Drop Down";
            flag = true;
          }
        } else if (link.indexOf("/my-course") >= 0) {
          if ($(this).html().indexOf("img") >= 0) {
            window.location.href = $(this).attr("href");
          }
        }

    }
  }

  //          e.preventDefault();
  if (flag) {
    e.preventDefault();

    ga('send', 'event', event_Category, event_action, 'UserId:' + user_id + ', Date:' + timestamp + ',page title:' + page_title, 0);
    window.location.href = $(this).attr("href");
  }

}
</script>
<script>
function() {
  validNavigation = true;
}
</script>
<script>
function() {
  var j = $(this).data("type");
  $(".bannerimg").hide();
  $("." + j).show();
}
</script>
<script>
function() {
  window.history.pushState('obj', 'newtitle', '/about-us');
  aboutactive();
  return false;
}
</script>
<script>
function() {
  window.history.pushState('obj', 'newtitle', '/culture');
  cultureactive();
  return false;
}
</script>
<script>
function(i) {
  i.preventDefault(), e.call(t(this), "show")
}
</script>
<script>
function(e) {
  var event_Category = "";
  var event_action = "";
  var user_id = null;
  if (typeof userinfo != "undefined") {
    user_id = userinfo['id'];
  }
  var timestamp = new Date($.now());
  var page_title = $(location).attr("href");
  var link = $(this).attr("href");
  var flag = false;
  if (typeof link != "undefined" && link != "javascript:void(0)") {
    switch (link) {
      case "/mycourses":
        event_Category = "My Courses";
        event_action = "Mycourse Tab Click";
        flag = true;
        break;
      case "/":
        if (typeof $(this).parents("div").attr("class") != "undefined" && $(this).parents("div").attr("class").indexOf("navbar-header") >= 0) {
          event_Category = "Edureka logo";
          event_action = "Header Edureka Logo";
          flag = true;
        }
        break;
      case "/communities":

        if (typeof $(this).parents("ul").attr("class") != "undefined" && $(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
          event_Category = "Navigate To Forum";
          event_action = "Header Community Drop Down";
          flag = true;
        }
        break;
      case "/blog":
        if (typeof $(this).parents("ul").attr("class") != "undefined" && $(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
          event_Category = "Navigate To Blog";
          event_action = "Header Navigation";
          flag = true;

        }
        break;
      case "/tickets":
        //                if ( typeof $(this).parents("article").attr("class") != "undefined" && $(this).parents("article").attr("class").indexOf("new-breadcrum") >= 0) {
        event_Category = "Navigate To My Tickets";
        event_action = "Support Button";
        flag = true;
        //                }
        break;
      default:
        if (link.indexOf("/search/category/") >= 0) {
          event_Category = "Select Course Cat";
          event_action = "Header Course Cat Section";
          flag = true;
        } else if (link.indexOf("/my-profile") >= 0) {

        } else if (link.indexOf("/my-activity") >= 0) {
          if ($(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
            event_Category = "Navigate To Activity Stream";
            event_action = "Header Profile Drop Down";
            flag = true;
          }
        } else if (link.indexOf("/search/favourite") >= 0) {

        } else if (link.indexOf("/signout") >= 0) {
          if ($(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
            event_Category = "Log Out";
            event_action = "Header Profile Drop Down";
            flag = true;
          }
        } else if (link.indexOf("/change_password") >= 0) {
          if ($(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
            event_Category = "Navigate to Change Password";
            event_action = "Header Profile Drop Down";
            flag = true;
          }
        } else if (link.indexOf("/my-course") >= 0) {
          if ($(this).html().indexOf("img") >= 0) {
            window.location.href = $(this).attr("href");
          }
        }

    }
  }

  //          e.preventDefault();
  if (flag) {
    e.preventDefault();

    ga('send', 'event', event_Category, event_action, 'UserId:' + user_id + ', Date:' + timestamp + ',page title:' + page_title, 0);
    window.location.href = $(this).attr("href");
  }

}
</script>
<script>
function() {
  window.history.pushState('obj', 'newtitle', '/careers');
  careeractive();
  return false;
}
</script>
<script>
function(e) {
  var event_Category = "";
  var event_action = "";
  var user_id = null;
  if (typeof userinfo != "undefined") {
    user_id = userinfo['id'];
  }
  var timestamp = new Date($.now());
  var page_title = $(location).attr("href");
  var link = $(this).attr("href");
  var flag = false;
  if (typeof link != "undefined" && link != "javascript:void(0)") {
    switch (link) {
      case "/mycourses":
        event_Category = "My Courses";
        event_action = "Mycourse Tab Click";
        flag = true;
        break;
      case "/":
        if (typeof $(this).parents("div").attr("class") != "undefined" && $(this).parents("div").attr("class").indexOf("navbar-header") >= 0) {
          event_Category = "Edureka logo";
          event_action = "Header Edureka Logo";
          flag = true;
        }
        break;
      case "/communities":

        if (typeof $(this).parents("ul").attr("class") != "undefined" && $(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
          event_Category = "Navigate To Forum";
          event_action = "Header Community Drop Down";
          flag = true;
        }
        break;
      case "/blog":
        if (typeof $(this).parents("ul").attr("class") != "undefined" && $(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
          event_Category = "Navigate To Blog";
          event_action = "Header Navigation";
          flag = true;

        }
        break;
      case "/tickets":
        //                if ( typeof $(this).parents("article").attr("class") != "undefined" && $(this).parents("article").attr("class").indexOf("new-breadcrum") >= 0) {
        event_Category = "Navigate To My Tickets";
        event_action = "Support Button";
        flag = true;
        //                }
        break;
      default:
        if (link.indexOf("/search/category/") >= 0) {
          event_Category = "Select Course Cat";
          event_action = "Header Course Cat Section";
          flag = true;
        } else if (link.indexOf("/my-profile") >= 0) {

        } else if (link.indexOf("/my-activity") >= 0) {
          if ($(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
            event_Category = "Navigate To Activity Stream";
            event_action = "Header Profile Drop Down";
            flag = true;
          }
        } else if (link.indexOf("/search/favourite") >= 0) {

        } else if (link.indexOf("/signout") >= 0) {
          if ($(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
            event_Category = "Log Out";
            event_action = "Header Profile Drop Down";
            flag = true;
          }
        } else if (link.indexOf("/change_password") >= 0) {
          if ($(this).parents("ul").attr("class").indexOf("dropdown-menu") >= 0) {
            event_Category = "Navigate to Change Password";
            event_action = "Header Profile Drop Down";
            flag = true;
          }
        } else if (link.indexOf("/my-course") >= 0) {
          if ($(this).html().indexOf("img") >= 0) {
            window.location.href = $(this).attr("href");
          }
        }

    }
  }

  //          e.preventDefault();
  if (flag) {
    e.preventDefault();

    ga('send', 'event', event_Category, event_action, 'UserId:' + user_id + ', Date:' + timestamp + ',page title:' + page_title, 0);
    window.location.href = $(this).attr("href");
  }

}
</script>
<script>
function(e) {

  $('.edu-people-section').removeClass('active');

  var $parent = $(this).parent();
  if (!$parent.hasClass('active')) {
    $parent.addClass('active');
  }
  e.preventDefault();
}
</script>
<script>
	function(e) {

  $('.edu-people-section').removeClass('active');

  var $parent = $(this).parent();
  if (!$parent.hasClass('active')) {
    $parent.addClass('active');
  }
  e.preventDefault();
}
</script>
   <?php include('conn/footer.php')?>