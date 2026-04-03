<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta content="text/html; charset=windows-1252" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" href="majorgolfpools2023.css">
    <style>
      
</style> <title>Masters Golf Pool - Pool News</title>
  </head>
  <?php
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
  
    // make connection to database using function
    $con= getDbConnection();

    if (!$con)
    {
      die('Could not connect: ' . mysql_error());
    }

    // Query to return the latest news post
      
    // build database query on table news for latest news
    $query = mysqli_query($con, "Select * FROM news ORDER BY ID DESC LIMIT 1");
    // fetch values from this query
    $row = mysqli_fetch_array($query);
    // build database query on table news for all news archive
    $query2 = mysqli_query($con, "Select * FROM news ORDER BY ID DESC");
    
    // Don't forget to close the connection when done
    mysqli_close($con); 
   
  ?>
       <br>
  <body>
    <div class="center">
      <h1>Pool News <a href="http://www.majorgolfpools.ca"><img id="home" title="Back to homepage"

            alt="Back to homepage" src="images/greenhome5.png"></a></h1>
      <h4 style="text-align: center; position: relative; top: -20px; right: -113px; width: 972px;">All the pool news that's fit to print</h4>
      <h3 style="margin-top: -37px; height: 22px;">Today's News:</h3>
      <p><b id="lnews">Latest Pool News:</b><b>
      
      <?php 
      //print last post date to screen
      //convert time to eastern time zone by modifying and adding 3 hours
      $dt = $row['time'];
      $startf = date_create_from_format('Y-m-d H:i:s', $dt);
      date_modify($startf , '+3 hours');
      
      echo date_format($startf, 'Y-m-d h:i:sa') . " "; ?></b><?php 
      
      //print last post to screen
      echo $row['post']; ?>
         <br>
      </p>
      <br>
    </div>
    <div class="center">
    <p style="text-align: center;"><br>
       <br></p>
    </div>
    <div class="center">
      <p><br>
      </p>
      <h3>Archived News:</h3>
      <p>
      <?php //print all news rows - archives
      
      while($row2 = mysqli_fetch_array($query2))
      {
      //convert time to eastern time zone by modifying and adding 3 hours
      $dt = $row2['time'];
      $startf = date_create_from_format('Y-m-d H:i:s', $dt);
      date_modify($startf , '+3 hours');
            
      //print date and time for each news record ?><b><?php
      echo date_format($startf, 'Y-m-d h:i:sa') . " ";?></b><?php 
      echo $row2['post'] . "<br><br>";
       }
      ?> 
      </p>  
    </div>
  </body>
</html>
