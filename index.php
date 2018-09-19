<?php

//call boostrap class and assign results to a variable
$query = require 'bootstrap.php';
require 'Task.php';

//use the returned querybuilder to get all the todos
$tasks = $query->selectAll('todos', 'task');

//call the view to display values
require 'index.view.php';
