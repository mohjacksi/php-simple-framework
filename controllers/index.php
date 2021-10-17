<?php

// using query builder we can make sql queries from databse
$tasks = $app['database']->selectAll('todos');

require ('views/index.view.php');

