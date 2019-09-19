<?php

//Getting user's ID as session ID, if not, redirect to login page
require_once "util/dbUtils.php";
session_start();
$user = getSessionUserElseRedirectToLoginPage();
$settings = getUserSettings();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RMIT Wallet</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/site.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
</head>
<body>

<header>
    <!-- Setting a fixed top navigation bar with user's first & last name, avatar & logout function-->
    <nav class="navbar navbar-expand navbar-dark fixed-top">
        <button type="button" id="sidebarCollapse" class="btn btn-outline">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="navbar-nav mr-auto">
        </ul>
        <div>
            <a class="text-light mr-2"><?php echo 'Welcome,' . ' ' .$user['firstname'] . ' ' . $user['lastname'] ?></a>
            <img src="<?php echo $settings['path'] ?>" class="nav-profilePic rounded-circle">
            <a href="logout.php" class="text-light mr-2">Logout</a>
        </div>
    </nav>
</header>

<!-- Sidebar -->
<nav id="sidebar" class="border-right">
    <div id="sidebar-dismiss" class="p-2">
        <i class="fas fa-arrow-left"></i>
    </div>

    <img class="wallet-logo" src="images/wallet_logo.png" alt="RMIT Wallet">

    <ul id="sidebar-items" class="list-unstyled">
        <li>
            <a class="active" href="index.php"><i class="fas fa-fw fa-home mr-2"></i>Home</a>
        </li>
        <li>
            <a href="settings.php"><i class="fas fa-fw fa-cog mr-2"></i>Settings</a>
        </li>
        <li>
            <a href="event.php"><i class="fas fa-fw fa-calendar-alt mr-2"></i>Events</a>
        </li>
    </ul>
</nav>

<main role="main">
    <!-- Main Content -->
    <div class="container">
        <div id="profileTypeBtns" class="row my-3 px-2 px-md-0">
            <div class="col-sm-6 p-2 d-flex" href="profiles.php?type=work">
                <i class="fas fa-fw fa-3x mr-4 fa-briefcase"></i>
                <div>
                    <h4>Work</h4>
                    <p>A place to store work-related documents</p>
                </div>
            </div>
            <div class="col-sm-6 p-2 d-flex" href="profiles.php?type=educational">
                <i class="fas fa-fw fa-3x mr-3 fa-graduation-cap"></i>
                <div>
                    <h4>Education</h4>
                    <p>A place to store education-related documents</p>
                </div>
            </div>
            <div class="col-sm-6 p-2 d-flex" href="profiles.php?type=personal">
                <i class="far fa-fw fa-3x mr-3 fa-user"></i>
                <div>
                    <h4>Personal</h4>
                    <p>A place to show your hobbies</p>
                </div>
            </div>
            <div class="col-sm-6 p-2 d-flex" href="profiles.php?type=credits">
                <i class="far fa-fw fa-3x mr-3 fa-comments"></i>
                <div>
                    <h4>Credits</h4>
                    <p>A place to list your certificates</p>
                </div>
            </div>
        </div>

    </div>

</main>

<!-- Dark Overlay element -->
<div id="sidebar-overlay"></div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
<script src="js/site.js"></script>
<script src="js/home.js"></script>

</body>
</html>