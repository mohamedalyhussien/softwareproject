<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Admin Dashboard</title>
</head>
<body>
    <?php
    
    include("../include/header.php");
    include("../include/connection.php");
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left:-20px">

                <?php
                include("sidenav.php");
                ?>

                </div>
                <div class="col-md-10">
                    <h4 class="my-2">Admin Dashboard</h4>
                <div class="col-md-12 my-5">
                    <div class="row"> 
                        <div class="col-md-3 bg-success mx-1" style="height:130px;">
                                <div class ="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <?php
                                            $ad=mysqli_query($connect,"SELECT * FROM admin ");
                                            $num=mysqli_num_rows($ad);
                                            ?>
                                            <h5 class="my-2 text-white" style="font-size:30px;"><?php echo $num; ?></h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Admin</h5>
                                        </div>
                                        <div class="col-md-3">
                                           <a href="admin.php"> <i class="fa fa-users-cog fa-3x my-2" style="color:white;"></i></a>
                                    </div>
                                    </div>
                                    
                                </div>
                        </div>
                        <div class="col-md-3 bg-info mx-1" style="height:130px;">
                        <div class ="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Doctors</h5>
                                        </div>
                                        <div class="col-md-3">
                                           <a href=""> <i class="fa fa-user-md fa-3x my-2" style="color:white;"></i></a>
                                    </div>
                                    </div>
                                    
                                </div></div>
                        <div class="col-md-3 bg-warning mx-2" style="height:130px;">
                        <div class ="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Patients</h5>
                                        </div>
                                        <div class="col-md-3">
                                           <a href=""> <i class="fa fa-procedures fa-3x my-2" style="color:white;"></i></a>
                                    </div>
                                    </div>
                                    
                                </div>
                        </div>
                        <div class="col-md-3 bg-danger mx-1 my-2" style="height:130px;">
                        <div class ="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Reports</h5>
                                        </div>
                                        <div class="col-md-3">
                                           <a href=""> <i class="fa fa-flag fa-3x my-2" style="color:white;"></i></a>
                                    </div>
                                    </div>
                                    
                                </div>
                        </div>
                        <div class="col-md-3 bg-warning mx-1 my-2" style="height:130px;">
                        <div class ="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Job Requests</h5>
                                        </div>
                                        <div class="col-md-3">
                                           <a href=""> <i class="fa fa-book-open fa-3x my-2" style="color:white;"></i></a>
                                    </div>
                                    </div>
                                    
                                </div>
                        </div>
                        <div class="col-md-3 bg-success mx-1 my-2" style="height:130px;">
                        <div class ="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Income</h5>
                                        </div>
                                        <div class="col-md-3">
                                           <a href=""> <i class="fa fa-money-check-alt fa-3x my-2" style="color:white;"></i></a>
                                    </div>
                                    </div>
                                    
                                </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>