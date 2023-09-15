<?php
    include_once 'database.php';
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:login.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once 'database.php';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Mental Health Quiz</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
    <link rel="stylesheet" href="css/welcome.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
</head>

<body>
    <nav class="navbar navbar-default title1">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Javascript:void(0)"><b>Mental Health Quiz</b></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a href="dashboard.php?q=0">Home<span class="sr-only">(current)</span></a></li>
                    <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="dashboard.php?q=1">User</a></li>
                    <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="dashboard.php?q=2">Ranking</a></li>
                    <li class="dropdown <?php if(@$_GET['q']==4 || @$_GET['q']==5) echo'active"'; ?>">
                    <li><a href="dashboard.php?q=4">Add Quiz</a></li>
                    <li><a href="dashboard.php?q=5">Remove Quiz</a></li>
                    <li><a href="blog_title.php">Blogs</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">FAQs</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li <?php echo''; ?> > <a href="logout1.php?q=dashboard.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bolder text-danger">EDIT BLOG
            </h6>
        </div>
        <div class="card-body">
        <?php
        $connection = mysqli_connect("localhost","root","","exam");
        if(isset($_POST['edit_btn'])){
        $id = $_POST['edit_id'];
    
        $query = "SELECT * FROM blog_title WHERE blog_id= '$id' ";
        $query_run = mysqli_query($connection, $query);

        foreach($query_run as $row){

            ?>
            <form action="code.php" method="POST">
              <input type="hidden" name="edit_id" value="<?php echo $row['blog_id']?>">
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="edit_title" value="<?php echo $row['blog_title']?>" class="form-control" placeholder="Enter title">
            </div>
            <div class="form-group">
              <label>Description</label>
              <input type="text" name="edit_description" value="<?php echo $row['blog_descrip']?>" class="form-control" placeholder="Enter your Description">
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" name="edit_image" value="<?php echo $row['blog_image']?>" class="form-control" >
            </div>
            <a href="blog_title.php" class="btn btn-danger">CANCEL</a>
            <button type="submit" name="blog_update_btn" class="btn btn-primary text-bg-dark bg-black">Update</button>
            </form>
            <?php
        }
}

?>
        </div>
    </div>

</div>