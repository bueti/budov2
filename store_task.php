<?php

  include './include/database.php';

    // Check the rest
    if (empty($_POST['task'])  || empty($_POST['prio']) ||
        empty($_POST['date'])  || empty($_POST['tag']) )
    {
        die("Input validation failed");
    }

    // Fill POST infos into key-value store
    $entry = array(
        'task'     => htmlspecialchars($_POST['task']),
        'tag'      => htmlspecialchars($_POST['tag']),
        'prio'     => htmlspecialchars($_POST['prio']),
        'date'     => htmlspecialchars($_POST['date']),
    );

    // Create database connection
    $db = connect();

    // Insert task
    $sql = "INSERT INTO budo_1.tasks SELECT NULL, :task, :tag, :date, id, :status 
      FROM prios WHERE name = :prio";
    $q = $db->prepare($sql);
    $q->execute(array(':task'   => $entry['task'], 
                      ':prio'   => $entry['prio'],
                      ':tag'    => $entry['tag'],
                      ':date'   => $entry['date'],
                      ':status' => 1,
                    ));

    header("Location: ./index.php");

?>
