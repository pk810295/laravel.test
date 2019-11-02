var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/newdb";

MongoClient.connect(url, function(err, db) {
  if (err) throw err;
  console.log("Database created!");
  //var dbs=db.db('emp');
  db.close();
});