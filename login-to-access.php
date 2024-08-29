<?php
require_once('session.php');
require_once('function.php');
if (!isset($_SESSION["id"]))
{
    header("location:login.php");
}
?>