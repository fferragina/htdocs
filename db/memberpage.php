<?php require('includes/config.php');
if(!$user->is_logged_in()){ header('Location: login.php'); }
$title = 'Members Page';
require('layout/header.php');
?>
<body>
<div class="ws">
    <nav role="navigation" class="navbar navbar-default">
        <div class="navbar-header">
            <a href="memberpage.php" class="navbar-brand">Webmaschinen Sammlung</a>
            <ul class="nav navbar-nav"> <li> <a href='logout.php'>Logout</a> </li> </ul>
            <ul class="nav navbar-nav navbar-right"> <li> <a href='#'> <?php echo $_SESSION['username']; ?> </a></li> </ul>
        </div>
    </nav>
</div>
<div class="container">
    <div class="row">
        <div class="span4">
            <h2>Photoarchiv</h2>
            <p></p>
            <p><a class="btn btn-primary" href="photoarchiv.php">Suche &nbsp; <i class="icon-picture icon-white"></i></a></p>
        </div>
        <div class="span4">
            <h2>Bibliothek</h2>
            <p></p>
            <p><a class="btn btn-success" href="library.php">Suche &nbsp; <i class="icon-book icon-white"></i></a></p>
        </div>
        <div class="span4">
            <h2>Archiv</h2>
            <p></p>
            <p><a class="btn btn-info" href="archiv.php">Suche &nbsp; <i class="icon-folder-open icon-white"></i></a></p>
        </div>
    </div>
    <?php
    require('layout/footer.php');
    ?>
