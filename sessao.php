<?php
session_start();
if($_SESSION['email'] == null || $_SESSION['email'] == ""){
	header('Location: index.php');
}