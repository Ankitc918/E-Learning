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
   
    <div class="row" style="margin:0px;margin-top:10px;padding:0px;">
        <div class="col col-2">
          <?php include('include/header.php');  ?>
        </div>

        <div class="col col-10">


            <div id="Add" class="w3-container center" style="display">
                <h2 style="color:#4880db">Update Course Content</h2>

                <div class="container" style="background-color:white;border-radius:5px;">
                    <br>
                    <form name='test' id='test_form' method='post'>
                        <div class="row">
                            <div class="col col-sm-3 center">
                                <label for="course">Course</label>
                            </div>
                            <div class="col col-sm">

                                <select id='c_name' name="course" class="form-control" onchange="showList(this.value);" required>
                                    <option disabled selected value>--select course--</option>
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
                            <table class="table table-hover" id="heading" style="display:none">
                                <thead style="font-weight:bold;background-color:#696969; color:white">
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
                                <tbody id="txtHint">

                                </tbody>
                            </table>
                        </section>
                    </form>
                </div>

                <script>
                    CKEDITOR.replace('content');

                </script>
                <script>
                    function showList(str) {
                        var x = document.getElementById("c_name").value;
                        var y = document.getElementById("demo").innerHTML = "You selected: " + x;

                        if (str == "") {
                            document.getElementById("txtHint").innerHTML = "";
                            return;
                        } else {
                            if (window.XMLHttpRequest) {
                                // code for IE7+, Firefox, Chrome, Opera, Safari
                                xmlhttp = new XMLHttpRequest();
                            } else {
                                // code for IE6, IE5
                                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                            }
                            xmlhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    $("#heading").show();
                                    document.getElementById("txtHint").innerHTML = this.responseText;

                                }
                            };
                            xmlhttp.open("GET", "updategetlist.php?q=" + str, true);
                            xmlhttp.send();
                        }
                    }

                </script>
            </div>
        </div>
    </div>
</body>

</html>
