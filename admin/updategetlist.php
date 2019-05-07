<?php
include('include/conn.php');
$q = ($_GET['q']);

                                    $getdata="SELECT * FROM course_content WHERE course = '".$q."'";
                             
                                    $resdata=mysqli_query($conn,$getdata);
                                    if(mysqli_num_rows($resdata)>0){
                                        $i=1;
                                        
                                        while($rowdata=mysqli_fetch_assoc($resdata)){
                                            echo "<tr>
                                            <td>".$i."</td>
                                      
                                            <td>".$rowdata["course"]."</td>
                                            <td>".$rowdata["heading"]."</td>
                                            
                                            <td><a class='btn btn-primary' href='updateeditcontent.php?course=".$rowdata["course"]."&heading=".$rowdata["heading"]."'>Edit</a>
                                            <a class='btn btn-warning' href='deletecourse_content.php?id=".$rowdata["id"]."'>Delete</a>
                                            </td>
                                            </tr>";
                                            $i++;
                                        }
                                    }
                                else{
                                    echo "no record found!";
                                }
                                    echo "<tr></tr>";

?>