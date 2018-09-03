<?php

//import the task class so it can be used to store data
require 'task.php';

function connectToDb(){
    try {

        return new PDO('mysql:host=127.0.0.1;dbname=mytodos','root','');

    } catch (PDOException $e) {

        die($e->getMessage());
    }

}

function dd($data){

    die(var_dump($data));

}

function selectAllTasks($pdo) {

    $statement = $pdo->prepare('select * from todos');
    $statement->execute();

    //pipe the query results into a class called task
    return $statement->fetchAll(PDO::FETCH_CLASS, 'task');
}
