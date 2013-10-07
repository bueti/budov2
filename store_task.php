<?php
print_r($_POST);

	// Check the rest
    if (empty($_POST['task'])  || empty($_POST['prio']) ||
        empty($_POST['date'])  || empty($_POST['tag']) )
    {
        die("Input validation failed");
    }

    // Fill POST infos into key-value store
    $entry = array(
        'task'     => htmlspecialchars($_POST['task']),
        'tag'    => htmlspecialchars($_POST['tag']),
        'prio'     => htmlspecialchars($_POST['prio']),
        'date'     => htmlspecialchars($_POST['date']),
    );

    print_r($entry);

    // Create database connection
    $db = new PDO('mysql:host=localhost;dbname=budo_1;charset=utf8', 'budo', 'supergeheim');

    // Insert task
    $sql = "INSERT INTO budo_1.tasks (name, prio) VALUES (:task, :prio)";
    $q = $db->prepare($sql);
    $q->execute(array(':task'=>$entry['task'], ':prio'=>"3"));



    // READ
	$stmt = $db->query('SELECT tasks.name as tname,tag,date,prios.name FROM budo_1.tasks, budo_1.prios WHERE tasks.prio = prios.id');

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    	echo $row['tname'].' '.$row['name']. "\n"; //etc...
	}
?>