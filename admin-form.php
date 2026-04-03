<?php require_once('authadmin.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <link rel="stylesheet" type="text/css" href="majorgolfpools2023.css">
  <title>Admin Form</title>
  
   <style>
html 
{ background: url(images/control_room.jpg) no-repeat center center fixed;
    -webkit-background-size: cover; -moz-background-size: cover;
    -o-background-size: cover; background-size: cover;
}


#admintable {
border: 2px solid;
color: #0827440;
width: 100%;
text-align: left;
vertical-align: top;
background-color: #ffffff;
} 
 
</style>
  </head>
 
  <body>
  <div class="center">
    <h1 style="text-align: center;">Golf Pool Admin - Pool Form Upload</h1><h1 style="text-align: right;"></h1>
    <table style="width:100%">
      <tr>
        <td><h3><a class="admin" href="admin.php">Team Moderation</a></h3></td>
        <td><h3><a class="admin" href="UpdateNews.php">Post Pool News</a></h3></td>
        <td><h3><a class="admin" href="UpdatePoolData.php">Pool Name and Data</h3></td>
        <td><h3>&nbsp;<b>|</b>&nbsp;&nbsp;&nbsp;&nbsp; </h3></td>
        <td><h3><a class="admin"  href="News.php">Pool News Page</a></h3></td>
        <td><h3><a class="admin"  href="index.php">Pool Home Page</a></h3></td>
        <td><h3 style="text-align: right;"><a class="admin" href="adminlogout.php">Logout</a></h3></td>
      </tr>
  </table>
  
  <h2>Create Pool Form</h2><h3 style="text-align: center;">
  <br>
  <br>
     
  
   <form name="poolentryform" id="poolentryform" action="admin-form.php" method="post">
      <b><label for="poolentryfor">Add category names here:</label></b><br>
      <textarea id="poolentryfor" name="poolentryfor" wrap="hard" rows="90" cols="25"></textarea><br>
      <input type="submit" value="Post" name="submittedform">
      <input type="submit" value="Clear" name="clearform">
   </form>
   
  

     </div>
  </body>
</html>
