<!DOCTYPE html>
<html dir="ltr">
  <head>
   
    <meta http-equiv="content-type" content="text/html; charset=UTF8">
    <link rel="stylesheet" type="text/css" href="open2022pool.css">
    <title>2022 Open Championship Golf Pool</title>
    
    
  </head>
  <?php    
       
       header("Content-Type: text/html; charset=UTF8");
       
       // Query to return the latest news post
              
      // make connection to database      
      $con = mysqli_connect("localhost", "gpa", "17Nand1na&!");
      if (!$con)          {
            die('Could not connect: ' . mysql_error());          }
      mysqli_select_db($con,"majorgolfpool");
      
      // build database query on table news for latest news
      $query = mysqli_query($con, "Select * FROM news ORDER BY ID DESC LIMIT 1");
      // fetch values from this query      
      $row = mysqli_fetch_array($query);
      
?> <body>

    <!-- First Div - Header and Opening Blurb -->
    
    <div class="center">
    
      <!-- Logo and Champion Images -->
      <a href="https://www.sportico.com/leagues/golf/2022/cameron-smith-bests-rory-mcilroy-british-open-1234682684/" title="Warren Little/Getty Images"><img id="champ" src="images/cam-open22-2.png"></a>
      <a href="https://www.theopen.com/" title="2022 Open Championshp Logo - 150 Years"><img id="logo" src="images/open150-4.png"></a>
    
     <!-- Pool Title -->
     <h1>2022 Open Championship Golf Pool</h1>
      
      <!-- Pool location and Dates -->
      <h4 id="locationdate">St. Andrews Links<br>
      July 14-17, 2022</h4>   
      
      <!-- Pool Opening Blurb-->
      <p>Well, we know where Phil is now! What a change to the golf landscape now that a portion of the pros have left for, ahem, 
        greener pastures on the LIV tour. It’ll be interesting to see how this all turns out. And I’ll leave the commentary at that,
         on the new rival tour.
      </p>
      <p>The Open is truly an open, allowing everyone to participate in this year’s 150th playing of golf’s oldest major, at the home 
        of golf. Looking forward to those classic shots from Scotland.</p>
      <p>Welcome back for one last pool. Check out the entry form, make your picks, and enjoy the final major of the year. Fore!</p>
      <p>(<a id="results" href="view.html"><b>Click here</b></a> for the full background pic.)</p>
      <p><br><br><br></p>
      
      <!-- H3 Pool and Golf Champ Placeholders-->
      <h3 style="text-align: center; ">Congrats to Cam Smith, Champion Golfer of the Year!</h3>
      <h3 style="text-align: center; ">Congrats to Stephen Lawson, Team Wee Hours, Pool Champ!</h3>
        <p> <br></p>
    </div>
    <div class="center"><br>
      <ul id="nav">
        <li><a href="Rules.html">Rules</a></li>
        <li><a href="Entry_Form.php">Entry Form</a></li>                  
        <li><a href="TeamPage.php">Teams</a></li>
        <li><a href="News.php">Pool News</a></li>
        <li><a href="Stats.html">Stats</a></li>
        <li><a href="Hall.html">Hall of Fame</a></li>
        <li><a href="Links.html">Links</a></li>
      </ul>
      <p><b id="lnews">Latest Pool News:</b> <b> <?php 
      //print last post date to screen
      //convert time to eastern time zone by modifying and adding 3 hours
      $dt = $row['time'];
      $startf = date_create_from_format('Y-m-d H:i:s', $dt);
      date_modify($startf , '+3 hours');
      
      echo date_format($startf, 'Y-m-d h:i:sa') . " "; ?>
      </b>
      <?php 
      //print last post to screen
      echo $row['post']; ?> <br>
        <br>
      </p>
    </div>
    <div class="center">
      <h2>&nbsp;Round 4 - Results</h2>
      <ul id="header">
        <li><a href="index_Rd1.php">Round 1</a></li>
        <li><a href="index_Rd2.php">Round 2</a></li>
        <li><a href="index_Rd3.php">Round 3</a></li>
        <li id="selected"><a href="index.php">Round 4</a></li>
      </ul>
      <br>
      <table id="content">
        <tbody>
          <tr>
            <td style=" width: 26px; "> <br>
            </td>
            <td style=" width: 523px;"> <span style="font-weight: bold; font-family: Verdana;">TEAMS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a id="results" href="Round4Results.html">Click here for Full
                  Scores and Rd4 Results</a></span> </td>
            <td style=" width: 272px; "> <span style="font-weight: bold; font-family: Verdana;">Scores</span>
            </td>
             <td style=" width: 272px; background: white; "> <span style="font-weight: bold; font-family: Verdana; ">Advertising</span>
            </td>
          </tr>
          <tr>
            <td id="results" style=" font-weight: bold; font-family: Verdana; vertical-align: top; width: 26px;">1<br>
              2<br>
              3<br>
              4<br>
              T5<br>
              T5<br>
              7<br>
              8<br>
              9<br>
              10<br>
              11<br>
              12<br>
              13<br>
              14<br>
              15<br>
              16<br>
              17<br>
              18<br>
              19<br>
              20<br>
              21<br>
              22<br>
              23<br>
              24<br>
              25<br>
              26<br>
              27<br>
              28<br>
              29<br>
              30<br>
              31<br>
              32<br>
              33<br>
              34<br>
              35<br>
              36<br>
              37<br>
              38<br>
              39<br>
              40<br>
              41<br>
              42<br>
              43<br>
              44<br>
              45<br>
              46<br>
              47<br>
              48<br>
              49<br>
              50<br>
              51<br>
              52<br>
              53<br>
              54<br>
              55<br>
              56<br>
              57<br>
              58<br>
              59<br>
              60<br>
              61<br>
              62<br>
              63<br>
              64<br>
              65<br>
              66<br>
              67<br>
              68<br>
              69<br>
              70<br>
              71<br>
              72<br>
              73<br>
              74<br>
              75<br>
              76<br>
              77<br>
              78<br>
              79<br>
              80<br>
              81<br>
              82<br>
              83<br>
              84<br>
              85<br>
              86<br>
              87<br>
              88<br>
              89<br>
              90<br>
              91<br>
              92<br>
              93<br>
              94<br>
              95<br>
              96<br>
              97<br>
              98<br>
              99<br>
              100<br>
              101<br>
              102<br>
              103<br>
              104<br>
              105<br>
              106<br>
              107<br>
              108<br>
              109<br>
              110<br>
              111<br>
              112<br>
              113<br>
              114<br>
              115<br>
              116<br>
              117<br>
              118<br>
              119<br>
              120<br>
              121<br>
              122<br>
              123<br>
              124<br>
              125<br>
              126<br>
              127<br>
              128<br>
              129<br>
              130<br>
              131<br>
              132<br>
              133<br>
              134<br>
              135<br>
              136<br>
            
            </td>
            <td style="text-align: left; width: 523px; vertical-align: top; font-family: Verdana; color: black;">
            <!--  Copy team results HERE -->
            Wee Hours<br>
      ViperKim<br>
      Blackpool Bill (-16 pick)<br>
      Phantom of the Open (-3 pick)<br>
      Hot4Tiger<br>
      Whitewalkers<br>
      Lady Tiny Hands<br>
      ThreefromtheTee<br>
      Litzy<br>
      NFLer#4<br>
      M1<br>
      Kappy's Crew<br>
      Thin To Win<br>
      Sandy Par<br>
      M3<br>
      Packing Hammers At Shaganapii<br>
      DEERCR<br>
      In Da Woods<br>
      Road Kill Hole<br>
      Habs<br>
      Lefty &amp; Malcolm<br>
      M2<br>
      Lefty<br>
      Nezzie2<br>
      Listen To Your Wife<br>
      Router<br>
      Swilcanth<br>
      Greg's Dinner Invitation<br>
      Team hustle<br>
      Nezanator<br>
      Candy's Guys<br>
      Mud Balls<br>
      suz<br>
      Chloe's Champs<br>
      the old sandbagger<br>
      KHRR<br>
      M4<br>
      Murphy's Magic<br>
      JUST LIV A LITTLE<br>
      Bluenoser<br>
      bheith ar an liathroid<br>
      The Carl Spacklers<br>
      Irn-Brew<br>
      Angela's Angels<br>
      Jimmy<br>
      BabSocks<br>
      chimpo<br>
      Sweetlouswinners<br>
      Taxi<br>
      Coach Scott<br>
      Fore9!<br>
      Woods_Jacked_On_Monsters_again<br>
      bsaundy<br>
      Razor<br>
      Carlyons' Crew<br>
      Granny's Greats<br>
      nutherwin4Milos<br>
      Mrs. LJ<br>
      Theoneputts<br>
      Tiger's Tibia Rod<br>
      Frida's Flowers<br>
      PokerGolfDR<br>
      Dormy Dude<br>
      Rails<br>
      Natural Hazards<br>
      Papa G<br>
      Frrrreeeeeedddoooommm<br>
      I Love Tennis<br>
      Links<br>
      Nflrs#2<br>
      Dick Cheese<br>
      Heathery<br>
      Skinny Malinky Long Legs<br>
      Chubbs Peterson<br>
      Gord58<br>
      Nolan Harrington<br>
      Gillis's Golfers<br>
      Fish king<br>
      Lj<br>
      WINBABYWIN<br>
      Crouching Tiger<br>
      Geensmeir<br>
      Family Affair<br>
      19th hole<br>
      Team Fukunata<br>
      Groogruxking<br>
      Heating Up!<br>
      Sniper<br>
      KPOP<br>
      Seabass 2<br>
      Gringo's Guesses<br>
      Jigger Inn<br>
      Mayday<br>
      Sry<br>
      Par 59<br>
      Tee the Ball<br>
      Chedda<br>
      Amen Corner<br>
      The Hawk<br>
      Leo Dog Harrington<br>
      Big Flopper/Driver off deck<br>
      Team Danny Willett<br>
      InTheHole<br>
      Jojochinto<br>
      Coolum<br>
      Young Guns<br>
      Я тот, кто выше всех<br>
      Wind Swept<br>
      Candy's Guys too<br>
      WILL BET ON ANYTHING<br>
      hanks hackers<br>
      Highlands Links<br>
      Bunker Bound<br>
      The 3 Putt<br>
      Head Winds<br>
      Phil of drink<br>
      Vodka Vixen<br>
      Triple Bogey on 18<br>
      Greene on the Green<br>
      Time To Win One<br>
      The Big Show<br>
      Plaid Tidings<br>
      Factory Girl<br>
      Long Balls Lemay<br>
      Barney birdies<br>
      Gain a Grip<br>
      Linsmore<br>
      Into the Wind<br>
      Sweet Georgia Peach<br>
      Sandman<br>
      Seabass<br>
      NFLERS#1<br>
      Habs #2<br>
      Nezzie&nbsp; (-13 pick)<br>
      Tiger Paw (-10 pick)<br>
      Wind Swept II (-10 pick)<br>
            </td>
            <td style="vertical-align: top; width: 272px; font-family: Verdana; text-align: center; color: black;">
            <!--  Copy team scores HERE -->
            -107<br>
    -106<br>
    -104<br>
    -104<br>
    -103<br>
    -101<br>
    -101<br>
    -101<br>
    -101<br>
    -100<br>
    -99<br>
    -99<br>
    -99<br>
    -98<br>
    -98<br>
    -98<br>
    -98<br>
    -98<br>
    -98<br>
    -97<br>
    -97<br>
    -97<br>
    -96<br>
    -96<br>
    -96<br>
    -96<br>
    -95<br>
    -95<br>
    -95<br>
    -94<br>
    -94<br>
    -93<br>
    -93<br>
    -93<br>
    -93<br>
    -92<br>
    -92<br>
    -91<br>
    -91<br>
    -91<br>
    -91<br>
    -91<br>
    -91<br>
    -90<br>
    -90<br>
    -90<br>
    -89<br>
    -89<br>
    -88<br>
    -88<br>
    -88<br>
    -88<br>
    -88<br>
    -88<br>
    -87<br>
    -87<br>
    -87<br>
    -87<br>
    -86<br>
    -86<br>
    -86<br>
    -86<br>
    -86<br>
    -85<br>
    -85<br>
    -85<br>
    -85<br>
    -85<br>
    -85<br>
    -84<br>
    -84<br>
    -84<br>
    -84<br>
    -84<br>
    -84<br>
    -83<br>
    -83<br>
    -83<br>
    -83<br>
    -83<br>
    -83<br>
    -83<br>
    -82<br>
    -82<br>
    -82<br>
    -82<br>
    -82<br>
    -82<br>
    -82<br>
    -81<br>
    -80<br>
    -80<br>
    -80<br>
    -79<br>
    -79<br>
    -79<br>
    -78<br>
    -78<br>
    -78<br>
    -78<br>
    -78<br>
    -77<br>
    -77<br>
    -77<br>
    -76<br>
    -76<br>
    -75<br>
    -75<br>
    -74<br>
    -74<br>
    -74<br>
    -73<br>
    -73<br>
    -73<br>
    -73<br>
    -71<br>
    -71<br>
    -71<br>
    -71<br>
    -71<br>
    -70<br>
    -70<br>
    -70<br>
    -70<br>
    -67<br>
    -67<br>
    -67<br>
    -66<br>
    -65<br>
    -64<br>
    -63<br>
    -60<br>
    -47<br>
    MC<br>
    MC<br>
    MC<br>    
            </td>
            <td style="vertical-align: top; width: 272px; font-family: Verdana; text-align: center; color: #000000; background: #20233D;">
             
             
            </td>
          </tr>
        </tbody>
      </table>
      <br>
      <br>
    </div>
  </body>
</html>
