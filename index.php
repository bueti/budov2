<?php 
  include 'display_tasks.php';
  include 'display_prios.php';
  include 'header.php';
  include 'footer.php';

  render_header();
?>
    
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

<?php
  render_footer();
?>
