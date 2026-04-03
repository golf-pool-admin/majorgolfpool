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
      
</style> <title>2024 Masters Golf Pool - Thanks for Entering!</title>
  </head>
  <body><?php 
	  
     // make connection to database
    $con = mysqli_connect("localhost", "gpa", "17Nand1na&!");
    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }
    mysqli_select_db($con,"majorgolfpool");
    
    //Function to sanitize values received from the form. Prevents SQL injection  
    function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return $str;
	  }
    
// Variables that capture data from form and are sanitized with clean function
    $name = clean($_POST['name']);
    $teamname = clean($_POST['teamname']);
    $email = clean($_POST['email']);
    $wscore = clean($_POST['wscore']);
    $refer = clean($_POST['refer']);
    //
    // 18 categories
    //
    $hole1 = clean($_POST['hole1']); 
    $hole2 = clean($_POST['hole2']); 
    $hole3 = clean($_POST['hole3']); 
    $hole4 = clean($_POST['hole4']); 
    $hole5 = clean($_POST['hole5']); 
    $hole6 = clean($_POST['hole6']);       
    $hole7 = clean($_POST['hole7']); 
    $hole8 = clean($_POST['hole8']); 
    $hole9 = clean($_POST['hole9']); 
    $hole10 = clean($_POST['hole10']); 
    $hole11 = clean($_POST['hole11']);
    $hole12 = clean($_POST['hole12']); 
    $hole13 = clean($_POST['hole13']); 
    $hole14 = clean($_POST['hole14']); 
    $hole15 = clean($_POST['hole15']); 
    $hole16 = clean($_POST['hole16']); 
    $hole17 = clean($_POST['hole17']); 
    $hole18 = clean($_POST['hole18']); 
    

    
    // Validate input
    $error_message= '';
     
    if ($name == '' )  {
    $error_message = 'Please enter your <b>name</b> <br/>';
    }
    if ($teamname == '' )  {
    $error_message = $error_message . 'Please enter a <b>team name</b> <br/>';
    }
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
    $error_message = $error_message . 'Please enter a valid <b>email address</b><br/>';
    }
    if ($wscore == '' )  {
    $error_message = $error_message . 'Please enter a <b>winning score</b> pick <br/>';
    }
    if ($refer == '' )  {
    $error_message = $error_message . 'Please enter who <b>referred</b> you to the pool <br/>';
    }
    if ($hole1 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #1 <br/>';
    }
    if ($hole2 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #2 <br/>';
    }
    if ($hole3 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #3 <br/>';
    }
    if ($hole4 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #4 <br/>';
    }
    if ($hole5 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #5 <br/>';
    }
    if ($hole6 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #6 <br/>';
    }
    if ($hole7 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #7 <br/>';
    }
    if ($hole8 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #8 <br/>';
    }
    if ($hole9 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #9 <br/>';
    }
    if ($hole10 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #10 <br/>';
    }
    if ($hole11 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #11 <br/>';
    }
    if ($hole12 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #12 <br/>';
    }
    if ($hole13 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #13 <br/>';
    }
    if ($hole14 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #14 <br/>';
    }
    if ($hole15 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #15 <br/>';
    }
    if ($hole16 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #16 <br/>';
    }
    if ($hole17 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #17 <br/>';
    }
    if ($hole18 == '')  {
    $error_message = $error_message . 'Please select a player in Hole #18 <br/>';
    }
    
    //Validate if there is already the same team name entered
    
    $get_user=mysqli_query($con, "select * from entries where teamname='$teamname'");
     if(mysqli_num_rows($get_user)>0)
    {
      $error_message = $error_message . 'This Team Name has already been submitted. It is likely your team has been successfully submitted, check the Teams page (or else choose a new name.)<br/><br/>'; 
    }
    
// Check if there is an error
  
if ( $error_message != '' ) {
      print "<h4>$error_message</h4>";
      print '<h4>Please click the Back button on your browser and try again.</h4>';
      }
    
else {
  //Input OK, then proceed to add to DB and print. 
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
      
     // make connection to database
    //$con = mysqli_connect("majorgolfpool.db.10740113.hostedresource.com", "majorgolfpool", "T1gerW00ds!");
    // if (!$con)
    //  {
    //   die('Could not connect: ' . mysqli_error());
    //   }
    // mysqli_select_db($con,"majorgolfpool");
    
    //create query that will insert data into database
    $query="INSERT INTO entries (ID, name, teamname, email, wscore, refer, hole1, hole2, hole3, hole4, hole5, hole6, hole7, hole8, hole9, hole10, hole11, hole12, hole13, hole14, hole15, hole16, hole17, hole18) VALUES ('Null', '".mysqli_real_escape_string($con, $name)."', '".mysqli_real_escape_string($con, $teamname)."', '".mysqli_real_escape_string($con, $email)."', '".mysqli_real_escape_string($con, $wscore)."', '".mysqli_real_escape_string($con, $refer)."', '".mysqli_real_escape_string($con, $hole1)."', '".mysqli_real_escape_string($con, $hole2)."', '".mysqli_real_escape_string($con, $hole3)."', '".mysqli_real_escape_string($con, $hole4)."', '".mysqli_real_escape_string($con, $hole5)."', '".mysqli_real_escape_string($con, $hole6)."', '".mysqli_real_escape_string($con, $hole7)."', '".mysqli_real_escape_string($con, $hole8)."', '".mysqli_real_escape_string($con, $hole9)."', '".mysqli_real_escape_string($con, $hole10)."', '".mysqli_real_escape_string($con, $hole11)."', '".mysqli_real_escape_string($con, $hole12)."', '".mysqli_real_escape_string($con, $hole13)."', '".mysqli_real_escape_string($con, $hole14)."', '".mysqli_real_escape_string($con, $hole15)."', '".mysqli_real_escape_string($con, $hole16)."', '".mysqli_real_escape_string($con, $hole17)."', '".mysqli_real_escape_string($con, $hole18)."') ";

    //line to execute query
    mysqli_query($con, $query) or die (mysqli_error($con));
   
    
    echo "Your entry: <br/><br/> Name:  $name <br/>Team Name: "  .$teamname. "<br/>Winning Score: "  .$wscore. "<br/><br/> ";
   
    echo "$hole1 <br />";
    echo "$hole2 <br />";
    echo "$hole3 <br />";
    echo "$hole4 <br />";
    echo "$hole5 <br />";
    echo "$hole6 <br />";
    echo "$hole7 <br />";
    echo "$hole8 <br />"; 
    echo "$hole9 <br />";
    echo "$hole10 <br />";
    echo "$hole11 <br />";
    echo "$hole12 <br />";
    echo "$hole13 <br />";
    echo "$hole14 <br />";
    echo "$hole15 <br />";
    echo "$hole16 <br />";
    echo "$hole17 <br />";
    echo "$hole18 <br />";
    
   
    
  //send email code
   function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
  c
  $To = $email;
  $Subject = 'Your 2024 Masters Pool Entry!';
  $Message = "Thank you, ".clean_string($name).", for entering the pool! Your team is below:\n\n";
  $Message .= "Team Name: ".clean_string($teamname)."\n";
  $Message .= "Winning Score: ".clean_string($wscore)." (to be used in case of a tie)\n\n";
  $Message .=clean_string($hole1)."\n";
  $Message .=clean_string($hole2)."\n";
  $Message .=clean_string($hole3)."\n";
  $Message .=clean_string($hole4)."\n";
  $Message .=clean_string($hole5)."\n";
  $Message .=clean_string($hole6)."\n";
  $Message .=clean_string($hole7)."\n";
  $Message .=clean_string($hole8)."\n";
  $Message .=clean_string($hole9)."\n";
  $Message .=clean_string($hole10)."\n";
  $Message .=clean_string($hole11)."\n";
  $Message .=clean_string($hole12)."\n";
  $Message .=clean_string($hole13)."\n";
  $Message .=clean_string($hole14)."\n";
  $Message .=clean_string($hole15)."\n";
  $Message .=clean_string($hole16)."\n";
  $Message .=clean_string($hole17)."\n";
  $Message .=clean_string($hole18)."\n\n";
  $Message .= "Follow all the action at: http://www.majorgolfpools.ca Updates after each round!";
  $Headers = "From: info@majorgolfpools.ca \r\n" .
  "Reply-To: info@majorgolfpools.ca \r\n" .
  //"Content-type: text/html; charset=UTF-8 \r\n" .
  "Bcc: golf.pool.admin@gmail.com \r\n";
  
  if (mail($To, $Subject, $Message, $Headers) ){
   echo("<p>An email of your team was successfully sent!</p><br>");
  } else {
   echo("<p>Email message delivery failed...</p><br>");
  };
  
   } 
   ?>
      <p></p>
    </div>
  </body>
</html>
