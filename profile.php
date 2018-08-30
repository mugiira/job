






<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Registration</title>
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">


</head>
<style>
    h2{
        font-family: "Roboto Black";
        font-size: 28px;
        font-weight: 100;
        text-transform: uppercase;
        color: black;

    }
    .navbar{
        min-height: 80px !important ;

        background-color: #90ad33 !important;
        border:none!important;
        border-radius: none !important;

    }
    .navbar .navbar-inverse{
        height: 50px;
    }
    .logo{
        margin-left: 530px;
        width: 200px;
        height: 60px;

    }
    label{
        font-family:monospace;
        font-size: 20px;
        font-weight: 100;
        text-transform: uppercase;
        color: black;

    }
    .title{
        font-family: monospace;
        font-size: 25px;
        font-weight: 100px;
    }


</style>
<body>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"></a>
            <img alt="Brand" src="image/logo_one.png" class="logo">
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>


        <div class="col-md-6">
            <fieldset>
                <form method="post" action="index.php">

                    <h2 class="text-center title">Creat your profile</h2>

                    <div class="form-group">

                        <label for="name">Job Name* </label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"></span>
                            <input type="text" name="username"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group">

                        <label for="name">Upload Your Cv  </label>


                            <input type="file" name="username"  class="form-control">
                       
                    </div>


                    <div class="form-group">

                        <label for="name">Telephone Number </label>


                            <input type="text" name="username"  class="form-control">

                    </div>

                    <div class="form-group">
                        <input type="submit" name="add"class="btn btn-success btn-block" value="CREATE"  >
                    </div>
        </div>



        <div class="col-md-3"></div>
    </div>
</div>


<script src="../js/jquery2.js"></script>
<script  src="../js/bootstrap.js"></script>
</body>
</html>