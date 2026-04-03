<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta content="text/html; charset=windows-1252" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" href="majorgolfpools2023.css">
    <style>
      
     
     
h1, h3, h4, p
{
text-align: center; 
}
     
p{font-size: small;}

h4{background-color: white;}
      
#stat{width: 80%; margin-left:10%; margin-right:10%; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: medium} 
      
ul.stat {
    list-style-type: disc; font-family: Verdana, Geneva, sans-serif; font-size: small; margin-left: 85px;
}

a:visited { color: #082744;} 
      
</style> <title>2025 Masters Golf Pool - Thanks for Entering!</title>
  </head>
  <body>
    <?php 
     // make connection to database
    function getDbConnection(): mysqli {
      //global $config;
      $config = require __DIR__ . '/../config/config.php'; 
      
      try {
          $conn = mysqli_connect(
              $config['db_host'] ?? 'localhost',
              $config['db_user'] ?? 'user',
              $config['db_pass'] ?? 'password',
              $config['db_name'] ?? 'database'
          );
          
          if (!$conn) {
              throw new Exception(mysqli_connect_error());
          }
          
          // Set character set
          mysqli_set_charset($conn, 'utf8mb4');
          
          return $conn;
      } catch (Exception $e) {
          // Log error and display user-friendly message
          error_log("Database connection failed: " . $e->getMessage());
          die("We're experiencing technical difficulties. Please try again later.");
      }
    }
  
      // make connection to database with database name included
    $con= getDbConnection();
    if (!$con) {
      die("Database connection failed: " . mysqli_connect_error());
  }
  
    function clean(string $data): string {
      return trim($data);
    }

    $name = clean($_POST['name'] ?? '');
    $teamname = clean($_POST['teamname'] ?? '');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ?: '';
    $wscore = clean($_POST['wscore'] ?? '');
    $refer = clean($_POST['refer'] ?? '');

    $holes = [];
    for ($i = 1; $i <= 18; $i++) {
      if (!isset($_POST["hole$i"])) {
        error_log("Missing value for hole$i");
      }  
      $holes[$i] = clean($_POST["hole$i"] ?? null);
    }

    // Validate input
    $errors = [];
    if (empty($name)) $errors[] = 'Please enter your <b>name</b>.';
    if (empty($teamname)) $errors[] = 'Please enter a <b>team name</b>.';
    if (!$email) $errors[] = 'Please enter a valid <b>email address</b>.';
    if (empty($wscore)) $errors[] = 'Please enter a <b>winning score</b> pick.';
    if (empty($refer)) $errors[] = 'Please enter who <b>referred</b> you.';

    foreach ($holes as $key => $value) {
        if (empty($value)) {
            $errors[] = "Please select a player in Hole #$key.";
        }
    }

    // Check if team name already exists
    $stmt = $con->prepare("SELECT 1 FROM entries WHERE teamname = ?");
    $stmt->bind_param('s', $teamname);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) {
        $errors[] = 'This Team Name has already been submitted.';
    }
    $stmt->close();
    
// Check if there is an error

if ($errors) {
        echo "<h4>" . implode("<br>", $errors) . "</h4>";
        echo '<h4>Please click the Back button on your browser and try again.</h4>';
        exit;
}
    

// Insert data securely using prepared statements
/*  $query = "INSERT INTO entries (ID, name, teamname, email, wscore, refer, " .
    implode(',', array_keys($holes)) . ") VALUES ('Null', ?, ?, ?, ?, ?, " .
    implode(',', array_fill(0, count($holes), '?')) . ")";

error_log("Query: " . $query);
error_log("Params: " . implode(',', array_merge([$name, $teamname, $email, $wscore, $refer], array_values($holes))));

$stmt = $con->prepare($query);
$stmt->bind_param(
    'sssss' . str_repeat('s', count($holes)),
    $name, $teamname, $email, $wscore, $refer, ...array_values($holes)
);
$stmt->execute();

if (!$stmt->execute()) {
  die("Database Insert Error: " . $stmt->error);
}

$stmt->close(); */

//create query that will insert data into database
//$query="INSERT INTO entries (ID, `name`, teamname, email, wscore, refer, hole1, hole2, hole3, hole4, hole5, hole6, hole7, hole8, hole9, hole10, hole11, hole12, hole13, hole14, hole15, hole16, hole17, hole18) VALUES ('Null', '".mysqli_real_escape_string($con, $name)."', '".mysqli_real_escape_string($con, $teamname)."', '".mysqli_real_escape_string($con, $email)."', '".mysqli_real_escape_string($con, $wscore)."', '".mysqli_real_escape_string($con, $refer)."', '".mysqli_real_escape_string($con, $hole1)."', '".mysqli_real_escape_string($con, $hole2)."', '".mysqli_real_escape_string($con, $hole3)."', '".mysqli_real_escape_string($con, $hole4)."', '".mysqli_real_escape_string($con, $hole5)."', '".mysqli_real_escape_string($con, $hole6)."', '".mysqli_real_escape_string($con, $hole7)."', '".mysqli_real_escape_string($con, $hole8)."', '".mysqli_real_escape_string($con, $hole9)."', '".mysqli_real_escape_string($con, $hole10)."', '".mysqli_real_escape_string($con, $hole11)."', '".mysqli_real_escape_string($con, $hole12)."', '".mysqli_real_escape_string($con, $hole13)."', '".mysqli_real_escape_string($con, $hole14)."', '".mysqli_real_escape_string($con, $hole15)."', '".mysqli_real_escape_string($con, $hole16)."', '".mysqli_real_escape_string($con, $hole17)."', '".mysqli_real_escape_string($con, $hole18)."') ";

//line to execute query
//mysqli_query($con, $query) or die (mysqli_error($con));

// Then use the $holes array in your query

// This insert works below
//
//
/*
$query = "INSERT INTO entries (ID, `name`, teamname, email, wscore, refer, 
          hole1, hole2, hole3, hole4, hole5, hole6, hole7, hole8, hole9, 
          hole10, hole11, hole12, hole13, hole14, hole15, hole16, hole17, hole18) 
          VALUES ('Null', 
          '".mysqli_real_escape_string($con, $name)."', 
          '".mysqli_real_escape_string($con, $teamname)."', 
          '".mysqli_real_escape_string($con, $email)."', 
          '".mysqli_real_escape_string($con, $wscore)."', 
          '".mysqli_real_escape_string($con, $refer)."',";

// Add all hole values from the array
for ($i = 1; $i <= 18; $i++) {
  $query .= "'".mysqli_real_escape_string($con, $holes[$i])."'";
  if ($i < 18) {
    $query .= ", ";
  }
}

$query .= ")";

// Execute the query
$result = mysqli_query($con, $query);*/

//end of working db insert 

// For object-oriented style
if ($con instanceof mysqli) {
  $stmt = $con->prepare("INSERT INTO entries (ID, name, teamname, email, wscore, refer, 
                        hole1, hole2, hole3, hole4, hole5, hole6, hole7, hole8, hole9, 
                        hole10, hole11, hole12, hole13, hole14, hole15, hole16, hole17, hole18) 
                        VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  
  if (!$stmt) {
      echo "Prepare failed: (" . $con->errno . ") " . $con->error;
      exit;
  }
} else {
  // For procedural style
  $stmt = mysqli_prepare($con, "INSERT INTO entries (ID, name, teamname, email, wscore, refer, 
                            hole1, hole2, hole3, hole4, hole5, hole6, hole7, hole8, hole9, 
                            hole10, hole11, hole12, hole13, hole14, hole15, hole16, hole17, hole18) 
                            VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  
  if (!$stmt) {
      echo "Prepare failed: (" . mysqli_errno($con) . ") " . mysqli_error($con);
      exit;
  }
}

// Bind parameters (works with both styles)
$result = mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssss", 
                             $name, $teamname, $email, $wscore, $refer,
                             $holes[1], $holes[2], $holes[3], $holes[4], $holes[5], $holes[6], 
                             $holes[7], $holes[8], $holes[9], $holes[10], $holes[11], $holes[12], 
                             $holes[13], $holes[14], $holes[15], $holes[16], $holes[17], $holes[18]);

if (!$result) {
  echo "Binding parameters failed: " . mysqli_stmt_error($stmt);
  exit;
}


// Execute the statement
$result = mysqli_stmt_execute($stmt);

// Check if it was successful
if ($result) {
  echo "Data inserted successfully!";
  // Get the ID of the newly inserted record
  $insert_id = mysqli_insert_id($con);
  echo "New record ID: " . $insert_id;
} else {
  echo "Execute failed: " . mysqli_stmt_error($stmt);
}

// Close the statement
mysqli_stmt_close($stmt);

//claude prepared statements

// Prepare the SQL statement
/*$stmt = $con->prepare("INSERT INTO entries (ID, name, teamname, email, wscore, refer, 
                      hole1, hole2, hole3, hole4, hole5, hole6, hole7, hole8, hole9, 
                      hole10, hole11, hole12, hole13, hole14, hole15, hole16, hole17, hole18) 
                      VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Bind parameters
$stmt->bind_param("sssssssssssssssssssssss", 
                  $name, $teamname, $email, $wscore, $refer,
                  $holes[1], $holes[2], $holes[3], $holes[4], $holes[5], $holes[6], 
                  $holes[7], $holes[8], $holes[9], $holes[10], $holes[11], $holes[12], 
                  $holes[13], $holes[14], $holes[15], $holes[16], $holes[17], $holes[18]);

// Execute the statement
$result = $stmt->execute();

// Check if it was successful
//if ($result) {
    // Insertion successful
    // You can redirect or show a success message here
//} else {
    // Handle error
//    error_log("Database error: " . $stmt->error);
//}

// Close the statement
$stmt->close();*/

?>

    <div class="center">
      <h1>Thanks for Entering the Golf Pool!<a href="http://www.majorgolfpools.ca"><img

            id="home" title="Back to homepage" alt="Back to homepage" src="images/greenhome5.png"

            ></a></h1>
      <h3>Your team entered successfully</h3>
      <p><span style="font-weight: bold;">Note:</span> Your team name will not
        appear on the <a href="http://www.majorgolfpools.ca">home page</a> until moderated; however your team will appear
        on the <a href="TeamPage.php">teams' page</a>.<br>
      </p>
      <p><?php 
       
   // Print confirmation
  echo "Your entry:<br>Name: $name<br>Team Name: $teamname<br>Winning Score: $wscore<br><br>";
  foreach ($holes as $value) {
      echo htmlspecialchars($value) . "<br>";
  }
    
  // Send confirmation email
    $to = $email;
    $subject = 'Your 2025 Masters Pool Entry!';
    $message = "Thank you, $name, for entering the pool! Your team is below:\n\n" .
        "Team Name: $teamname\nWinning Score: $wscore\n\n" .
        implode("\n", array_values($holes)) . "\n\n" .
        "Follow all the action at: http://www.majorgolfpools.ca";
    $headers = "From: info@majorgolfpools.ca\r\n" .
        "Reply-To: info@majorgolfpools.ca\r\n" .
        "Bcc: golf.pool.admin@gmail.com\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>An email of your team was successfully sent!</p><br>";
    } else {
        echo "<p>Email message delivery failed...</p><br>";
    }
 
   ?>

      <p></p>
    </div>
  </body>
</html>
