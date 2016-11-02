<?php
// Update data
$bulk = new MongoDB\Driver\BulkWrite;
$bulk->update(
	['x' => 2],
	['$set' => ['name' => 'Runoob Tools', 'url' => 'tool.runoob.com']],
	['multi' => false, 'upsert' => false]
);
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);
$result = $manager->executeBulkWrite('test.sites', $bulk, $writeConcern);
?>