<?php require('includes/config.php');
if(!$user->is_logged_in()){ header('Location: login.php'); }
$title = 'Members Page';
include_once 'layout/header.php';
include('xcrud/xcrud.php');
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
<?php
$xcrud = Xcrud::get_instance();
$xcrud->table('photoarchive');
$xcrud->unset_csv();
$xcrud->unset_print();
echo $xcrud->render();
include_once 'layout/footer.php';
?>