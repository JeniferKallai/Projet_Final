<?php
/**
 
 *demonstration class14.php
 *Insert and Select data from MySQL using MySQLi
 */
session_start();
  require_once("help.php");
  if(!isset($_SESSION['userName'])){
    $affUserName = null;
    $affPassword = null;
    $message = null;
  }else{
    
    $affUserName = $_SESSION['userName'];
    $affPassword = $_SESSION['password'];
  }


?>
<!DOCTYPE html>
<html>

<head>
  <title>Question</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <h1 class="blueText">Modification form Form</h1>
    <hr>
    <!--Form-->
    <?php
    if(isset($_SESSION['message'])){
      
      $message=$_SESSION['message'];
      
      session_destroy();
      echo"<h1 class=\"blueText\"> $message </h1>";
    
    }
    ?>
    <form id="form1" method="post" action="modification.php">
      <table>
        <tr>
          <th><label for=input1>userName</label></th>
          <td><input id=input1 type="text" name="username" value="<?php echo trim($affUserName) ?> " required="required"></td>
        </tr>
        <tr>
          <th><label for=input2>nouveau password</label></th>
          <td><input id=input2 type="text" name="newPassword"  value="<?php echo trim($affPassword) ?>" required="required"></td>
        </tr>
        <tr>
          <th><label for=input3>confirmer password</label></th>
          <td><input id=input3 type="text" name="confirmPassword" required="required"></td>
        </tr>
        <tr class="submit">
          <td></td>
          <td><input id="submit1" type="submit" name="send" value="SEND" /></td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>