<?php require('includes/config.php');
if(!$user->is_logged_in()){ header('Location: login.php'); }
$title = 'Members Page';
require('layout/header.php');
?>

<div class="container">
    <div class="hero-unit">
        <h1>Webmaschinen Sammlung <?php echo $_SESSION['username']; ?></h1>
        <p><a href='logout.php'>Logout</a></p>
        <hr>
    </div>
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
