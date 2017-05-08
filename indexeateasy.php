<?php
  echo 'Hello eateasy!';

  // connect to mongodb
   $m = new MongoClient("mongodb://krit:<PASSWORD>@cluster0-shard-00-00-ebb3m.mongodb.net:27017,cluster0-shard-00-01-ebb3m.mongodb.net:27017,cluster0-shard-00-02-ebb3m.mongodb.net:27017/<DATABASE>?ssl=true&replicaSet=Cluster0-shard-0&authSource=admin");
	
   echo "Connection to database successfully";
   // select a database
   $db = $m->mydb;
   $collection = $db->createCollection("eateasy");
	
   echo "Database mydb selected";
