<?php
require 'config/constrants.php';
session_destroy();
header('location:'.ROOT_URL);
die();
?>