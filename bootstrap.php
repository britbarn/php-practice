<?php

require 'Database/Connection.php';
require 'Database/QueryBuilder.php';

//include the new config file and set it to a variable for use
$config = require 'config.php';


//create new query builder using the new database array
return new QueryBuilder(Connection::make($config['database']));
