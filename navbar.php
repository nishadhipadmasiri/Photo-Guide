<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHOTO GUIDE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<?php
include 'config.php';
if (isset($_COOKIE['user_id'])) {
    $_SESSION['login'] = true;
    $_SESSION['user_id'] = $_COOKIE['user_id'];
    $_SESSION['user_name'] = $_COOKIE['user_name'];
    $_SESSION['user_role'] = $_COOKIE['user_role'];
}
?>
<nav class="navbar navbar-dark navbar-expand-lg bg-dark text-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="bi bi-camera"></i> PHOTO GUIDE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="register.php">Register</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>';
                } ?>

                <?php if (isset($_SESSION['login']) && $_SESSION['login'] && isset($_SESSION['admin'])) {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="admin.php">Home</a>
                </li>';
                } ?>
            </ul>
            <div class="my-2 my-lg-0">
                <span class=""><?php echo $_SESSION['user_name'] ?? '' ?></span>
            </div>
        </div>
    </div>
</nav>

<body>