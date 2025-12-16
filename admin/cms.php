<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once '../function/database.php';

if($_SESSION["login"] == "success"){
    include 'header.php';
    ?>
    <main style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title">Welcome to the admin page!</h5>
                <p class="card-text">Please choose a page to manage:</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="cms_aboutusbaduy.php?category=aboutus">About Us</a></li>
                    <li class="list-group-item"><a href="cms_aboutusbaduy.php?category=aboutbaduy">About Baduy</a></li>
                    <li class="list-group-item"><a href="cms_testi.php?category=testimonials">Testimonials</a></li>
                    <li class="list-group-item"><a href="cms_gallery.php?category=gallery">Gallery</a></li>
                    <li class="list-group-item"><a href="cms_blog.php?category=blog">Blog</a></li>
                </ul>
            </div>
        </div>
    </main>

    <?php
    include 'footer.php';
} else {
    header("Location: index.php");
    exit();
}
?>
