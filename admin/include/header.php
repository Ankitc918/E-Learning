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
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tables</title>

    <!-- Material Design Icons  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Roboto Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    
    <style>
        
        a {
            color: #096d96;
        }

        a:hover {
            color: deepskyblue;
            text-decoration: none;
        }
        ul{
            list-style: none;
            padding: 15px;
        }
        header{
            position: sticky;
            top: 0;
        }

    </style>

    <!-- Calender Pop-up for adding dates   -->

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    

    <!-- Added This Above Area  For Table -->
    <!-- Added This Above Area  For Table -->
    <!-- Added This Above Area  For Table -->


</head>

<body class="layout-container ls-top-navbar layout-sidebar-l3-md-up">
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-dark">
        <a href="../index.php" title="Smart-Learn Home" style="background-color:#096d96;border-radius:15px;"><img class="img-fluid" src="../images/n3logo.png" alt="logo" style="height:160px"></a>
        
        <a id='adminpanel' href="../logout.php" style="padding:10px;margin:5px"><i class="fa fa-user"></i>
            <?php echo ucfirst($_SESSION["name"]);?>(Logout)</a>

    </nav>
    <!-- // END Navbar -->
    <div  style="background-color:white;border-radius:5px;">
<a href="index.php" title="Admin Home" class="sidebar-link sidebar-user m-b-0" style="padding:15px;">
            <i class="fa fa-home"></i> Smart-Learn(Admin)
        </a>
    <!-- Sidebar -->
    <div class="sidebar bg-light" id="sidebarLeft" data-scrollable>

        <!-- Menu -->
        <ul class="sidebar-menu sm-bordered sm-active-button-bg" data-toggle="sidebar-collapse">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="addnewcourse.php"><i class="fa fa-plus"></i> Add New Course</a>
                        
                    </li>
                    <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="addcourse_content.php"><i class="fa fa-plus"></i> Add Content</a>
                            </li>

                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="updatecourse.php"><i class="fa fa-edit"></i> Modify Course</a>
                        
                    </li>
                    <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="updatecourse_content.php"><i class="fa fa-edit"></i> Modify Content</a>
                            </li>
                    
              

        </ul>
        <!-- // END Menu -->

    </div>
    </div>
    </header>
    </body>
</html>