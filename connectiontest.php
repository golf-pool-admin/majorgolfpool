<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title>Test</title>
  </head>
  <body>
    TESTER <br><br>
    <?php
$servername = "localhost";
$username = "gpa";
$password = "17Nand1na&!";
$dbname = "majorgolfpool";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// build database query on table news for latest news
$query = mysqli_query($conn, "Select * FROM news ORDER BY ID DESC LIMIT 1");

// fetch values from this query      
$row = mysqli_fetch_array($query);

echo $row['post']; 

 

?>

<br><br>

</body>
</html>