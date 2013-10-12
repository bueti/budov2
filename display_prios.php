<?php
  
function getPrios() {
  // initializ tasks array
  $prios = array();

  // Create database connection
  $db = connect();

  // Store all tasks
  $stmt = $db->query('SELECT name FROM budo_1.prios');

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $prios[] = $row;
  }
  
  return $prios;
}

function addPrios() {
  $prios = getPrios();
  foreach($prios as &$prio) {
    print "<option>" . $prio['name'] . "</option>";
  }
}
?>
