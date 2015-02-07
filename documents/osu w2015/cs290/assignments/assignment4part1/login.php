<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>Assignment 4 Part 1 login</title>
 </head>
 <body>
<form action="http://web.engr.oregonstate.edu/~armstrla/content1.php?visit=true" method="POST">
 <p>Please Enter Your User Name</p>
  <input type="text" name="username"> 
  <input type="submit" Login>
</form>
</body>
</html>
