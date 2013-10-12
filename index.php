<?php 
  include 'display_tasks.php';
  include 'display_prios.php';
?>
<doctype html>
<html>
	<head>
		<title>BuDo - Task Manager</title>
	    <meta charset="utf-8">

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="//code.jquery.com/jquery.js"></script>

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
		          <li class="active"><a href="#">Home</a></li>
		          <li><a href="./about.html">About</a></li>
		          <li><a href="./contact.html">Contact</a></li>
		        </ul>
		    </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">
      	<div class="row">
      		<!-- Add Panel -->
      		<div class="col-md-4">
	      		<div class="panel panel-default">
	      			<div class="panel-heading">
	      				<h3 class="panel-title">Add a task</h3>
	        		</div>
	        		<div class="panel-body">
			          	<form role="form" enctype="multipart/form-data" action="store_task.php" method="POST">
			            	<div class="form-group">
			                	<label for="taskInput">Task:</label>
			                	<input type="text" class="form-control" placeholder="Task" name="task">

				                <label for="prioInput">Priority:</label>  
                                    <select class="form-control" id="formPrio" name="prio">
                                        <?php addPrios(); ?>
				                	</select>

				                <label for="dateInput">Date:</label>  
		  	                    <input type="text" class="form-control" id="datepicker" placeholder="Date..." name="date">  

				                <label for="tagInput">Tag:</label>  
			                    <input type="text" class="form-control" placeholder="#Tag" id="formTag" name="tag">  
				            </div>
			            	<button type="button submit" class="btn btn-default" id="saveBtn">Store it!</button> 
			          	</form>
	              	</div>
	      		</div>
      		</div> <!-- add panel end -->
      		<!-- Task Panel -->
      		<div class="col-md-8">
	      		<div class="panel panel-default">
	      			<div class="panel-heading">
	      				<h3 class="panel-title">All tasks</h3>
	        		</div>
	        		<div class="panel-body">
	        			<table class="table table-hover">
	        				<thead>	
	        					<tr>
	        						<th>Task</th><th>Priority</th><th>Date</th><th>Tag</th><th>Status</th>
	        					</tr>
	        				</thead>
                            <tbody>
                              <?php showTasks(); ?>
	        				</tbody>
                        </table>
                        Hint: Click on a task to edit!
	        		</div>
	        	</div>
	        </div> <!-- task panel end -->
  		</div> <!-- row end -->
  	</div> <!-- container end -->

	</body>
</html>
