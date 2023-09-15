<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>ROYAL HEAL</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />


<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-black">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">Royal Heal</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="Aboutus.php">About</a></li>
          <li>
            <a class="nav-link scrollto" href="blog.php">Blogs</a>
          </li>
          <li class="dropdown">
            <a href="#"><span>Mental Diseases</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Depression</a></li>
              <li><a href="Anxiety.html">Anxiety Disorder</a></li>
              <li><a href="#">Schizophrenia</a></li>
              <li><a href="#">Eating Disorder</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contactus/contact-view.php">Contact Us</a></li>
          <li>
            <a class="getstarted scrollto" href="Online-Quiz/index.php">Get Started</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->
  <br><br><br><br>

  <header class="header text-center">
    <h1>Social Anxiety Blog</h1>
    <p>A place to share experiences and insights</p>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="post">
          <h2 class="title">Understanding Social Anxiety</h2>
          <p class="text-muted">Posted on July 12, 2023</p>
          <div class="content">
            <p>Social anxiety, also known as social phobia, is a mental health condition characterized by an intense fear of social situations.</p>
            <p>People with social anxiety often experience excessive self-consciousness, fear of judgment or embarrassment, and avoidance of social interactions.</p>
            <p>If you or someone you know is struggling with social anxiety, it's important to seek help from a mental health professional. Treatment options include therapy, medication, and self-help strategies.</p>
          </div>
        </div>

        <div class="post">
          <h2 class="title">Tips for Managing Social Anxiety</h2>
          <p class="text-muted">Posted on July 10, 2023</p>
          <div class="content">
            <ul>
              <li>Practice deep breathing and relaxation techniques.</li>
              <li>Challenge negative thoughts and replace them with more realistic ones.</li>
              <li>Gradually expose yourself to social situations to build confidence.</li>
              <li>Seek support from friends, family, or support groups.</li>
              <li>Take care of your physical health through regular exercise and a balanced diet.</li>
            </ul>
          </div>
        </div>

        <div class="post">
          <h2 class="title">Overcoming Social Anxiety: A Personal Story</h2>
          <p class="text-muted">Posted on July 8, 2023</p>
          <div class="content">
            <p>Hi, my name is Sarah, and I used to struggle with social anxiety.</p>
            <p>For years, social situations were a source of extreme stress and discomfort for me.</p>
            <p>However, through therapy and determination, I was able to gradually overcome my social anxiety and build a more fulfilling social life.</p>
            <p>If you're struggling with social anxiety, remember that it's possible to overcome it with time and support. Don't give up!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer text-center">
    <p>&copy; 2023 Social Anxiety Blog. All rights reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Sample data for blog posts
$blogPosts = [
    [
        'id' => 1,
        'title' => 'Understanding Social Anxiety',
        'date' => 'July 12, 2023',
        'content' => 'Social anxiety, also known as social phobia, is a mental health condition characterized by an intense fear of social situations. People with social anxiety often experience excessive self-consciousness, fear of judgment or embarrassment, and avoidance of social interactions.',
    ],
    [
        'id' => 2,
        'title' => 'Tips for Managing Social Anxiety',
        'date' => 'July 10, 2023',
        'content' => 'Practice deep breathing and relaxation techniques. Challenge negative thoughts and replace them with more realistic ones. Gradually expose yourself to social situations to build confidence. Seek support from friends, family, or support groups. Take care of your physical health through regular exercise and a balanced diet.',
    ],
    [
        'id' => 3,
        'title' => 'Overcoming Social Anxiety: A Personal Story',
        'date' => 'July 8, 2023',
        'content' => 'Hi, my name is Sarah, and I used to struggle with social anxiety. For years, social situations were a source of extreme stress and discomfort for me. However, through therapy and determination, I was able to gradually overcome my social anxiety and build a more fulfilling social life. If you\'re struggling with social anxiety, remember that it\'s possible to overcome it with time and support. Don\'t give up!',
    ],
];

// Function to display all blog posts
function displayBlogPosts() {
    global $blogPosts;
    foreach ($blogPosts as $post) {
        echo '
        <div class="post">
          <h2 class="title">'.$post['title'].'</h2>
          <p class="text-muted">Posted on '.$post['date'].'</p>
          <div class="content">
            <p>'.$post['content'].'</p>
          </div>
          <div class="actions">
            <a href="edit.php?id='.$post['id'].'" class="btn btn-primary">Edit</a>
            <a href="delete.php?id='.$post['id'].'" class="btn btn-danger">Delete</a>
          </div>
        </div>
        ';
    }
}

// Edit post functionality
if (isset($_GET['id']) && isset($_POST['title']) && isset($_POST['content'])) {
    $postId = $_GET['id'];
    $newTitle = $_POST['title'];
    $newContent = $_POST['content'];

    foreach ($blogPosts as &$post) {
        if ($post['id'] == $postId) {
            $post['title'] = $newTitle;
            $post['content'] = $newContent;
            break;
        }
    }

    // Redirect to the blog post after editing
    header('Location: adminblog.php');
    exit();
}

// Insert post functionality
if (isset($_POST['title']) && isset($_POST['content'])) {
    $newPostId = count($blogPosts) + 1;
    $newPostTitle = $_POST['title'];
    $newPostDate = date('F j, Y');
    $newPostContent = $_POST['content'];

    $newPost = [
        'id' => $newPostId,
        'title' => $newPostTitle,
        'date' => $newPostDate,
        'content' => $newPostContent,
    ];

    $blogPosts[] = $newPost;

    // Redirect to the blog post after inserting
    header('Location: index.php');
    exit();
}

// Delete post functionality
if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];

    foreach ($blogPosts as $key => $post) {
        if ($post['id'] == $deleteId) {
            unset($blogPosts[$key]);
            break;
        }
    }

    // Reset array keys
    $blogPosts = array_values($blogPosts);

    // Redirect to the blog post after deleting
    header('Location: index.php');
    exit();
}
?>
<?php
include("footer.php")
?>