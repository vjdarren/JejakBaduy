<?php 

include 'function/database.php';
include 'header.php';

if (isset($_GET['page'])) {
  if ($_GET['page']=="home"){
    include 'home.php';
  }elseif ($_GET['page']=="about-us"){
    include 'about-us.php';
  }elseif ($_GET['page']=="about-baduy"){
    include 'about-baduy.php';
  }elseif ($_GET['page']=="blog"){
    include 'blog.php';
  }elseif ($_GET['page']=="contact"){
    include 'contact.php';
  }elseif ($_GET['page']=="gallery"){
    include 'gallery.php';
  }elseif ($_GET['page']=="services"){
    include 'services.php';
  }elseif ($_GET['page']=="services-single"){
    include 'services-single.php';
  }elseif ($_GET['page']=="blog-single"){
    include 'blog-single.php';
  }elseif ($_GET['page']=="thank_you"){
    include 'thank_you.php';
  }elseif ($_GET['page']=="testimonials"){
    include 'testimonials.php';
  }
} else (
  include 'home.php'
);

include 'footer.php'; 


