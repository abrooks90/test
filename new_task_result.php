<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KSU Student Services | New Task</title>
    <link rel="stylesheet" type="text/css" href="registration_styles.css" media="screen">
</head>
<body>
    <header>
	    <h1>KSU Student Services</h1>
    </header>
    <div id="wrapper">
    <nav id="navigation">
        <ul>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="services.php">Search Services</a></li>
            <li><a href="new_task.php">New Task</a></li>
        </ul>
    </nav>
    <h3>New Task Result</h3>
    <div id="results">
    <?php
        include 'menu.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['netID'] || !empty($_POST['taskDescription']))) {
                $netID = $_POST['netID'];
                $taskDescription = $_POST['taskDescription'];
                $serviceSelected = $_POST['service_select'];
                $assignedUser = $_POST['assign_user'];
                $deadline = $_POST['taskDeadline'];
                // Code to insert above into TASKS DB
            }
        } else {
            # code...
        }
        
    ?>
    </div>
    </div>
</body>
</html>