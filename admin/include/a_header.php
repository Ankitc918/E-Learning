<?php
  
  session_start();

  if($_SESSION['name']){

  }else{
    header("location:../login.php");
  }

?>


<!DOCTYPE html>
<html>


<!-- Mirrored from theme1.adminplus-premium.themekit.io/ui-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jun 2017 07:11:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tables</title>

  <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
  <meta name="robots" content="noindex">

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- Simplebar.js -->
  <link type="text/css" href="assets/vendor/simplebar.css" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="assets/css/style.min.css" rel="stylesheet">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="../cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="examples/css/datatables.min.css">
  <link rel="stylesheet" href="examples/css/bootstrap-datepicker.min.css">



<!-- Added This Below Area  For Table -->
<!-- Added This Below Area  For Table -->
<!-- Added This Below Area  For Table -->


<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" 

href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" 

src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>



<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>


<style>

table, td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}


table.dataTable thead .sorting_asc:after {
    content: "\f0de";
  display: none;
  }

  table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after {
    content: "\f0dc";
  display: none;
}

table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after {
    content: "\f0dc";
  display: none;
}
</style>

<!-- Calender Pop-up for adding dates   -->

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> <script> $(document).ready(function() { $("#datepicker").datepicker(); }); </script>

<!-- Added This Above Area  For Table -->
<!-- Added This Above Area  For Table -->
<!-- Added This Above Area  For Table -->
	
	
</head>

<body class="layout-container ls-top-navbar layout-sidebar-l3-md-up">

  <!-- Navbar -->
  <nav class="navbar navbar-light bg-white navbar-full navbar-fixed-top ls-left-sidebar">

    <!-- Sidebar toggle -->
    <button class="navbar-toggler pull-xs-left hidden-lg-up" type="button" data-toggle="sidebar" data-target="#sidebarLeft"><span class="material-icons">menu</span></button>

    <!-- Brand -->
    <a class="navbar-brand first-child-lg" href="index-2.html">Tables</a>

    <!-- Search -->
    <!-- // END Search -->

    <!-- Menu -->
    <ul class="nav navbar-nav pull-xs-right hidden-md-down">

      <!-- Notifications dropdown -->
      <li class="nav-item dropdown">
        <ul class="dropdown-menu dropdown-menu-right notifications" aria-labelledby="Preview">
          <li class="dropdown-title">Emails</li>
          <li class="dropdown-item email-item">
            <a class="nav-link" href="index-2.html">
              <span class="media">
          <span class="media-left media-middle"><i class="material-icons">mail</i></span>
              <span class="media-body media-middle">
            <small class="pull-xs-right text-muted">12:20</small>
            <strong>Adrian Demian</strong>
            Enhance your website with
          </span>
              </span>
            </a>
          </li>
          <li class="dropdown-item email-item">
            <a class="nav-link" href="index-2.html">
              <span class="media">
          <span class="media-left media-middle">
            <i class="material-icons">mail</i>
          </span>
              <span class="media-body media-middle">
            <small class="text-muted pull-xs-right">30 min</small>
            <strong>Michael Brain</strong>
            Partnership proposal
          </span>
              </span>
            </a>
          </li>
          <li class="dropdown-item email-item">
            <a class="nav-link" href="index-2.html">
              <span class="media">
          <span class="media-left media-middle">
            <i class="material-icons">mail</i>
          </span>
              <span class="media-body media-middle">
            <small class="text-muted pull-xs-right">1 hr</small>
            <strong>Sammie Downey</strong>
            UI Design
          </span>
              </span>
            </a>
          </li>
        
        </ul>
      </li>
      <!-- // END Notifications dropdown -->

      <!-- User dropdown -->
      <li class="nav-item dropdown">
        

        <a href="logout.php" style="font-size: 20px; font-style: normal;"> Logout </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-list" aria-labelledby="Preview">
          <a class="dropdown-item" href="#"><i class="material-icons md-18">lock</i> <span class="icon-text">Edit Account</span></a>
          <a class="dropdown-item" href="#"><i class="material-icons md-18">person</i> <span class="icon-text">Public Profile</span></a>
          <a class="dropdown-item" href="../../logout.php">Logout</a>
        </div>
      </li>
      <!-- // END User dropdown -->

    </ul>
    <!-- // END Menu -->

  </nav>
  <!-- // END Navbar -->

  <!-- Sidebar -->
  <div class="sidebar sidebar-left sidebar-size-3 sidebar-visible-md-up sidebar-dark bg-primary" id="sidebarLeft" data-scrollable>

    <!-- Brand -->
    <a href="#" class="sidebar-brand sidebar-brand-border sidebar-brand-bg m-b-0">
      <i class="material-icons">control_point</i> 
    </a>

    <!-- User -->
    <a href="#" class="sidebar-link sidebar-user m-b-0">
       MTA India
    </a>
    <!-- // END User -->

    <!-- Menu -->
    <ul class="sidebar-menu sm-bordered sm-active-button-bg" data-toggle="sidebar-collapse">
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="#">
			<i class="sidebar-menu-icon material-icons">home</i>  Dashboard 
        </a>
      </li>
		
     <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="#">
          <i class="sidebar-menu-icon material-icons">view_compact</i> Program
          <span class="sidebar-menu-label label label-default">2</span>
        </a>
        <ul class="sidebar-submenu">
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="add_program.php">Add Program</a>
          </li>
			
			
				
				<li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="detail_for.php">Register Student</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="view_all_program.php">View All</a>
          </li>
          </ul>
      </li>   



      </ul>
    <!-- // END Menu -->

    <!-- Activity -->
   
    <!-- // END Activity -->

    <!-- Stats -->
    <!-- // END Stats -->

  </div>