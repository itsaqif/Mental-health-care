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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                    <li><a href="">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li <?php echo''; ?> > <a href="logout1.php?q=dashboard.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Add blog Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter title">
          </div>
          <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" class="form-control" placeholder="Enter Description">
          </div>

          <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control" >
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: white; background-color: black;">Close</button>
          <button type="submit" name="blog_save" class="btn btn-danger">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">

      <h6 class="m-0 font-weight-bold text-black"><b style="font-size: 20px;">BLOG</b>
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  ADD
</button>
      </h6>
    </div>
    <div class="card-body">
      <?php

      if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
        echo '<h2 class="bg-primary text-white">' . $_SESSION['success'] . '</h2>';
        unset($_SESSION['success']);
      }
      if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h2 class="bg-danger text-white">' . $_SESSION['status'] . '</h2>';
        unset($_SESSION['status']);
      }



      ?>
      <div class="table-responsive">
        <?php
        $connection = mysqli_connect("localhost", "root", "", "exam");
        $query = "SELECT * FROM blog_title ";
        $query_run = mysqli_query($connection, $query);


        ?>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Description</th>
              <th>Image</th>
              <th>EDIT</th>
              <th>DELETE</th>
            </tr>
          </thead>
          <tbody>
            <?php

            if (mysqli_num_rows($query_run) > 0) {
              $count = 1;
              while ($row = mysqli_fetch_assoc($query_run)) {
            ?>

                <tr>
                  <td> <?php echo $count; ?></td>
                  <td> <?php echo $row['blog_title']; ?></td>
                  <td> <?php echo $row['blog_descrip']; ?></td>
                  <td> <img src="../assets/img/Blogs/<?php echo $row['blog_image']; ?>" width="90px"></td>
                  <td>
                    <form action="blog_edit.php" method="POST">
                      <input type="hidden" name="edit_id" value="<?php echo $row['blog_id']; ?>">
                      <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                    </form>
                  </td>
                  <td>
                    <form action="code.php" method="POST">
                      <input type="hidden" name="delete_id" value="<?php echo $row['blog_id']; ?>">
                      <button type="submit" class="btn btn-danger" name="delete_blog_btn">DELETE</button>
                    </form>
                  </td>
                </tr>
            <?php
                $count = $count + 1;
              }
            } else {
              echo "No Record Found";
            }


            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>