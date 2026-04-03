   <!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta content="text/html; charset=windows-1252" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" href="majorgolfpools2023.css">
    
    
 <title>2024 Masters Golf Pool - Teams Page</title>
  </head>
  <body>
    <div class="center">
      <h1>Teams Page<a href="http://www.majorgolfpools.ca"><img id="home"

            title="Back to homepage" alt="Back to homepage" src="images/greenhome5.png"

            ></a></h1>
      <p>Teams are listed below. Scroll down to find your entry. After the golf
        starts, I'll update your players' scores and list your best 8 players
        along with your team score. Please let me know if there are any errors.
        Thanks.</p>
      <table id="stat3">
        <tbody>
          <tr>
            <td><?php // Column 1 - Lists first 40 teams from DB
// make connection to database
$con = mysqli_connect("localhost", "gpa", "17Nand1na&!", "majorgolfpool");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
//mysql_select_db("majorgolfpool", $con);

// build and execute query
$query = mysqli_query($con, "Select * FROM entries ORDER BY ID LIMIT 50");

//print query to screen
while($row = mysqli_fetch_array($query))
  {echo  "<br /> Name: " .$row['name']. "<br />  Team Name: " .$row['teamname']. "<br /> Winning Score: " .$row['wscore']. "<br /><br/>";
    echo "Hole 1: ".$row['hole1']. "<br />";
    echo "Hole 2: ".$row['hole2']. "<br />";
    echo "Hole 3: ".$row['hole3']. "<br />";
    echo "Hole 4: ".$row['hole4']. "<br />";
    echo "Hole 5: ".$row['hole5']. "<br />";
    echo "Hole 6: ".$row['hole6']. "<br />";
    echo "Hole 7: ".$row['hole7']. "<br />";
    echo "Hole 8: ".$row['hole8']. "<br />";
    echo "Hole 9: ".$row['hole9']. "<br />";
    echo "Hole 10: ".$row['hole10']. "<br />";
    echo "Hole 11: ".$row['hole11']. "<br />";
    echo "Hole 12: ".$row['hole12']. "<br />";
    echo "Hole 13: ".$row['hole13']. "<br />";
    echo "Hole 14: ".$row['hole14']. "<br />";
    echo "Hole 15: ".$row['hole15']. "<br />";
    echo "Hole 16: ".$row['hole16']. "<br />";
    echo "Hole 17: ".$row['hole17']. "<br />";
    echo "Hole 18: ".$row['hole18']. "<br />";
  }
?></td>
<td><?php //  Column 2 - Next 25 entries from database (rows 41-80)
// make connection to database
$con = mysqli_connect("localhost", "gpa", "17Nand1na&!", "majorgolfpool");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
//mysql_select_db("majorgolfpool", $con);

// build query
$query = mysqli_query($con, "Select * FROM entries ORDER BY ID LIMIT 50 OFFSET 50");

//execute query
while($row = mysqli_fetch_array($query))
  {echo  "<br /> Name: " .$row['name']. "<br />  Team Name: " .$row['teamname']. "<br /> Winning Score: " .$row['wscore']. "<br /><br/>";
    echo "Hole 1: ".$row['hole1']. "<br />";
    echo "Hole 2: ".$row['hole2']. "<br />";
    echo "Hole 3: ".$row['hole3']. "<br />";
    echo "Hole 4: ".$row['hole4']. "<br />";
    echo "Hole 5: ".$row['hole5']. "<br />";
    echo "Hole 6: ".$row['hole6']. "<br />";
    echo "Hole 7: ".$row['hole7']. "<br />";
    echo "Hole 8: ".$row['hole8']. "<br />";
    echo "Hole 9: ".$row['hole9']. "<br />";
    echo "Hole 10: ".$row['hole10']. "<br />";
    echo "Hole 11: ".$row['hole11']. "<br />";
    echo "Hole 12: ".$row['hole12']. "<br />";
    echo "Hole 13: ".$row['hole13']. "<br />";
    echo "Hole 14: ".$row['hole14']. "<br />";
    echo "Hole 15: ".$row['hole15']. "<br />";
    echo "Hole 16: ".$row['hole16']. "<br />";
    echo "Hole 17: ".$row['hole17']. "<br />";
    echo "Hole 18: ".$row['hole18']. "<br />";
  }
?> </td>
            <td><?php // Column 3 - Next 25 entries from database (rows 81-120)
// make connection to database
$con = mysqli_connect("localhost", "gpa", "17Nand1na&!", "majorgolfpool");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
//mysql_select_db("majorgolfpool", $con);

// build query
$query = mysqli_query($con, "Select * FROM entries ORDER BY ID LIMIT 50 OFFSET 100");

//execute query
while($row = mysqli_fetch_array($query))
  {echo  "<br /> Name: " .$row['name']. "<br />  Team Name: " .$row['teamname']. "<br /> Winning Score: " .$row['wscore']. "<br /><br/>";
    echo "Hole 1: ".$row['hole1']. "<br />";
    echo "Hole 2: ".$row['hole2']. "<br />";
    echo "Hole 3: ".$row['hole3']. "<br />";
    echo "Hole 4: ".$row['hole4']. "<br />";
    echo "Hole 5: ".$row['hole5']. "<br />";
    echo "Hole 6: ".$row['hole6']. "<br />";
    echo "Hole 7: ".$row['hole7']. "<br />";
    echo "Hole 8: ".$row['hole8']. "<br />";
    echo "Hole 9: ".$row['hole9']. "<br />";
    echo "Hole 10: ".$row['hole10']. "<br />";
    echo "Hole 11: ".$row['hole11']. "<br />";
    echo "Hole 12: ".$row['hole12']. "<br />";
    echo "Hole 13: ".$row['hole13']. "<br />";
    echo "Hole 14: ".$row['hole14']. "<br />";
    echo "Hole 15: ".$row['hole15']. "<br />";
    echo "Hole 16: ".$row['hole16']. "<br />";
    echo "Hole 17: ".$row['hole17']. "<br />";
    echo "Hole 18: ".$row['hole18']. "<br />";
  }
?> </td>
            <td><?php // Column 4 - Next 25 entries from database (rows 121-160)
// make connection to database
$con = mysqli_connect("localhost", "gpa", "17Nand1na&!", "majorgolfpool");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
//mysql_select_db("majorgolfpool", $con);

// build query
$query = mysqli_query($con, "Select * FROM entries ORDER BY ID LIMIT 75 OFFSET 150");

//execute query
while($row = mysqli_fetch_array($query))
  {echo  "<br /> Name: " .$row['name']. "<br />  Team Name: " .$row['teamname']. "<br /> Winning Score: " .$row['wscore']. "<br /><br/>";
    echo "Hole 1: ".$row['hole1']. "<br />";
    echo "Hole 2: ".$row['hole2']. "<br />";
    echo "Hole 3: ".$row['hole3']. "<br />";
    echo "Hole 4: ".$row['hole4']. "<br />";
    echo "Hole 5: ".$row['hole5']. "<br />";
    echo "Hole 6: ".$row['hole6']. "<br />";
    echo "Hole 7: ".$row['hole7']. "<br />";
    echo "Hole 8: ".$row['hole8']. "<br />";
    echo "Hole 9: ".$row['hole9']. "<br />";
    echo "Hole 10: ".$row['hole10']. "<br />";
    echo "Hole 11: ".$row['hole11']. "<br />";
    echo "Hole 12: ".$row['hole12']. "<br />";
    echo "Hole 13: ".$row['hole13']. "<br />";
    echo "Hole 14: ".$row['hole14']. "<br />";
    echo "Hole 15: ".$row['hole15']. "<br />";
    echo "Hole 16: ".$row['hole16']. "<br />";
    echo "Hole 17: ".$row['hole17']. "<br />";
    echo "Hole 18: ".$row['hole18']. "<br />";
  }
?></td>
          </tr>
          <tr>
            <td><br>
            </td>
            <td><br>
            </td>
            <td><br>
            </td>
            <td><br>
            </td>
          </tr>
        </tbody>
      </table>
      <br>
    </div>
  </body>
</html>
