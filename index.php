<?php

//first, include the task class
require 'functions.php';
// require 'task.php';

//use function defined to connect to the db
$pdo = connectToDb();

//pass database connection to the task selection function
$tasks = selectAllTasks($pdo);

//call the view to display values
require 'index.view.php';
