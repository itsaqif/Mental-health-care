<?php
$connection = mysqli_connect("localhost", "root", "", "exam");
if (isset($_POST['blog_save'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $blog_image = $_POST['image'];

    $query = "INSERT INTO blog_title (blog_title, blog_descrip, blog_image) VALUES('$title', '$description', '$blog_image')";

    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Blog Data Added";
        header("Location: blog_title.php");
    } else {
        $_SESSION['status'] = "Blog Data Not Added";
        header("Location: blog_title.php");
    }
}
if (isset($_POST['blog_update_btn'])) {
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $description = $_POST['edit_description'];
    $image = $_POST['edit_image'];

    $query = "UPDATE blog_title SET blog_title= '$title', blog_descrip = '$description', blog_image= '$image' WHERE blog_id = '$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Your data is Updated Successfully";
        header('Location: blog_title.php');
    } else {
        $_SESSION['status'] = "Your data is not Updated";
        header('Location: blog_title.php');
    }
}

// Blog Data Delete Queries

if (isset($_POST['delete_blog_btn'])) {
    $id = $_POST['delete_id'];
    $query = "DELETE FROM blog_title WHERE blog_id = '$id' ";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        $_SESSION['success'] = "Your data is Deleted";
        header('Location: blog_title.php');
    } else {
        $_SESSION['status'] = "Your data is not Deleted";
        header('Location: blog_title.php');
    }
}
?>