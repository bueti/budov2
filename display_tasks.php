<?php
include 'include/database.php';

function getTasks() {
  // initializ tasks array
  $tasks = array();

  // Create database connection
  $db = connect();

  // Store all tasks
  $stmt = $db->query('
    SELECT 
        tasks.id as tid, 
        tasks.name as tname, 
		tasks.date, tasks.tag, 
		prios.name as pname, 
		status.name as sname 
    FROM tasks 
    LEFT JOIN (status, prios) ON ( status.id = tasks.status AND prios.id=tasks.prio)');

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $tasks[] = $row;
  }
  
  return $tasks;
}

function showTasks() {
  $tasks = getTasks();

  foreach($tasks as &$task) {
    print "<a href=\"./edit_task.php?id=" . $task['tid'] . "\">";
    print "<tr>";
    print "<td><a href=\"./edit_task.php?id=" . $task['tid'] . "\">" . $task['tname'] . "</a></td><td>" . $task['pname'] . "</td><td>" . $task['date'] . "</td><td>" . $task['tag'] . "</td><td>" . $task['sname'] . "</td>";
    print "</tr>";
    print "</a>";
  }
}

?>