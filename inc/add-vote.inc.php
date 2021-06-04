<?php
//require "make-safer.inc.php"; //required in index
//require "./func/add-vote.func.php"; //required in index

if(isset($_POST["upvote"]) OR isset($_POST["downvote"])){

require "sql-login.inc.php";
require "sql-connect.inc.php";

if(isset($_POST["upvote"])){
  addVote($_POST["upvote"], "up");
}
else if(isset($_POST["downvote"])){
  addVote($_POST["downvote"], "down");
}

$conn->close();

}
echo "<!--add-vote.inc.php-->\n";





































/*
  if(isset($_POST["upvote"])){
    echo "<!--upvote set.-->\n";

    $upvote= makeSaferInt($_POST["upvote"]); //call function in make-safer.inc.php

    if(is_numeric($upvote)){
      echo "<!--upvote is a num: ". $upvote. "-->\n";

      //FIXME: add ifstatement to check if value is within range
      //FIXME:
      //FIXED: prepare statement

      //start perpare
      $stmt=    $conn->prepare("UPDATE  Bands
                                SET     votesup= votesup+ 1
                                WHERE   id = ?
                                ");
                                //WHERE   id = (upvote)
                                //VALUES  (?)

      $stmt->bind_param("i", $upvote);

      $upvote=  $upvote; //redundant, left to make more readable
      $stmt->   execute();
      $stmt->   close();
      //end prepare

      echo "<!--8321-->\n";

    }
  }
  else if(isset($_POST["downvote"])){
    echo "<!--downvote is set.-->\n";

    $downvote=  makeSaferInt($_POST["downvote"]);

    if(if_numric($downvote)){
      echo "<!--downvote is a num:". $downvote. "-->\n";

      //FIXME: add ifstatement to check if within range
    }
  }*/

  /*
  if (isset($_POST["downvote"])) {
    echo "<!--downvote is set.-->\n";
    $downvote= makeSafer($_POST["downvote"]);
    if (is_numeric($downvote)) {
    echo "<!--upvote is a num: ". $downvote. "-->\n";

    //FIXME: add ifstatement to check if value is within range
    //FIXME:
    //FIXME: prepare statement

    //$sql=      "UPDATE Bands SET votesdown= votesdown+  1 WHERE id=". $downvote. "";
    //$result=  $conn->query($sql);

    }
  }*/
