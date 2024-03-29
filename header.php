<?php

function render_header() {
print '<doctype html>
<html>
	<head>
		<title>BuDo - Task Manager</title>
	    <meta charset="utf-8">

		<!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
    	<script src="//code.jquery.com/jquery.js"></script>
        <script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

        <!-- Include Twitter Bootstrap -->
	    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

	 	<style>
	      body {
	        padding-top: 60px;  60px to make the container go all the way to the bottom of the topbar 
	      }
        </style>
      
        <!-- Datepicker -->  
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script>
          $(function() {
            $( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
          });
      </script>      
    </head>

	<body>
	<!-- Navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
        	<div class="navbar-header">
          		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           		<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          		</button>
          		<a class="navbar-brand" href="#">BuDo2 - Taskmanager</a>
          	</div>

		    <div class="navbar-collapse collapse">
		        <ul class="nav navbar-nav">
		          <li class="active"><a href="./index.php">Home</a></li>
		        </ul>
		    </div><!--/.nav-collapse -->
        </div>
    </div>
    ';
}
?>
