<?php
// Insert document
$m = new MongoClient(); // Connect to default: mongodb://localhost:27017
$db = $m->test; // Select database `test`
$collection = $db->runoob; // Select collection `runoob`
$document = array(
	"title" => "MongoDB",
	"description" => "database",
	"likes" => 100,
	"url" => "http://www.runoob.com/mongodb/",
	"by" => "Runoob Tutorial"
);
$collection->insert($document);
echo "Insert document successfully";
?>