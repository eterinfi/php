<?php
// Secure connection and select a database
$m = new MongoClient(); // Connect to default: mongodb://localhost:27017
$db = $m->test; // Select database `test`
?>