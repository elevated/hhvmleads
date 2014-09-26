<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Google Leads</title>
<link rel="stylesheet" type="text/css" href="themes/simpler/css/normalize.css">
<link rel="stylesheet" type="text/css" href="themes/simpler/css/main.css">
<link rel="stylesheet" type="text/css" href="themes/simpler/css/post.css">
<link rel="stylesheet" type="text/css" href="themes/simpler/css/page.css">
<link rel="stylesheet" type="text/css" href="themes/simpler/css/plugins.css">
<link rel="stylesheet" type="text/css" href="themes/simpler/css/rainbow.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script src="themes/simpler/js/rainbow-custom.min.js"></script>
<link rel="shortcut icon" href="themes/simpler/css/img/favicon.ico" type="image/x-icon">
</head>
<body>

<div id="container">

	<!-- HEADER -->
	<header id="blog-head">
		<a href="index.php" style="float:left;">
			<span class="blog-name">Google</span>
			<span class="blog-slogan">Leads</span>
		</a>
		<div style="float:left; margin-left: 20px; margin-top: 10px;"><strong>Pending Leads:</strong> <?php $pending_leads = count(file("/home/ibizloca/public_html/google.leads/leads.log")); echo $pending_leads; ?><br />
		<strong>PST:</strong> <?php $result = mysqli_query($database, "SELECT * FROM leads where timezone='PST'"); $row_cnt = mysqli_num_rows($result); echo $row_cnt; ?> <strong>MST:</strong> <?php $result = mysqli_query($database, "SELECT * FROM leads where timezone='MST'"); $row_cnt = mysqli_num_rows($result); echo $row_cnt; ?> <strong>CST:</strong> <?php $result = mysqli_query($database, "SELECT * FROM leads where timezone='CST'"); $row_cnt = mysqli_num_rows($result); echo $row_cnt; ?> <strong>EST:</strong> <?php $result = mysqli_query($database, "SELECT * FROM leads where timezone='EST'"); $row_cnt = mysqli_num_rows($result); echo $row_cnt; ?> <strong>Total:</strong> <?php $result = mysqli_query($database, "SELECT * FROM leads"); $row_cnt = mysqli_num_rows($result); echo $row_cnt; ?> </div>
	</header>

	<!-- MAIN -->
	<section id="main">