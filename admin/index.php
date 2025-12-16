<?php
session_start();
$_SESSION["login"] = "";
$now = time();
if (isset($_SESSION['discard_after']) && $now > $_SESSION['discard_after']) {

    // this session has worn out its welcome; kill it and restart it
    session_unset();
    session_destroy();
    session_start();

    // set the expiration datetime to 30 minutes into the future
    $_SESSION['discard_after'] = $now + 1800;
}

if (isset($_GET['logout']))
if ($_GET['logout'] == 1) {
    session_unset();
}
include '../function/database.php';

if(isset ($_POST["login"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query ="select * from tb_user
              where user_name='$username' and user_password='$password' ";
              
    $sql = mysql_query($query);
    if ($row = $sql->fetch()){
        $_SESSION["login"] = "success";
        header('Location: cms.php');
    }else{
        ?>
        <script>
            alert("Login Error, Please check your username and password");
        </script>

<?php
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>JejakBaduy</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="forms-container">
                <div class="form-control signin-form">
                    <form action="index.php" method="post">
                        <img src="../images/logo1.png" style="width: 40%; height: auto; display: block; margin: 0 auto;"><br>
                        <h2>Sign In</h2>
                        <input type="text" placeholder="Username" name="username" required />
                        <input type="password" placeholder="Password" name="password" required />
                        <button type="submit" name="login" value="login">Log In </button>
                    </form>
                </div>
                </div>
                <div class="intros-container">
                <div class="intro-control signin-intro">
                    <class="intro-control__inner">
                        <h2>Welcome back!</h2>
                        <p>
                            Welcome back! We are so happy to have you here. Get ready to personalize your website!
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>