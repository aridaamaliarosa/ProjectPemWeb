<?php
if (isset($_POST['loc'])) $loc = $_POST['loc'];
else $loc = 'home.php';
// include 'include/db_connect.php';
// include 'model/User.php';
include 'view/' . $loc;
