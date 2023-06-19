<?php  session_start();
	include_once 'includes/config.php';
	//  all functions
	require_once 'functions/functions.php';

	//run whenever this file is used no need of isset or any condition to get website image footer etc
	$sql5 ="SELECT * FROM  settings;";

	$result5 = $conn->query($sql5);
	$row5 = $result5->fetch_assoc();
	$_SESSION['web-name'] = $row5['website_name'];
	$_SESSION['web-img'] = $row5['website_logo'];
	$_SESSION['web-footer'] = $row5['website_footer'];

	// TODO: Also update setting to add info email, whatsapp, address etc to change it dynamically
?>

<!DOCTYPE html>
<html lang="en">

  <head>
  	<meta charset="UTF-8" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


	<!-- Favicon -->
	<link rel="shortcut icon" href="./images/flogo/fav.png" type="image/x-icon" />
	
    <title><?php echo $_SESSION['web-name']; ?></title>

	


	<!-- <link href="./css/font-awesome.css" rel="stylesheet" type="text/css"> -->
	<!-- font awesome code -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<!-- main style -->
	<!-- <link rel="stylesheet" href="./css/style.php"> -->
	
	<!--
		- custom css link
	-->
	
	<link rel="stylesheet" type="text/css" href="./css/style-prefix.css?<?php echo time(); ?>" />
	<!-- <link rel="stylesheet" href="./css/style-prefix.css" /> -->
	<link rel="stylesheet" type="text/css" href="./css/view-details.css?<?php echo time(); ?>" />
	<link rel="stylesheet" type="text/css" href="./css/cart-card-design.css?<?php echo time(); ?>" />
	<link rel="stylesheet" type="text/css" href="./css/aboutus.css?<?php echo time(); ?>" />
	<link rel="stylesheet" type="text/css" href="./css/contact.css?<?php echo time(); ?>" />
	<link rel="stylesheet" type="text/css" href="./css/pagination.css?<?php echo time(); ?>" />
	<!--
		- google font link
	-->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  </head>

<body>

<!-- added manually to some places like contact and about page and footer -->
<?php
  //  site details
    // $site_name = "HCA E-Commerce";
    $site_address = "5900 BALCONES DRIVE STE 4129 AUSTIN TX, USA 78731";
    $site_contact_num = "(336) 717-5310";
    $site_info_email = "info@clickableshop.com";
?>