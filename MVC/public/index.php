<?php
require '../apps/controllers/HomeController.php';
require '../apps/models/User.php';

$controller  = new HomeController();
$controller -> index();
?>