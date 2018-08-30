<?php include ("init/db.php");
include ('includes/session.php');





?>


    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Job Posts</title>
        <link rel="stylesheet"  href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="../css/admin_style.css">


    </head>
    <body>
    <div class="container"><!---- Start of container ==== ---->
        <div class="row"><!---- Start of  row ==== ---->
            <div class="col-sm-2"><!---- Start of col-sm-2 ==== ---->
                <h1  class="Admin_title">Meru county Admin</h1>
                <ul id="side_menu" class="nav nav-pills nav-stacked">
                    <li><a href="index.php">Home</a><li>
                    <li><a href="category.php">Category</a><li>
                    <li class="active"><a href="post_jobs.php">Post Jobs</a><li>
                </ul>

            </div><!---- End of col-sm-2 ==== ---->
            <div class="col-sm-10"><!---- Start of col-sm-10 ==== ---->

                <h1 class="text-center" id="title_heading" >Post jobs</h1>
                <div><?php  echo error_Message(),success_Message();?></div>
                <fieldset>
                    <form action="post_jobs.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="title">Title of job </label>
                            <input type="text" name="title_job" placeholder="enter the title " class="form-control" id="title">
                        </div>
                        <div class="form-group">
                            <label for="location">Location </label>
                            <input type="text" name="location" placeholder="enter the location" class="form-control" id="location">
                        </div>

                        <div class="form-group">
                            <label >Job Duration </label>
                            <select name="job_duration"  class="form-control">
                                <option>Full Time</option>
                                <option>Part Time</option>

                            </select>
                            <hr>
                        </div>
                        <div class="form-group">
                            <label for="name">Job Function </label>
                            <input type="text" name="job_function" placeholder="enter the job function" class="form-control">
                        </div>
                        <div class="form-group">
                            <label >category </label>

                            <select name="job_category" class="form-control">
                                <?php
                                $cat ="SELECT * FROM categories";
                                $cat_query=mysqli_query($conn,$cat);
                                while($cat_row=mysqli_fetch_array($cat_query)){
                                $cat_name =$cat_row['cat_name'];

                                ?>
                                <option><?php echo $cat_name ;?></option>
                                <?php }?>
                            </select>


                        </div>
                        <div class="form-group">
                            <label for="post_summary">Job Summary </label>
                            <textarea class="form-control" rows="3" id="post_summary" name="job_summary" ></textarea>

                        </div>
                        <div class="form-group">
                            <label for="pro_description">Job Description </label>
                            <textarea class="form-control" rows="3" id="pro_description" name="job_desc" ></textarea>

                        </div>
                        <div class="form-group">
                            <input type="submit" name="post_job" class="btn btn-success btn-block"  value="POST"  >
                        </div>
                    </form>
                </fieldset>



            </div><!---- Start of col-sm-10 ==== ---->
        </div>
    </div><!---- End  of container ==== ---->

    <script src="../js/jquery2.js"></script>
    <script  src="../js/bootstrap.js"></script>
    </body>
    </html>

<?php
if(isset($_POST['post_job'])) {
        $post_title = $_POST['title_job'];
        $post_location = $_POST['location'];
        $post_duration = $_POST['job_duration'];
        $post_job_function = $_POST['job_function'];
        $post_category = $_POST['job_category'];
        $post_summary =$_POST['job_summary'];
        $post_desc =$_POST['job_desc'];
    if (empty($post_title) || empty($post_location) || empty($post_duration) ||empty($post_category)) {
    $_SESSION['ErrorMessage'] = "Please you have not entered anything in the category box";


}
elseif(strlen($post_title)>40){
    $_SESSION['SuccessMessage'] = "it is too long";
    header('location:post_jobs.php');
}else{
        $insert_post = "INSERT INTO job_posts (cat_name,title_job,location,job_duration,job_function,job_summary,job_desc)
          VALUES('$post_category',' $post_title','$post_location ',' $post_duration','$post_job_function','$post_summary','$post_desc')";
        $query = mysqli_query($conn, $insert_post);
        if ($query) {
            $_SESSION['SuccessMessage'] = "it is post is added successfully to the database ";


        }






}}



?>
