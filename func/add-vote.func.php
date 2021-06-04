<?php
function addVote($int, $str): void{

  //check if upvote or downvote
  if($str=== "up")
    $int= makeSaferInt($_POST["upvote"]); //call function in make-safer.inc.php, requried in index
  elseif($str=== "down")
    $int= makeSaferInt($_POST["downvote"]);
  else
    die("error: 3207");

  require "./inc/sql-login.inc.php"; //login details
  require "./inc/sql-connect.inc.php"; //creates $conn

  if(is_numeric($int)){
    echo "<!--addVote()->int; is a num: ". $int. "-->\n";

    //FIXME: add ifstatement to check if value is within range

    //start perpare
    if($str=== "up"){
      $stmt=    $conn->prepare("UPDATE  Bands
                                SET     votesup= votesup+ 1
                                WHERE   id =     ?
                                ");
    }
    else if($str=== "down"){
      $stmt=    $conn->prepare("UPDATE  Bands
                                SET     votesdown= votesdown+ 1
                                WHERE   id =       ?
                                ");
    }
    else
      die("error: 3782<!-- in add-vote.func.php-->\n");
    //FIXME: should be an else if and an error in else



    $stmt->bind_param("i", $int);
    //end prepare

    //$upvote=  $upvote; //redundant, left to make more readable
    $stmt->   execute();

    echo "Vote added!<br><br>";
    return;
  }
}
echo "<!--add-vote.func.php-->\n";
