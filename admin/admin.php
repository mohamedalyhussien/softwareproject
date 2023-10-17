<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
</head>
<body>
    <?php
    include("../include/header.php");
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2 "style="margin-left:-30px">
                    <?php
                    include("sidenav.php");
                    include("../include/connection.php");
                    ?>
                </div>
            <div class="col-md-10">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-center">All Admin</h5>

                            <?php
                            $ad=$_SESSION['admin'];
                            $query="SELECT * FROM admin WHERE username !='$ad'";
                            $res=mysqli_query($connect,$query);
                            $output="
                            <table class='table table-bordered'>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th style='width:10%;'>Action</th>
                            <tr>
                            ";
                            if(mysqli_num_rows($res)<1)
                            {
                                $output .= "<tr><td colspan ='3'class='text-center'>No New Admin</td></tr>";
                            }
                            while($row=mysqli_fetch_array($res))
                            {
                                $id=$row['id'];
                                $username=$row['usename'];

                                $output .="
                                
                                <tr>
                                    <td>$id</td>
                                    <td>$username</td>
                                    <td>
                                        <button id='$id' class='btn btn-danger remove'>Remove</button>
                                    </td>
                               
                                
                                ";
                            }

                            $output .="
                            
                            </tr>
                            </table>
                            ";
                            echo $output;
                            ?>
                            
                            



                            

                                
                            

                        </div>
                        <div class="col-md-6">
                            <h5 class="text-center">Add Admin</h5>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    
        </div>
    </div>
</body>
</html>