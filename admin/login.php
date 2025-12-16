<?php
if (isset($_POST['login'])) {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once '../function/database.php';

    $stmt = $conn->prepare("SELECT user_name FROM tb_user WHERE user_name = ? AND user_password = ?");
    $stmt->execute([$username, $password]);
    if ($stmt->fetch()) {
        $_SESSION["user"] = $username;
        header("Location:index.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5" style="max-width:600px">
        <div class="login-form">
            <form action="login.php" method="post">
                <div class="form-field mb-4">
                    <input class="form-control" type="text" name="username" id="" placeholder="Username">
                </div>
                <div class="form-field mb-4">
                    <input class="form-control" type="password" name="password" id="" placeholder="Password">
                </div>
                <div class="form-field mb-4">
                    <input class="btn btn-primary" type="submit" value="Login" name="login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>