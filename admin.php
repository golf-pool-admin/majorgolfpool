<?php require_once('authadmin.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
  <head>
    <meta content="text/html; charset=windows-1250" http-equiv="content-type">
    <meta name="generator" content="PSPad editor, www.pspad.com">
     <link rel="stylesheet" type="text/css" href="majorgolfpools2023.css">
    <title>Admin Page</title>

<style>
html 
{ background: url(images/control_room.jpg) no-repeat center center fixed;
    -webkit-background-size: cover; -moz-background-size: cover;
    -o-background-size: cover; background-size: cover;
}

</style>

  </head>
  <body>
   <div class="center">
    <h1 style="text-align: center;">Golf Pool Admin - Team Moderation</h1><h1 style="text-align: right;"></h1>
    <table style="width:100%">
      <tr>
        <td><h3><a class="admin" href="UpdateNews.php">Post Pool News</a></h3></td>
        <td><h3><a class="admin" href="admin-form.php">Entry Form Input</a></h3></td> 
        <td><h3><a class="admin" href="UpdatePoolData.php">Pool Name and Data</h3></td>
        <td><h3>&nbsp;<b>|</b>&nbsp;&nbsp;&nbsp;&nbsp; </h3></td>
        <td><h3><a class="admin"  href="News.php">Pool News Page</a></h3></td>
        <td><h3><a class="admin"  href="index.php">Pool Home Page</a></h3></td>
        <td><h3 style="text-align: right;"><a class="admin" href="adminlogout.php">Logout</a></h3></td>
      </tr>
  </table>
    <h2>Team Name Moderation</h2>
    
    <table id="admintable">
      <tbody>
        <tr>
        <td><b>UNMODERATED TEAMS</b></td>
        <td><b>MODERATED TEAMS</b></td>
        </tr>
        <tr>
          <td style="margin-left: -211px; width: 624px;">
           <?php // Lists team names if teamname has not been moderated in database (ok=0)
// make connection to database 
$con = mysqli_connect("localhost", "gpa", "17Nand1na&!"); 

if (!$con) 
  { 
  die('Could not connect: ' . mysqli_error()); 
  } 
mysqli_select_db($con, "majorgolfpool"); 

// build query 

$query = mysqli_query($con, "Select * FROM entries WHERE OK=0"); 
if (false === $query){ 
  echo mysqli_error(); 
} 

//execute query 

while($row = mysqli_fetch_array($query)) 
  {echo $row['teamname']. "&nbsp;&nbsp;". $row['name']. "&nbsp;&nbsp;". $row['refer']. "<br/>"; 
  } 
  
?>
          </td>
          
          <td><?php // Lists moderated team names (ok=1)
// make connection to database 
$con = mysqli_connect("localhost", "gpa", "17Nand1na&!"); 

if (!$con) 
  { 
  die('Could not connect: ' . mysqli_error()); 
  } 
mysqli_select_db($con, "majorgolfpool"); 

// build query 

$query = mysqli_query($con, "Select * FROM entries WHERE OK=1"); 
if (false === $query){ 
  echo mysqli_error(); 
} 

//execute query 

while($row = mysqli_fetch_array($query)) 
  {echo $row['teamname']. "<br/>"; 
  } 
  
?>
         </td>
        </tr>
      </tbody>
    </table>
    <br>
    <form id="modbutton" name="modbutton" method="post" action="admin.php">
    <input name="formsubmit" value="Okay" type="submit"></form>
    
    <?php
  if($_POST['formsubmit'] == "Okay") 
  {
    $con = mysqli_connect("localhost", "gpa", "17Nand1na&!");
    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }
    mysqli_select_db($con,"majorgolfpool");
    
    
      $sql = "UPDATE entries SET OK='1' WHERE OK=0";

      if (mysqli_query($con, $sql)) {
            echo "Record(s) updated successfully";
        } else {
          echo "Error updating record: " . mysqli_error($con);
        }
        mysqli_close($con);
  }
?>
    <form id="refbutton" name="refbutton" method="post" action="admin.php">
    <input name="refresh" value="Refresh" type="submit"></form>
    <p><br>
    </p>
   </div>
  </body>
</html>
