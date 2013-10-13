<?php

  require_once './include/database.php';

    // Check the rest
    if (empty($_POST['task'])  || empty($_POST['prio']) ||
        empty($_POST['date']) || empty($_POST['status']) )
    {
        die("Input validation failed");
    }

    // Fill POST infos into key-value store
    $entry = array(
		'id'       => $_POST['id'],
        'task'     => htmlspecialchars($_POST['task']),
        'tag'      => htmlspecialchars($_POST['tag']),
        'prio'     => htmlspecialchars($_POST['prio']),
        'date'     => htmlspecialchars($_POST['date']),
		'status'   => htmlspecialchars($_POST['status']),
    );

	print_r($entry);
	
    // Create database connection
    $db = connect();

    // Update task
	$sql = "UPDATE tasks 
	SET 
		tasks.name   = :task,
		tasks.tag    = :tag,
		tasks.date   = :date,
		tasks.prio 	 = (select id from prios where name = :prio),
		tasks.status = (select id from status where name = :status)
	WHERE tasks.id   = :id";
			
    $q = $db->prepare($sql);

	print $sql;
    $q->execute(array(':task'   => $entry['task'], 
                         ':prio'   => $entry['prio'],
                         ':tag'    => $entry['tag'],
                         ':date'   => $entry['date'],
                         ':status' => $entry['status'],
						 ':id' => $entry['id'],
                       ));

    header("Location: ./index.php");

?>