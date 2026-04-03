<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta content="text/html; charset=windows-1252" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" href="majorgolfpools2023.css">
    <style>
      h1, h3, h4, p { text-align: center; }
      p { font-size: small; }
      h4 { background-color: white; }
      #stat { width: 80%; margin-left:10%; margin-right:10%; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: medium }
      ul.stat { list-style-type: disc; font-family: Verdana, Geneva, sans-serif; font-size: small; margin-left: 85px; }
      a:visited { color: #082744; }
    </style>
    <title>2025 Masters Golf Pool - Thanks for Entering!</title>
  </head>
  <body>
  <?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    function getDbConnection(): mysqli {
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
            mysqli_set_charset($conn, 'utf8mb4');
            return $conn;
        } catch (Exception $e) {
            error_log("Database connection failed: " . $e->getMessage());
            die("We're experiencing technical difficulties. Please try again later.");
        }
    }

    $con = getDbConnection();
    if (!$con) die("Database connection failed: " . mysqli_connect_error());

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
        $holes[$i] = clean($_POST["hole$i"] ?? '');
        if (!isset($_POST["hole$i"])) {
            error_log("Missing value for hole$i");
        }
    }

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

    $stmt = $con->prepare("SELECT 1 FROM entries WHERE teamname = ?");
    $stmt->bind_param('s', $teamname);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) {
        die("This Team Name has already been submitted.");
    }
    $stmt->close();

    if ($errors) {
        echo "<h4>" . implode("<br>", $errors) . "</h4>";
        echo '<h4>Please click the Back button on your browser and try again.</h4>';
        exit;
    }

    $query = "INSERT INTO entries (name, teamname, email, wscore, refer, " . implode(',', array_keys($holes)) . ") VALUES (?, ?, ?, ?, ?, " . implode(',', array_fill(0, count($holes), '?')) . ")";
    
    $stmt = $con->prepare($query);
    $stmt->bind_param('sssss' . str_repeat('s', count($holes)), $name, $teamname, $email, $wscore, $refer, ...array_values($holes));
    
    if (!$stmt->execute()) {
        die("Database Insert Error: " . $stmt->error);
    }
    $stmt->close();
  ?>

  <div class="center">
    <h1>Thanks for Entering the Golf Pool!<a href="http://www.majorgolfpools.ca"><img id="home" title="Back to homepage" alt="Back to homepage" src="images/greenhome5.png"></a></h1>
    <h3>Your team entered successfully</h3>
    <p>Your entry:<br>Name: <?php echo htmlspecialchars($name); ?><br>Team Name: <?php echo htmlspecialchars($teamname); ?><br>Winning Score: <?php echo htmlspecialchars($wscore); ?></p>
    <?php
      foreach ($holes as $value) {
          echo htmlspecialchars($value) . "<br>";
      }
      
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
  </div>
  </body>
</html>
