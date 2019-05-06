<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html>
<!--<![endif]-->

<head>
    <title><?php echo $title;?></title>
    <meta name="robots" content="all">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="<?php echo $key;?>" />
    <meta name="description" content="<?php echo $des;?>" />
    <link type="image/x-icon" rel="shortcut icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/style-main.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="panel"></div>
<!--start page-wrapper-->
<div class="page-wrapper">
    <!--Шапка-->
    <?php include "./blocks/header.php" ?>
    <!--Услуги компании-->
    <?php include "./blocks/top-menu.php" ?>
