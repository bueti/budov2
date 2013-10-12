<?php
include 'include/database.php';

function getTasks() {
  // initializ tasks array
  $tasks = array();

  // Create database connection
  $db = connect();

  // Store all tasks
  $stmt = $db->query('SELECT tasks.name as tname,tag,date,prios.name as pname FROM budo_1.tasks, budo_1.prios WHERE tasks.prio = prios.id');

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $tasks[] = $row;
  }
  
  return $tasks;
}

function showTasks() {
  $tasks = getTasks();

  foreach($tasks as &$task) {
    print "<tr>";
    print "<td>" . $task['tname'] . "</td><td>" . $task['pname'] . "</td><td>" . $task['date'] . "</td><td>" . $task['tag'] . "</td>";
    print "</tr>";
  }
}

?>
