<?php
/**
 *demonstration class14.php
 *Insert and Select data from MySQL using MySQLi
 */
?>
<!DOCTYPE html>
<html>

<head>
  <title>Question</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <h1 class="blueText">Registration Form</h1>
    <hr>
    <!--Form-->
    <form id="form1" method="post" action="registration.php">
      <table>
        <tr>
          <th><label for=input1>prenom</label></th>
          <td><input id=input1 type="text" name="prenom" required="required"></td>
        </tr>
        <tr>
          <th><label for=input2>nom</label></th>
          <td><input id=input2 type="text" name="nom" required="required"></td>
        </tr>
        <tr>
          <th><label for=input2>username</label></th>
          <td><input id=input2 type="text" name="username" required="required"></td>
        </tr>
        <tr>
          <th><label for=input2>mot de passe</label></th>
          <td><input id=input2 type="text" name="motdepasse" required="required"></td>
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