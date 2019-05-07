<?php 

include('include/conn.php');

$sql1="SELECT * FROM course";
$res1=mysqli_query($conn,$sql1);
?>

<script src="https://cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<html>

<head>
    <title>Admin Edit Course</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Trade+Winds" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>

<body>
   
    <div class="row" style="margin:0px;margin-top:10px;padding:0px;">
        <div class="col col-2">
          <?php include('include/header.php');  ?>
        </div>

        <div class="col col-10">


            <div id="Add" class="w3-container center" style="display">
                <h2 style="color:#4880db">Update Course Details</h2>

                <div class="container" style="background-color:white;border-radius:5px;">
                    <br>
                    <form name='test' id='test_form' method='post'>
                        <br>
                        <section class="gettable" style="display:block">
                            <table class="table table-hover" id="heading" style="display:">
                                <thead style="font-weight:bold;background-color:#696969; color:white">
                                    <tr>
                                        <td>
                                            S.No
                                        </td>
                                        <td>
                                            Course Name
                                        </td>
                                        <td>
                                            Course Description
                                        </td>

                                        <td>
                                            Modify
                                        </td>
                                    </tr>
                                </thead>
                                <tbody id="txtHint">
                                        <?php
                                if(mysqli_num_rows($res1)>0)
                                    $i=1;
                                    {
                                    while($row1=mysqli_fetch_assoc($res1)){
                                        echo "<tr>
                                        <td>".$i."</td>
                                        <td>".$row1["c_name"]."</td>
                                        <td width='50%'>";
                                        echo (strlen($row1["c_description"]) > 200) ? substr($row1["c_description"],0,200).'...' : $row1["c_description"];
                                        echo"</td>
                                        <td><a class='btn btn-primary' href='updateeditcourse.php?id=".$row1["c_id"]."'>Edit</a>
                                            <a class='btn btn-warning' href='deletecourse.php?id=".$row1["c_id"]."'>Delete</a>
                                            </td>
                                        </tr>";
                                        $i++;
                                    }
                                    }
                                ?>
                                </tbody>
                            </table>
                        </section>
                    </form>
                </div>

                <script>
                    CKEDITOR.replace('content');

                </script>
               
            </div>
        </div>
    </div>
</body>

</html>
