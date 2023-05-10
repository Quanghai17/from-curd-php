<?php
include('../lib/function.php');
$user_name = intval($_GET['user_name']);
global $user_nav;
ds_delete($user_name);
header('location:list.php');
