<?php  include ('Admin_area/init/db.php');
if(isset($_GET['details'])){
    $id_details =$_GET['details'];
    $job_summary = "SELECT * FROM  job_posts WHERE id = '$id_details'";
    $sum_query = mysqli_query($conn, $job_summary);

}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meru Jobs Details</title>
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>

</div><!------ End of Top menu ------>
<div id="bottom-menu">
    <div class="row">
        <div class="col-md-6">
            <img src="image/logo_one.png" class="logo">
        </div>
        <div class="col-md-6">
            <div class="bottom-menu">
                <ul class="text-right"  ><!------Menu starts here ------>

                    <li class="btn-mn"><a href="apply_job.php">Apply for job </a> </li>
                    <li class="btn-mn"><a href="#">create you profile</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-1">

        </div>

        <div class="col-sm-10" id="job_details">
            <?php
            $row_sum =mysqli_fetch_array($sum_query);

            $cat_name =$row_sum['cat_name'];
            $job_title =$row_sum['title_job'];
            $location =$row_sum['location'];
            $job_duration =$row_sum['job_duration'];
            $job_function =$row_sum['job_function'];
            $job_summary =$row_sum['job_summary'];
            $job_desc =$row_sum['job_desc'];
            ?>
        <h4>Category:<?= $cat_name ?></h4>
            <p> <b> Location : </b>&nbsp;<span><?= $location?></span></p>
            <p ><b>Duration : </b><span><?=  $job_duration?></span></p>
            <p ><b>Job Function :</b><span> <?= $job_function ?></span></p>

        <div >
            <h2>Job Summary</h2>
            <p><?= $job_summary ?></p>
        </div>
        <hr>
        <div class="job_description">
            <h2>Job Description</h2>
            <p><?= $job_desc ?></p>
        </div>

        <div class="col-sm-1"></div>
    </div>
</div>
</div>



<script src="js/jquery-1.11.1.min.js"></script>
<script  src="js/bootstrap.min.js"></script>
</body>
</html>