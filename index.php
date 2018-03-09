<?php
include("inc/functions.php");
$conn = connectToDB();

// define variables and set to empty values
$firstnameerror = "";
$lastnameerror = "";
$emailErr = "";
$websiteErr = "";
$commentErr = "";
$messageTitleErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameerror = "First name is required";
  }
  if (empty($_POST["lastname"])) {
     $lastnameerror = "Last name is required";
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }

  if (empty($_POST["website"])) {
    $websiteErr = "";
  }

  if (empty($_POST["comment"])) {
    $commentErr = "Required field";
  }

  if (empty($_POST["messageTitle"])) {
    $messageTitleErr = "Please enter the title..";
  }
  else {
    if(isset($_POST['mySubmit']))
    {
      $firstName    = $_POST['firstname'];
      $Insertion    = $_POST['Insertion'];
      $lastName     = $_POST['lastname'];
      $messageTitle = $_POST['messageTitle'];
      $comment      = $_POST['comment'];
      $email        = $_POST['email'];
      $website      = $_POST['website'];
      $datetime=date("y-m-d h:i:s"); //date time

      $sql="INSERT INTO `guestbook` (firstName,Insertion,lastName,comment,email,website, datetime,messageTitle) VALUES ('$firstName','$Insertion', '$lastName','$comment', '$email','$website', '$datetime','$messageTitle')";

      $result = $conn->query($sql) or die($conn->error);
      if($result){
      echo "Thanks for posting";
      echo "<BR>";
      }

    }
  }
}

?>
<html>
  <head>
    <title>
    My GuestBook
    </title>
    <meta charset="utf-8">
    <meta name="description" content="GuestBook">
    <meta name="author" content="Umair Saeed">
    <meta name="keywords" content="HTML,CSS,SQL,PHP">
    <meta name="copyright" content="ROC Ter AA">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <form action="index.php" method="POST">
      <table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
        <tr>
          <td><div id="title"><h3><a href="index.php">Guestbook </h3></div></td>
        </tr>

      </table>
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <tr>
        <td>
          <table width="700" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
            <tr>
              <td width="120">First Name</td>
              <td width="14">:</td>
              <td width="357"><input name="firstname" type="text"  size="40" /><span class="error">* <?php echo $firstnameerror;?></span></td>
            </tr>
            <tr>
              <td width="120">Insertion</td>
              <td width="14">:</td>
              <td width="357"><input name="Insertion" type="text"  size="40" /></td>
            </tr>
            <tr>
              <td width="117">Last Name</td>
              <td width="14">:</td>
              <td width="357"><input name="lastname" type="text" size="40" /><span class="error">* <?php echo $lastnameerror;?></span></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td><input name="email" type="text" id="email" size="40" /><span class="error">* <?php echo $emailErr;?></span></td>
            </tr>
            <tr>
              <td>Website</td>
              <td>:</td>
              <td><input name="website" type="text" id="website" size="40" /></td>
            </tr>
            <tr>
              <td>Message Title</td>
              <td>:</td>
              <td><input name="messageTitle" type="text" id="messageTitle" size="40" /><span class="error">* <?php echo $messageTitleErr;?></span></td>
            </tr>
            <tr>
              <td valign="top">Comment</td>
              <td valign="top">:</td>
              <td><textarea name="comment" cols="40" rows="3" id="comment"></textarea><span class="error">* <?php echo $commentErr;?></span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><input id="buttonSubmit" type="submit" name="mySubmit" value="Submit" />
              <input id="buttonReset" type="reset" name="Reset" value="Reset" /><div class="about"><a href="about.php">About Us</a> </td></div>
            </tr>

        </table>

      </td>
    </form>
    </tr>
    </table>

    <h2>Recent Reviews</h2>
    <div id="table-container">
    <?php

    $sql = "SELECT firstName, lastName, email, Insertion, comment, website, messageTitle, datetime FROM guestbook";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table id='table'><tr><th>First Name</th><th>Insertion</th><th>Last Name</th><th>Email</th><th>Message Title</th><th>Comment</th><th>Website</th><th>Date/Time</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["firstName"]."</td><td>".$row["Insertion"]."</td><td> ".$row["lastName"]."</td><td> ".$row["email"]."</td><td> ".$row["messageTitle"]."</td><td> ".$row["comment"]."</td><td> ".$row["website"]."</td><td> ".$row["datetime"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
     ?>
     </div>
    <div id="footer">
    <p>Made by Umair Saeed    |     ROC Ter AA     | © 2018</p>
    </div>
  </body>
</html>
