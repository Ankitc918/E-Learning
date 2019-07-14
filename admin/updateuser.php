<?php 

include('include/conn.php');

$sql1="SELECT * FROM login where usertype='user'";
$res1=mysqli_query($conn,$sql1);
?>

<script src="https://cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<html>

<head>
    <title>Edit User</title>
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
                <h2 style="color:#096d96;background-color:#eee;">Update Users</h2>

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
                                            Username
                                        </td>
                                        <td>
                                            Email
                                        </td>

                                        <td>
                                            Remove
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
                                        <td>".$row1["username"]."</td>
                                        <td>".$row1["email"]."</td>
                                        <td>
                                            <a class='btn btn-danger' href='deleteuser.php?id=".$row1["id"]."&name=".$_SESSION["name"]."'>Delete</a>
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
