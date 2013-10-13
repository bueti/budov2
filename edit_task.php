<?php

	require_once './include/database.php';
	include './display_tasks.php';
	include './display_prios.php';
	include './display_status.php';
	include 'header.php';
  	include 'footer.php';

  	render_header();

    // Check the rest
    if (empty($_GET['id'])) {
        die("Input validation failed");
    }

    // Fill POST infos into key-value store
    $id = $_GET['id'];

	// Create database connection
	$db = connect();

	// Get task
	$task = getTask($id);
	
	// Display task
?>
	<div class="container">
      	<div class="row">
      		<!-- Add Panel -->
      		<div class="col-md-4">
	      		<div class="panel panel-default">
	      			<div class="panel-heading">
	      				<h3 class="panel-title">Edit a task</h3>
	        		</div>
	        		<div class="panel-body">
			          	<form role="form" enctype="multipart/form-data" action="update_task.php" method="POST">
			            	<div class="form-group">
			                	<label for="taskInput">Task:</label>
			                	<input type="text" class="form-control" placeholder="Task" name="task" value="<?php print $task['tname']; ?>" />

				                <label for="prioInput">Priority:</label>  
                                    <select class="form-control" id="formPrio" name="prio">
                                        <?php addPrios($task['pname']); ?>
				                	</select>

				                <label for="dateInput">Date:</label>  
		  	                    <input type="text" class="form-control" id="datepicker" placeholder="Date..." name="date" value="<?php print $task['date']; ?>" />   

				                <label for="tagInput">Tag:</label>  
			                    <input type="text" class="form-control" placeholder="#Tag" id="formTag" name="tag" value="<?php print $task['tag']?>" /> 
			
								<label for="statusInput">Status:</label>  
			                    <select class="form-control" id="formStatus" name="status">
                                    <?php addStatus($task['sname']); ?>
			                	</select> 
			
								<label>
								      <input type="checkbox" name="delete"> Delete me?
								</label> 
								<input type="hidden" name="id" value="<?php print $id; ?>">
				            </div>
			            	<button type="button submit" class="btn btn-default" id="saveBtn">Update it!</button> 
			          	</form>
	              	</div>
	      		</div>
      		</div>
		</div>
<?php 
	render_footer();
?>
