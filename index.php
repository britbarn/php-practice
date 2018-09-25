<?php
require 'core/bootstrap.php';

//pull in the router class to load the attempted uri
require Router::load('routes.php')->direct(Request::uri());
