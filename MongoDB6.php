<?php
// Delete data
$bulk = new MongoDB\Driver\BulkWrite;
$bulk->delete(['x' => 1], ['limit' => 1]); //Delete first match
$bulk->delete(['x' => 2], ['limit' => 0]); //Delete all matches
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);
$result = $manager->executeBulkWrite('test.sites', $bulk, $writeConcern);
?>