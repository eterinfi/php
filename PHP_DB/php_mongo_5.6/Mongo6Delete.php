<?php
// Delete document
$m = new MongoClient(); // Connect to default: mongodb://localhost:27017
$db = $m->test; // Select database `test`
$collection = $db->runoob; // Select collection `runoob`
$collection->remove(array("title"=>"MongoDB Tutorial"), array("justOne"=>true));
$cursor = $collection->find();
// Iterate to display document titles
foreach ($cursor as $document) {
	echo $document["title"] . "\n";
}
?>