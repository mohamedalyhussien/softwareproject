<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin profile</title>
</head>
<body>
    <?php
    include("../include/header.php");
    include("../include/connection.php");

    $ad=$_SESSION('admin');


    $query="SELECT * from admin where username='$ad'";

    $res=mysqli_query($connect,$query);

    while($row=mysqli_fetch_array($res)){
        $username=$row['username'];
        $profile=$row['profile'];
    }

    ?>


<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2" style="margin-left: -30px;">
        <?php
        
        include("sidenav.php");
        
        ?>
            </div>
            <div class="col-md-10">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Admin Profile</h4>
                            <form method="post" enctype="multipart/form-data">

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div> 

</div>
</body>
</html>