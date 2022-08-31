<?php 
	$site_config = DB::table('konfigurasi')->first();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>
	{{ $title }}
	</title>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />  
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">  
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('assets/css/creative-tim/material-dashboard.css?v=2.1.1') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/creative-tim/color-generator-biru-dpmptsp.css') }}" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<!--<link href="assets/css/demo.css" rel="stylesheet" /> -->

  	<style>
		.carousel-control-prev-icon,
		.carousel-control-next-icon {
		  height: 100px;
		  width: 100px;
		  outline: black;
		  background-size: 100%, 100%;
		  border-radius: 50%;
		  background-image: none;
		}
		
		.carousel-control-prev-icon {
			background-image: url("./assets/img/icon/iconfinder_Arrow_arrows_icon-94_4559306.png");
			background-size: 25px 25px;
		}

		.carousel-control-next-icon {
			background-image: url("./assets/img/icon/iconfinder_Arrow_arrows_icon-93_4559307.png");
			background-size: 25px 25px;
		}
		
		.carousel-indicators li {
			display: inline-block;
			width: 12px;
			height: 12px;
			margin: 5px;
			text-indent: 0;
			cursor: pointer;
			border: none;
			border-radius: 50%;
			background-color: #0000ff;
			box-shadow: inset 1px 1px 1px 1px rgba(0,0,0,0.5);    
		}
		.carousel-indicators .active {
			width: 12px;
			height: 12px;
			margin: 5px;
			background-color: #ffff99;
		}
  	</style>
</head>