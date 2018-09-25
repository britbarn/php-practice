<?php

$app = [];

//set the array in config.php to the config key in app array
$app['config'] = require 'config.php';

//pull in all of the core files
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

//for the database key in the app array, set it's value as
//the static method database connection
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
