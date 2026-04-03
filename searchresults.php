<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <link rel="stylesheet" type="text/css" href="majorgolfpools.css">
  <title>2019 Masters Golf Pool - Search Results</title>
  </head>
  <body>


      
      <div class="center">
        <h1>Search Results<a href="http://www.majorgolfpools.ca"><img id="home" title="Back to homepage" alt="Back to homepage" src="images/greenhome5.png"></a></h1>
      <h3>Your search results below:</h3>
      <p><br>
      </p>
       <?php
       //Function to sanitize values received from the form. Prevents SQL injection  
          function clean($str) {
      		$str = @trim($str);
      		if(get_magic_quotes_gpc()) {
      			$str = stripslashes($str);
      		}
      		return $str;
      	  }
       
       
       
  if(isset($_POST['submit'])){
    if(isset($_GET['go'])){
      if(preg_match("/^[  a-zA-Z]+/", clean($_POST['name']))){
       
        $name = clean($_POST['name']);
        
        
        //connect  to the database
         $con = mysqli_connect("localhost", "gpa", "17Nand1na&!");
         if (!$con)
          {
            die('Could not connect: ' . mysqli_error());
          }
          
          
  
        //-select  the database to use
        $mydb=mysqli_select_db($con,"majorgolfpool");
  
        //-query  the database table
        $sql="SELECT  ID, name, teamname, wscore, refer, hole1, hole2, hole3, hole4, hole5, hole6, hole7, hole8, hole9, hole10, hole11, hole12, hole13, hole14, hole15, hole16, hole17, hole18 FROM entries WHERE name LIKE '%" . $name .  "%' OR teamname LIKE '%" . $name ."%'";
  
  
        //-run  the query against the mysql query function
         $result=mysqli_query($con, $sql) or die (mysqli_error($con));
         
         //probalby if else statement here ... if $result = not null, then, else "please click here and search again (or self-referential page  "
         
      
        //-create  while loop and loop through result set
        while($row=mysqli_fetch_array($result)){
          $name  =$row['name'];
          $teamname=$row['teamname'];
          $wscore=$row['wscore'];
          $hole1=$row['hole1'];
          $hole2=$row['hole2'];
          $hole3=$row['hole3'];
          $hole4=$row['hole4'];
          $hole5=$row['hole5'];
          $hole6=$row['hole6'];
          $hole7=$row['hole7'];
          $hole8=$row['hole8'];
          $hole9=$row['hole9'];
          $hole10=$row['hole10'];
          $hole11=$row['hole11'];
          $hole12=$row['hole12'];
          $hole13=$row['hole13'];
          $hole14=$row['hole14'];
          $hole15=$row['hole15'];
          $hole16=$row['hole16'];
          $hole17=$row['hole17'];
          $hole18=$row['hole18'];
 
 
 
        //-display the result of the array
          echo "Result<br/><br/> Name:  $name <br/>Team Name: "  .$teamname. "<br/>Winning Score: "  .$wscore. "<br/><br/> ";
     
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
            }
        }
        else{
        echo  "<p>Sorry, no results. Try again.</p>";
        }
        }
        }
      ?>
      </div?>
   </body>
</html>
