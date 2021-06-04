<?php
echo "<!-- STACK-OVERFLOW START-->";
require "sql-login.inc.php";

//Connect
$conn=  new mysqli($sql_host, $sql_user, $sql_pass, $sql_db);

//Check connection
if($conn->connect_error)
  die("connect error 2831: ". $conn->connect_error);

  if(isset($_POST["upvote"])){ //grabs id number for which re we want to add a vote to.
  echo "<!--upvote set.-->\n";
    $upvote= makeSafer($_POST["upvote"]);
    if(is_numeric($upvote)){
      echo "<!--upvote is an num: ". $upvote. "-->\n";
      //FIXME: add ifstatement to check if value is within range
      //FIXME: prepare statement
      $sql=     "UPDATE votesup SET votesup= votesup+ 1 WHERE id = ". $upvote. " FROM Bands";
      //$sql=     "UPDATE votesup SET votesup= votesup+ 1 WHERE id = ". $row["id"]. " FROM Bands";
      $conn->query($sql);
    }
  }


$conn->close();
echo "<!-- STACK-OVERFLOW END-->";
