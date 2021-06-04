<?php
//MySQLiOO
//login details
require "../inc/sql-login.inc.php";

//create connection
require "../inc/sql-connect.inc.php";

//sql to create table
$sql= "CREATE TABLE Bands(
  id          INT(6)  UNSIGNED
              AUTO_INCREMENT PRIMARY KEY,
  name        VARCHAR(30),
  votesup     INT(6) DEFAULT 0,
  votesdown   INT(6) DEFAULT 0,
  submit_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
              ON UPDATE CURRENT_TIMESTAMP)"; //FIXED, but not tested: votesup/votesdown should have a default value of 0

if($conn->query($sql)=== TRUE){
  echo "sql executed successfully: ". $sql;
}
else{
  echo "error executing sql: ". $conn->error. "<br>";
  echo "make sure inc/sql-login.inc.php is set up properly.<br>";
}
echo "\n";s
echo "<!--create-table.php-->\n";


//FIXME: add statement that checks if TABLE exist and not run it it does.
