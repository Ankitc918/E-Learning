<?php 

include('include/conn.php');
$sql1="SELECT c_name FROM course";
$res1=mysqli_query($conn,$sql1);
?>

<script src="https://cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<html>

<head>
    <title>Admin Update</title>
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
    <div class="container wrap80">


        <div id="Add" class="w3-container blog" style="display">
            <h2 style="color:#4880db">Update Course Content</h2>
            
                <div class="container" style="background-color:white;border-radius:5px;">
                    <br>
                    <form name='test' id='test_form' method='post'>
                    <div class="row">
                        <div class="col col-sm-3">
                            <label for="course">Course</label>
                        </div>
                        <div class="col col-sm">
                           
                            <select id='c_name' name="course" class="form-control" onchange="myselected();" required>
                              <option  disabled selected value>--select course--</option>
                               <?php
                                if(mysqli_num_rows($res1)>0)
                                    {
                                    while($row1=mysqli_fetch_assoc($res1)){
                                        echo "<option value='".$row1["c_name"]."'>".$row1["c_name"]."</option>";
                                    }
                                    }
                                ?>
                            </select>
                            
                            <div id="demo"></div>
                        </div>
                    </div><br>
                    <section class="gettable" style="display:block">
                        <table class="table table-hover">
                            <thead style="font-weight:bold">
                                <tr>
                                   <td>
                                       S.No
                                   </td>
                                   <td>
                                       Course
                                   </td>
                                    <td>
                                        Heading
                                    </td>
                                    
                                    <td>
                                        Modify
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                               
                                    $getdata="SELECT * FROM course_content";
                             
                                    $resdata=mysqli_query($conn,$getdata);
                                    if(mysqli_num_rows($resdata)>0){
                                        $i=1;
                                        
                                        while($rowdata=mysqli_fetch_assoc($resdata)){
                                            echo "<tr>
                                            <td>".$i."</td>
                                      
                                            <td>".$rowdata["course"]."</td>
                                            <td>".$rowdata["heading"]."</td>
                                            
                                            <td><a class='btn btn-primary' href='editcontent.php?course=".$rowdata["course"]."&heading=".$rowdata["heading"]."'>Edit</a></td>
                                            </tr>";
                                            $i++;
                                        }
                                    }
                                else{
                                    echo "no record found!";
                                }
                                    echo "<tr></tr>";
                                ?>
                            </tbody>
                        </table>
                    </section>
                    </form>
                </div>
            
            <script>
                CKEDITOR.replace('content');
                
                function myselected() {
                  var x = document.getElementById("c_name").value;
                 var y= document.getElementById("demo").innerHTML = "You selected: " + x;
              
                }

            </script>
           
        </div>

    </div>
</body>

</html>
