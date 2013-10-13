<?php
  
function getStati() {
  // initializ tasks array
  $stati = array();

  // Create database connection
  $db = connect();

  // Store all tasks
  $stmt = $db->query('SELECT name FROM budo_1.status');

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $stati[] = $row;
  }
  
  return $stati;
}

function addStatus($selected) {
  $stati = getStati();
  foreach($stati as &$status) {
	if($status['name'] == $selected) {
    	print "<option selected>" . $status['name'] . "</option>";
	} else {
		print "<option>" . $status['name'] . "</option>";
	}
  }
}
?>
