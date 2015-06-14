<?php
include_once 'header.html';
include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('inventory');
$xcrud->unset_csv();
$xcrud->unset_print();
echo $xcrud->render();
include_once 'footer.html';
?>