<?php
// Create collection
$m = new MongoClient(); // Connect to default: mongodb://localhost:27017
$db = $m->test; // Select database `test`
$collection = $db->createCollection("runoob");
echo "Create collection successfully";
?>