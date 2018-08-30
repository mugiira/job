
<?php
include ("Admin_area/init/db.php");
$job_post ="SELECT * FROM job_posts";
$job_query =mysqli_query($conn,$job_post);




?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meru Jobs</title>
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>

<div id="top"><!------Start of Top menu ------>

    <div class="container"> <!------Start of container ------>
        <div class="col-md-6 offer"> <!------Start of col-md-6 ------>



        </div> <!------end  of col-md-6 ------>

        <div class="col-md-6"><!------Start of col-md-6 ------>
            <ul class="menu text-right" ><!------Menu starts here ------>
                <li><a href="login.php">LOGIN</a> </li>
                <li><a href="register.php" >JOB SEEKER SIGN UP
                     <div id="register">
                         <h3 id="sub-title">Please register Here</h3>


                     </div>





                </a> </li>
                <li><a href="#">CONTACTS</a> </li>
            </ul><!------Menu end here ------>

        </div><!------end  of col-md-6 ------>

    </div><!------End of container ------>

</div><!------ End of Top menu ------>
<div id="bottom-menu">
    <div class="row">
    <div class="col-md-6">
        <img src="image/logo_one.png" class="logo">
    </div>
        <div class="col-md-6">
<div class="bottom-menu">
        <ul class="text-right"  ><!------Menu starts here ------>

            <li class="btn-mn"><a href="#">JOB SEEKER SIGN UP </a> </li>
            <li class="btn-mn"><a href="profile.php">create you profile</a> </li>
        </ul>
</div>
        </div>
    </div>
</div>
</div>
<?php include('includes/landing_area.php');  ?>



</div>

    <div class="row">
        <h2 class="text-center" id="top-jobs">TOP JOBS IN MERU COUNTY</h2>
        <hr id="top-line">
        <div class="container">

        <hr>
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <?php
            while($job_row=mysqli_fetch_array($job_query)){
                $job_id =$job_row['id'];
                $job_name =$job_row['cat_name'];
                $job_function =$job_row['job_function'];
                $job_location =$job_row['location'];
                $job_duration =$job_row['job_duration'];
                $job_


                ?>
            <div class="col-md-4    ">
            <div class="job-1">
                <a href="job_details.php?details=<?=  $job_id ?>">
                <h3 class="job-name"><?= $job_name ?></h3>
                <p class="job-loc"><?= $job_location ?> &nbsp;<span><?= $job_duration ?></span></p>
                <p class="job-fun">Job Function<span><?= $job_function  ?></span></p>
                </a>
            </div>
        </div>
            <?php }  ?>







        </div>

        <div class="col-md-1"></div>
    </div>


</div>


<script src="js/jquery-1.11.1.min.js"></script>
<script  src="js/bootstrap.min.js"></script>
</body>
</html>