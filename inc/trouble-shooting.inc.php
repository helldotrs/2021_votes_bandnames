<?php

/*
//MySQLiOO
//login details
require "sql-login.inc.php";

//create connection
require "sql-connect.inc.php";

//sql to create table
$sql= "CREATE TABLE Bands(SELECT * FROM `bands` ORDER BY `id` ASC)"; //FIX ME: votesup/votesdown should have a default value of 0

if($conn->query($sql)=== TRUE){
  echo "sql executed successfully:<br> ". $sql;
}
else{
  echo "error executing sql: ". $conn->error;
}
echo "<!--create-table.php-->\n";
*/
/*echo "<form action='#' method='post'>
<input type='hidden'      name='upvote' value='3'>
            <input type='submit' value='upvote'>
</form>";

if(isset($_POST["upvote"])){
  echo "upvote set.<br>";
  $upvote= makeSafer($_POST["upvote"]);
    if(is_numeric($upvote)){
      echo "upvote is an num: ". $upvote. "<br>";
    }
}*/


/*
if(isset($_GET["downvote"])){
  echo "GET downvote found";
  echo $_GET["downvote"];
}
else{
  echo "GET downvote not found";
}*/







/*
Simple. You've two choices:
1. Check if there's ANY post data at all
//Note: This resolves as true even if all $_POST values are empty strings
if (!empty($_POST))
{
    // handle post data
    $fromPerson = '+from%3A'.$_POST['fromPerson'];
    echo $fromPerson;
}
(OR)
2. Only check if a PARTICULAR Key is available in post data
if (isset($_POST['fromPerson']) )
{
    $fromPerson = '+from%3A'.$_POST['fromPerson'];
    echo $fromPerson;
}
*/

echo "<!--trouble-shooting.inc.php-->\n";
