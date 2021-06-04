<?php

require "./html/form.html";
//require "make-safer.inc.php"; //required in index

//just for fun:
//function makeSafe($n){return trim(stripslashes(htmlspecialchars($n)));}

if(isset($_POST["band"]) AND isset($_POST["password"])){ //is it an issue that this is tested before the data is sanetized??

  $in_band= makeSafer($_POST["band"]);
  $in_pass= makeSafer($_POST["password"]);

  if( $in_pass=== "kek"){

    require "sql-connect.inc.php";

    ////////should this be in a seperate file/in a class?
    //FIXME perpare statement
    $sql= "
      INSERT INTO Bands (name,                votesup,  votesdown )
      VALUES            ('". $in_band . "' ,  0,        0         )
    ";//FIXED tables created after 2021 april 19 will have default value set for votesup and votesdonw
    //should do '". $name_value_for_sql_var. "' or ". $name_value_for_sql_var. "???

    if($conn->query($sql)=== TRUE){
      echo "band added to db!";
    }
    else{
      echo "error 7123: ". "<br>". $conn->error;
    }

    $conn->close();
    ////////
  }else{
    echo "message 8217: no valid password.";
  }
}
else{
  echo "<!--";
  echo "message 3280: failed isset test.-->\n";
}
echo "<!--add-band.inc.php-->\n";
