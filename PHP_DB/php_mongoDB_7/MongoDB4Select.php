<?php
// Select data
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

// Insert data
$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x'=>1, 'name'=>'Runoob Tutorial', 'url'=>'http://www.runoob.com']);
$bulk->insert(['x'=>2, 'name'=>'Google', 'url'=>'http://www.google.com']);
$bulk->insert(['x'=>3, 'name'=>'taobao', 'url'=>'http://www.taobao.com']);
$manager->executeBulkWrite('test.sites', $bulk);

// Inquire data
$filter = ['x' => ['$gt' => 1]];
$options = ['projection' => ['_id' => 0], 'sort' => ['x' => -1]];
$query = new MongoDB\Driver\Query($filter, $options);
$cursor = $manager->executeQuery('test.sites', $query);
foreach ($cursor as $document) {
	print_r($document);
}
?>