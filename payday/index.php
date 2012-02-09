<?php 

include('class.payday.php');
$pd = new payday;

$pd->set_names(array("usera" => "john", "userb" => "anna"));
$pd->get_transactions();

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>payday</title>
<link rel="stylesheet" href="css/main.css" type="text/css" />
<!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lte IE 7]> <script src="js/IE8.js" type="text/javascript"></script><![endif]-->
<!--[if lt IE 7]>  <link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->
</head>
<body id="index" class="home">
</body>
</html>