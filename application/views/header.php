<!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>LocateMob | Home</title>

	    <!-- Bootstrap core CSS -->
	    <link href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href=<?php echo base_url() . "public/dist/semantic.css"; ?>>
		<link rel="stylesheet" href=<?php echo base_url() . "public/dist/homepage.css"; ?>>
		<style>
			html {
				min-height: 500px;
				padding-top: 80px;
			}
			
			.color_nav{
				background-color : #212121;
			}
			
		</style>
	    <!-- Font Awesome -->
	    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  	</head>

	<body id="home">

	    <!-- Fixed navbar -->
		<div class="color_nav navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
			    <div class="navbar-header">
			       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			          	<span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			        <a class="navbar-brand" href=""><i class="fa fa-globe fa-lg"></i> LocateMob</a>
			    </div>  
				
			    <div class="collapse navbar-collapse">
			    	<ul class="nav navbar-nav">
						
						<li><a href="<?php echo base_url();?>"><i class="fa fa-home fa-lg"></i> Home</a></li>
						<li><a href="<?php echo base_url();?>"><i class="fa fa-map-marker fa-lg"></i> Demo</a></li>
						<li><a href="<?php echo base_url();?>"><i class="fa fa-user fa-lg"></i> About Us</a></li>
						<li><a href="<?php echo base_url();?>"><i class="fa fa-envelope-o fa-lg"></i> Contact Us</a></li>
						
					</ul>			    	
			    </div><!--/.nav-collapse -->

			</div>
		</div>	

    	<!-- Container -->
		<div class="container">