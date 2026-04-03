<?php require_once('auth.php');?>


<!DOCTYPE html><html dir="ltr">
  <head>
    <meta content="text/html; charset=UTF8" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" href="majorgolfpools2023.css">
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script> -->
    <script type="text/javascript">

$.validator.addMethod("requiredSelect", function(value, element) {
    return value !== ""; // Only empty string should fail
}, "Please select a winning score pick.");

$(document).ready(function(){
$("#myform").validate({
debug: false,
rules: {
name: "required",
teamname: "required",
email: {
required: true,
email: true
},
wscore: "requiredSelect",
refer: "required"
},
messages: {
name: "Please include your name",
teamname: "Create a team name here",
email: "Enter a valid email to receive your team list after submission",
wscore: "Please pick the final score to break ties",
refer: "Please enter who referred you to the pool?",
},
});
});

function validateHole(hole, num){

    var radios = document.getElementsByName(hole);
    var holeValid = false;

    var i = 0;
    while (!holeValid && i < radios.length) {
        if (radios[i].checked) holeValid = true;
        i++;        
    }

    if (!holeValid) alert("Select a player in Hole #" + num);
    return holeValid;
    }


function validateForm(){
	
  var course=["hole1", "hole2", "hole3", "hole4", "hole5", "hole6", "hole7", "hole8", "hole9", "hole10", "hole11", "hole12", "hole13", "hole14", "hole15", "hole16", "hole17", "hole18"];
  var holeValid = true;
  var j = 0;
  while (holeValid && j < course.length) {
   
    holeValid = validateHole(course[j], j+1);
    
    j++ ;
  
  }
  return holeValid;

}


</script> 
 
<script> // Deadline Countdown Code
    // Set the date we're counting down to
    var countDownDate = new Date("Apr 10, 2025 07:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Deadline has past!";
    }
}, 1000);
</script>

 <style>
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 250px;
    background-color: white;
    color: #000;
    text-align: left;
    border-radius: 6px;
    padding: 5px 5px;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>

<style>
           
table.table1
      {width: 95%; margin-left:2.5%; margin-right:2.5%; border-collapse: collapse; border-style: hidden; border-radius: 20px; box-shadow: 0 0 0 2px; 
        color:#006600; font-family: Verdana, Geneva, sans-serif; font-size: small;
      }
      
      table.table1 td, th {border: 1px solid;}  
      
table.table2
      {width: 95%; margin-left:2.5%; margin-right:2.5%; border-collapse: collapse; border-style: hidden; border-radius: 20px; box-shadow: 0 0 0 2px; 
        color:#006600; font-family: Verdana, Geneva, sans-serif; font-size: small; 
      }
      table.table2 td, th {padding: 10px;}
      
h1, h3
{
text-align: center; 
}
      
p{font-size: medium;}
    p.two{font-size: small; color: black;}
      
   
      
#entry{width: 95%; margin-left:2.5%; margin-right:2.5%; border-collapse: collapse; border-style: hidden; border-radius: 20px; box-shadow: 0 0 0 2px; color:#14375E; font-family: Verdana, Geneva, sans-serif; font-size: small} 
      
#logoleft
{
float:left;
position: relative;
        top:15px;
        left:115px;

        }
#logoright
{
float:right;
position: relative;
        top:15px;
        right:115px;

        }
      
label.error { width: 250px; display: inline; color: red;}  
    
   
    input {margin-bottom: 5px;}
    select {margin-bottom: 5px;}
    
a:visited {
    color: #14375E;
}
    
      
</style> 

<?php    
       // Query to return the latest entry form values
       
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
        // build database query on table news for latest news

      // build database query on table players for latest form
      $query = mysqli_query($con, "Select * FROM players ORDER BY ID DESC LIMIT 1");
      // fetch values from this query
      $row = mysqli_fetch_array($query);
       
          
  ?>


<title>2025 Masters Golf Pool - Entry Form</title>
  </head>
  <body>
    <form name="myform" id="myform" onsubmit="return validateForm()" action="UpdatePool.php" method="post">
      <div class="center">
        <h1 style="position: relative; top: 25px;">2025 Masters Golf Pool Entry
          Form</h1>
        <br>
        <br>
        <table class="table2">
          <tbody>
            <tr>
              <td style="width: 500px; height: 123px; font-size: medium;" align="left"

                valign="top"><b><label for="name" id="name_label">Name: </label></b><input

                  name="name" id="name" size="67" value="" type="text"><br>
                <b><label for="teamname" id="teamname_label">Team Name: </label></b><input

                  name="teamname" id="teamname" size="58" value="" type="text"><br>
                <b><label for="email" id="email_label">Email: </label></b><input

                  name="email" id="email" size="68" value="" type="text"><br>
                <b><label for="wscore" id="wscore_label">Winning Score: </label></b>
                <select name="wscore" size="1">
                  <option value="">Select...</option>
                  <option value="-25">-25</option>
                  <option value="-24">-24</option>
                  <option value="-23">-23</option>
                  <option value="-22">-22</option>
                  <option value="-21">-21</option>
                  <option value="-20">-20</option>
                  <option value="-19">-19</option>
                  <option value="-18">-18</option>
                  <option value="-17">-17</option>
                  <option value="-16">-16</option>
                  <option value="-15">-15</option>
                  <option value="-14">-14</option>
                  <option value="-13">-13</option>
                  <option value="-12">-12</option>
                  <option value="-11">-11</option>
                  <option value="-10">-10</option>
                  <option value="-9">-9</option>
                  <option value="-8">-8</option>
                  <option value="-7">-7</option>
                  <option value="-6">-6</option>
                  <option value="-5">-5</option>
                  <option value="-4">-4</option>
                  <option value="-3">-3</option>
                  <option value="-2">-2</option>
                  <option value="-1">-1</option>
                  <option value="0">0 (E)</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                </select>
                (in case of ties) <h5 class="tooltip">What is this?
  <span class="tooltiptext">This is the winning score RELATIVE to par; that is, not the number of total 
  strokes, but the final winning score on Sunday. For example, -5 from last year. For more information on 
  how this score is used, see <a href="Rules.html#FSP">Final Standings, Pool</a> in the rules.</span>
</h5><br>
                <b><label for="refer" id="refer_label">Who Referred You to the
                    Pool? </label></b><input name="refer" id="refer" size="31"

                  value="" type="text"> </td>
              <td style="margin-left: 23px;">
                <p style="margin-top: -1px;" class="two"><b>Note:</b>When you
                  submit the form, below, a page refresh includes your team
                  listing and the teams' page updates automatically. If you
                  provide a legitimate email address, an immediate email
                  confirming your picks will be sent. (Make sure<span style="font-weight: bold;">
                    info@majorgolfpools.ca</span> is added to your contacts or
                  check your junk mail folder if an email doesn't arrive.)<br>
                  <br>
                  For further details on the rules or how to play, see <a href="Rules.html">Pool
                    Rules</a>. Click here to go back to the <a href="index.php">Home
                    Page</a>.</p>
              </td>
            </tr>
          </tbody>
        </table>
        <table style="margin-left: auto; margin-right: auto;">
          <tr>
            <td><h3><span style="font-weight: bold; font-style: italic;">April 10, 7:00 AM Eastern!</span>&nbsp;&nbsp;Entry time remaining:</h3></td>
            <td><h3 id="demo"></h3></td>
          </tr>
      </table>
      </div>
      <div class="center">
        <p> </p>
        <br>
        <table class="table1">
          <tbody>
            <tr>
              <td>
                <h2>&nbsp;&nbsp; Hole 1 - Tea Olive</h2>
                <p> <input name="hole1" value="<?php echo $row['Player1A'];?>" type="radio"><?php echo $row['Player1A'];?><br>
                  <input name="hole1" value="<?php echo $row['Player1B'];?>" type="radio"><?php echo $row['Player1B'];?><br>
                  <input name="hole1" value="<?php echo $row['Player1C'];?>" type="radio"><?php echo $row['Player1C'];?><br>
                  <input name="hole1" value="<?php echo $row['Player1D'];?>" type="radio"><?php echo $row['Player1D'];?><br>
                  <input name="hole1" value="<?php echo $row['Player1E'];?>" type="radio"><?php echo $row['Player1E'];?></p>
              </td>
              <td>
                <h2>&nbsp;&nbsp; Hole 2 - Pink Dogwood</h2>
                <p> <input  name="hole2" value="<?php echo $row['Player2A'];?>" type="radio"><?php echo $row['Player2A'];?><br>
                  <input name="hole2" value="<?php echo $row['Player2B'];?>" type="radio"><?php echo $row['Player2B'];?><br>
                  <input name="hole2" value="<?php echo $row['Player2C'];?>" type="radio"><?php echo $row['Player2C'];?><br>
                  <input name="hole2" value="<?php echo $row['Player2D'];?>" type="radio"><?php echo $row['Player2D'];?><br>
                  <input name="hole2" value="<?php echo $row['Player2E'];?>" type="radio"><?php echo $row['Player2E'];?></p>
              </td>
              <td>
                <h2>&nbsp;&nbsp; Hole 3 - Flowering Peach</h2>
                <p> <input  name="hole3" value="<?php echo $row['Player3A'];?>" type="radio"><?php echo $row['Player3A'];?><br>
                  <input name="hole3" value="<?php echo $row['Player3B'];?>" type="radio"><?php echo $row['Player3B'];?><br>
                  <input name="hole3" value="<?php echo $row['Player3C'];?>" type="radio"><?php echo $row['Player3C'];?><br>
                  <input name="hole3" value="<?php echo $row['Player3D'];?>" type="radio"><?php echo $row['Player3D'];?><br>
                  <input name="hole3" value="<?php echo $row['Player3E'];?>" type="radio"><?php echo $row['Player3E'];?></p>
              </td>
            </tr>
            <tr>
              <td>
                <h2>&nbsp;&nbsp; Hole 4 - Flowering Crab Apple</h2>
                <p> <input  name="hole4" value="<?php echo $row['Player4A'];?>" type="radio"><?php echo $row['Player4A'];?><br>
                  <input name="hole4" value="<?php echo $row['Player4B'];?>" type="radio"><?php echo $row['Player4B'];?><br>
                  <input name="hole4" value="<?php echo $row['Player4C'];?>" type="radio"><?php echo $row['Player4C'];?><br>
                  <input name="hole4" value="<?php echo $row['Player4D'];?>" type="radio"><?php echo $row['Player4D'];?><br>
                  <input name="hole4" value="<?php echo $row['Player4E'];?>" type="radio"><?php echo $row['Player4E'];?></p>
              </td>
              <td>
                <h2>&nbsp;&nbsp; Hole 5 - Magnolia</h2>
                <p> <input  name="hole5" value="<?php echo $row['Player5A'];?>" type="radio"><?php echo $row['Player5A'];?><br>
                  <input name="hole5" value="<?php echo $row['Player5B'];?>" type="radio"><?php echo $row['Player5B'];?><br>
                  <input name="hole5" value="<?php echo $row['Player5C'];?>" type="radio"><?php echo $row['Player5C'];?><br>
                  <input name="hole5" value="<?php echo $row['Player5D'];?>" type="radio"><?php echo $row['Player5D'];?><br>
                  <input name="hole5" value="<?php echo $row['Player5E'];?>" type="radio"><?php echo $row['Player5E'];?></p>
              </td>
              <td>
                <h2>&nbsp;&nbsp; Hole 6 - Juniper</h2>
                <p> <input  name="hole6" value="<?php echo $row['Player6A'];?>" type="radio"><?php echo $row['Player6A'];?><br>
                  <input name="hole6" value="<?php echo $row['Player6B'];?>" type="radio"><?php echo $row['Player6B'];?><br>
                  <input name="hole6" value="<?php echo $row['Player6C'];?>" type="radio"><?php echo $row['Player6C'];?><br>
                  <input name="hole6" value="<?php echo $row['Player6D'];?>" type="radio"><?php echo $row['Player6D'];?><br>
                  <input name="hole6" value="<?php echo $row['Player6E'];?>" type="radio"><?php echo $row['Player6E'];?></p>
              </td>
            </tr>
            <tr>
              <td>
                <h2>&nbsp;&nbsp; Hole 7 - Pampas</h2>
                <p> <input  name="hole7" value="<?php echo $row['Player7A'];?>" type="radio"><?php echo $row['Player7A'];?><br>
                  <input name="hole7" value="<?php echo $row['Player7B'];?>" type="radio"><?php echo $row['Player7B'];?><br>
                  <input name="hole7" value="<?php echo $row['Player7C'];?>" type="radio"><?php echo $row['Player7C'];?><br>
                  <input name="hole7" value="<?php echo $row['Player7D'];?>" type="radio"><?php echo $row['Player7D'];?><br>
                  <input name="hole7" value="<?php echo $row['Player7E'];?>" type="radio"><?php echo $row['Player7E'];?></p>
              </td>
              <td>
                <h2>&nbsp;&nbsp; Hole 8 - Yellow Jasmine</h2>
                <p> <input  name="hole8" value="<?php echo $row['Player8A'];?>" type="radio"><?php echo $row['Player8A'];?><br>
                  <input name="hole8" value="<?php echo $row['Player8B'];?>" type="radio"><?php echo $row['Player8B'];?><br>
                  <input name="hole8" value="<?php echo $row['Player8C'];?>" type="radio"><?php echo $row['Player8C'];?><br>
                  <input name="hole8" value="<?php echo $row['Player8D'];?>" type="radio"><?php echo $row['Player8D'];?><br>
                  <input name="hole8" value="<?php echo $row['Player8E'];?>" type="radio"><?php echo $row['Player8E'];?></p>
              </td>
              <td>
                <h2>&nbsp;&nbsp; Hole 9 - Carolina Cherry</h2>
                <p> <input  name="hole9" value="<?php echo $row['Player9A'];?>" type="radio"><?php echo $row['Player9A'];?><br>
                  <input name="hole9" value="<?php echo $row['Player9B'];?>" type="radio"><?php echo $row['Player9B'];?><br>
                  <input name="hole9" value="<?php echo $row['Player9C'];?>" type="radio"><?php echo $row['Player9C'];?><br>
                  <input name="hole9" value="<?php echo $row['Player9D'];?>" type="radio"><?php echo $row['Player9D'];?><br>
                  <input name="hole9" value="<?php echo $row['Player9E'];?>" type="radio"><?php echo $row['Player9E'];?></p>
              </td>
            </tr>
            <tr>
              <td>
                <h2>&nbsp;&nbsp; Hole 10 - Camellia</h2>
                <p> <input  name="hole10" value="<?php echo $row['Player10A'];?>" type="radio"><?php echo $row['Player10A'];?><br>
                  <input name="hole10" value="<?php echo $row['Player10B'];?>" type="radio"><?php echo $row['Player10B'];?><br>
                  <input name="hole10" value="<?php echo $row['Player10C'];?>" type="radio"><?php echo $row['Player10C'];?><br>
                  <input name="hole10" value="<?php echo $row['Player10D'];?>" type="radio"><?php echo $row['Player10D'];?><br>
                  <input name="hole10" value="<?php echo $row['Player10E'];?>" type="radio"><?php echo $row['Player10E'];?></p>
              </td>
              <td>
                <h2>&nbsp;&nbsp; Hole 11 - White Dogwood</h2>
                <p> <input  name="hole11" value="<?php echo $row['Player11A'];?>" type="radio"><?php echo $row['Player11A'];?><br>
                  <input name="hole11" value="<?php echo $row['Player11B'];?>" type="radio"><?php echo $row['Player11B'];?><br>
                  <input name="hole11" value="<?php echo $row['Player11C'];?>" type="radio"><?php echo $row['Player11C'];?><br>
                  <input name="hole11" value="<?php echo $row['Player11D'];?>" type="radio"><?php echo $row['Player11D'];?><br>
                  <input name="hole11" value="<?php echo $row['Player11E'];?>" type="radio"><?php echo $row['Player11E'];?></p>
              </td>
              <td>
                <h2>&nbsp;&nbsp; Hole 12 - Golden Bell</h2>
                <p> <input  name="hole12" value="<?php echo $row['Player12A'];?>" type="radio"><?php echo $row['Player12A'];?><br>
                  <input name="hole12" value="<?php echo $row['Player12B'];?>" type="radio"><?php echo $row['Player12B'];?><br>
                  <input name="hole12" value="<?php echo $row['Player12C'];?>" type="radio"><?php echo $row['Player12C'];?><br>
                  <input name="hole12" value="<?php echo $row['Player12D'];?>" type="radio"><?php echo $row['Player12D'];?><br>
                  <input name="hole12" value="<?php echo $row['Player12E'];?>" type="radio"><?php echo $row['Player12E'];?></p>
              </td>
            </tr>
            <tr>
              <td>
                <h2>&nbsp;&nbsp; Hole 13 - Azalea</h2>
                <p> <input  name="hole13" value="<?php echo $row['Player13A'];?>" type="radio"><?php echo $row['Player13A'];?><br>
                  <input name="hole13" value="<?php echo $row['Player13B'];?>" type="radio"><?php echo $row['Player13B'];?><br>
                  <input name="hole13" value="<?php echo $row['Player13C'];?>" type="radio"><?php echo $row['Player13C'];?><br>
                  <input name="hole13" value="<?php echo $row['Player13D'];?>" type="radio"><?php echo $row['Player13D'];?><br>
                  <input name="hole13" value="<?php echo $row['Player13E'];?>" type="radio"><?php echo $row['Player13E'];?></p>
              </td>
              <td>
                <h2>&nbsp;&nbsp; Hole 14 - Chinese Fir</h2>
                <p> <input  name="hole14" value="<?php echo $row['Player14A'];?>" type="radio"><?php echo $row['Player14A'];?><br>
                  <input name="hole14" value="<?php echo $row['Player14B'];?>" type="radio"><?php echo $row['Player14B'];?><br>
                  <input name="hole14" value="<?php echo $row['Player14C'];?>" type="radio"><?php echo $row['Player14C'];?><br>
                  <input name="hole14" value="<?php echo $row['Player14D'];?>" type="radio"><?php echo $row['Player14D'];?><br>
                  <input name="hole14" value="<?php echo $row['Player14E'];?>" type="radio"><?php echo $row['Player14E'];?></p>
              </td>
              <td>                                                                                                 
                <h2>&nbsp;&nbsp; Hole 15 - Fire Thorn</h2>
                <p> <input  name="hole15" value="<?php echo $row['Player15A'];?>" type="radio"><?php echo $row['Player15A'];?><br>
                  <input name="hole15" value="<?php echo $row['Player15B'];?>" type="radio"><?php echo $row['Player15B'];?><br>
                  <input name="hole15" value="<?php echo $row['Player15C'];?>" type="radio"><?php echo $row['Player15C'];?><br>
                  <input name="hole15" value="<?php echo $row['Player15D'];?>" type="radio"><?php echo $row['Player15D'];?><br>
                  <input name="hole15" value="<?php echo $row['Player15E'];?>" type="radio"><?php echo $row['Player15E'];?></p>
              </td>
            </tr>
            <tr>
              <td>
                <h2>&nbsp;&nbsp; Hole 16 - Red Bud</h2>
                <p> <input  name="hole16" value="<?php echo $row['Player16A'];?>" type="radio"><?php echo $row['Player16A'];?><br>
                  <input name="hole16" value="<?php echo $row['Player16B'];?>" type="radio"><?php echo $row['Player16B'];?><br>
                  <input name="hole16" value="<?php echo $row['Player16C'];?>" type="radio"><?php echo $row['Player16C'];?><br>
                  <input name="hole16" value="<?php echo $row['Player16D'];?>" type="radio"><?php echo $row['Player16D'];?><br>
                  <input name="hole16" value="<?php echo $row['Player16E'];?>" type="radio"><?php echo $row['Player16E'];?></p>
              </td>
              <td>
                <h2>&nbsp;&nbsp; Hole 17 - Nandina</h2>
                <p> <input  name="hole17" value="<?php echo $row['Player17A'];?>" type="radio"><?php echo $row['Player17A'];?> <br>
                  <input name="hole17" value="<?php echo $row['Player17B'];?>" type="radio"><?php echo $row['Player17B'];?> <br>
                  <input name="hole17" value="<?php echo $row['Player17C'];?>" type="radio"><?php echo $row['Player17C'];?> <br>
                  <input name="hole17" value="<?php echo $row['Player17D'];?>" type="radio"><?php echo $row['Player17D'];?> <br>
                  <input name="hole17" value="<?php echo $row['Player17E'];?>" type="radio"><?php echo $row['Player17E'];?> </p>
              </td>
              <td>
                <h2>&nbsp;&nbsp; Hole 18 - Holly</h2>
                <p> <input  name="hole18" value="<?php echo $row['Player18A'];?>" type="radio"><?php echo $row['Player18A'];?><br>
                  <input name="hole18" value="<?php echo $row['Player18B'];?>" type="radio"><?php echo $row['Player18B'];?><br>
                  <input name="hole18" value="<?php echo $row['Player18C'];?>" type="radio"><?php echo $row['Player18C'];?> <br>
                  <input name="hole18" value="<?php echo $row['Player18D'];?>" type="radio"><?php echo $row['Player18D'];?> <br>
                  <input name="hole18" value="<?php echo $row['Player18E'];?>" type="radio"><?php echo $row['Player18E'];?> </p>
              </td>
            </tr>
          </tbody>
        </table>
        <br><!--
        <div style="text-align: center;"><input  class="button button1" value=" Submit Entry Form " type="submit">      
        </div> -->
        <br>
        <p class="two">After you click Submit, you'll get a page refresh
          including your team listing, the teams' page updates automatically,
          and - if you provide a legitimate email address - an immediate email
          confirming your picks will be sent. (Make sure <span style="font-weight: bold;">info@majorgolfpools.ca</span>
          is added to your contacts or otherwise check your junk mail folder if
          an email doesn't arrive.)<br>
          <br>
          <span style="font-weight: bold;">Note:</span> The Teams list on the
          home page won't update immediately. The name goes into moderation and
          I update the page as quick as I can, at most within a few hours.<br>
          <br>
          Any problems, send me an email at golf.pool.admin@gmail.com Thanks.</p>
        <br>
      </div>
    </form>
  </body>
</html>
