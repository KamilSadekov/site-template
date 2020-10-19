<?php
	$pTitle = 'Page title';
	$pDes = 'Page description';
	$pImage = '//'. $_SERVER['HTTP_HOST'] . '/static/imgs/logo.svg';
	$pUrl = '//'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

	$page = isset($_GET["p"]) ? $_GET["p"] : "index"
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?=$pTitle;?></title>
	<meta name="description" content="<?=$pDes;?>">
	<meta name="robots" content="noindex, nofollow">

	<!-- Open Graph data -->
	<meta property="og:title" content="<?=$pTitle;?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?=$pUrl;?>" />
	<meta property="og:image" content="<?=$pImage;?>" />
	<meta property="og:description" content="<?=$pDes;?>" />
	<meta property="og:site_name" content="" />
	<meta property="og:locale" content="ru_RU" />

	<!-- Twitter -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="<?=$pTitle;?>" />
	<meta name="twitter:description" content="<?=$pDes;?>" />
	<meta name="twitter:image:src" content="<?=$pImage;?>" />
	<meta name="twitter:site" content="<?=$pUrl;?>" />

	<!-- Google Plus -->
	<meta itemprop="name" content="<?=$pTitle;?>" />
	<meta itemprop="description" content="<?=$pDes;?>" />
	<meta itemprop="image" content="<?=$pImage;?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="imagetoolbar" content="no">
	<meta http-equiv="msthemecompatible" content="no">
	<meta http-equiv="cleartype" content="on">
	<meta name="HandheldFriendly" content="True">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="format-detection" content="telephone=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="viewport"
		content="width=device-width,height=device-height, initial-scale=1.0, user-scalable=no,maximum-scale=1.0, minimal-ui" />

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="/static/imgs/favicon/favicon.png" />
	<link rel="apple-touch-icon-precomposed" href="/static/imgs/favicon/apple-touch-favicon.png" />

	<!-- Подключение шрифтов -->
	<link rel="preload" href="/static/fonts/font__name.woff2" as="font" type="font/woff2" crossorigin>

	<!-- Стили -->
	<link rel="stylesheet" href="/static/css/style.css?v=<?=microtime(true);?>" />
</head>

<body id="body">