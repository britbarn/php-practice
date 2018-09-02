<?php

//first, include the task class
require 'functions.php';
require 'task.php';


//instantiate three new class objects
$tasks = [
    new task('Go to Costco'),
    new task('Eat lunch'),
    new task('pack')
];

//call the view to display values
require 'index.view.php';
