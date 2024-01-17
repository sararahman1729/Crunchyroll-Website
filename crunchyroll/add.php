<?php
// server connection
$servername = "localhost";
$username = "root";
// their is no password in default
$password = "1729";
// our database name
$dbname = "crunchyroll";
  // got input from html using '$_POST[]'
  $aid = $_POST["aid"];
  $title = $_POST["title"];
  $author = $_POST["author"];
 
  $episodes = $_POST["episodes"];
  
  $Summary = $_POST["Summary"];
  $publisher = $_POST["publisher"];
  // sql connection
     if($aid == "" || $title == "" || $author == "" || $episodes == "" || $Summary == "" || $publisher == ""){
         die("Please enter the feilds!");
     }
  // lets check its connected
  $conn = new mysqli($servername, $username, $password,$dbname);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  // in php we use '.' operator for string concatenation!
  // store sql query in variable
  // we set id as auto increment so set it as empty
  $sql = "insert into anime(aid,title,author,episodes,Summary,publisher) values('','".$title."', '".$author."', '".$episodes."', '".$Summary."' , '".$publisher."')";
  // query execution
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>