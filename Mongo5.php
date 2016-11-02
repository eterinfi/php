<?php
// Update document
$m = new MongoClient(); // Connect to default: mongodb://localhost:27017
$db = $m->test; // Select database `test`
$collection = $db->runoob; // Select collection `runoob`
$collection->update(array("title"=>"MongoDB"), array('$set'=>array("title"=>"MongoDB Tutorial"))); // Update document
$cursor = $collection->find();
// Iterate to display document titles
foreach ($cursor as $document) {
	echo $document["title"] . "\n";
}
?>