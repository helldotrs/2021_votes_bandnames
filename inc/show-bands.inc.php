<?php
require "sql-login.inc.php";
include "./html/table-head.html";

require "sql-login.inc.php";
require "sql-connect.inc.php";

$sql=     "SELECT id, name, votesup, votesdown FROM Bands";
$result=  $conn->query($sql);

if($result->num_rows> 0){
  //output data for each row
  while($row= $result->fetch_assoc()){
    echo'
      <tr>
        <td class="tg-0lax">'. $row["name"].                        '</td>

        <td class="tg-0lax">'. $row["votesup"]- $row["votesdown"].  '</td>

        <td class="tg-0lax">';
    echo "
      <form action='#' method='post'>
        <input type='hidden'      name='upvote' value='". $row["id"]. "'>
        <input type='submit' value='upvote'>
      </form>";
    echo' </td>

        <td class="tg-0lax">';
    echo "
      <form action='#' method='post'>
        <input type='hidden'      name='downvote' value='". $row["id"]. "'>
        <input type='submit' value='downvote'>
      </form>";
    echo' </td>
      </tr>';
  }
}

$conn->close();



include "./html/table-foot.html";

echo "<!--show-bands.inc.php-->\n";
