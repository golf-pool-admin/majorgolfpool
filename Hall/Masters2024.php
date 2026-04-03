<!DOCTYPE html>
<html dir="ltr">
  <head>   
    <meta content="text/html; charset=UTF8" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" href="masters2023.css">
    <title>2024 Masters Golf Pool</title>
  </head>
  <!--
  <php
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
    $query = mysqli_query($con, "SELECT * FROM news ORDER BY ID DESC LIMIT 1");
    // Add error handling for the query
    if (!$query) {
       die('Query failed: ' . mysqli_error($con));
    }
    // fetch values from this query
    $row = mysqli_fetch_array($query);
   
?> -->

<body>     
    <!-- First Div - Header and Opening Blurb -->
    
    <div class="center">
    
    <!-- Logo and Champion Images -->
    <a href="https://www.masters.com" title="Getty Images / KRQE Sports"><img id="champ" src="images/scottie2-2.png"></a>
    <a href="https://www.masters.com" title="2024 Masters Logo"><img id="logo" src="images/MastersTournamentLogo.svg__88x111.png"></a>
    
    <!-- Pool Title -->
     <h1>2024 Masters Golf Pool</h1>
      
    <!-- Pool location and Dates -->
      <h4 id="locationdate">Augusta National Golf Club<br>
      April 11-14, 2024</h4>  
      
      <!-- Pool Opening Blurb-->
      <p>What has happened to the state of professional golf? It’s not like the good ol’ days, 
        and I’ve not watched too much over the start of the season. Hopefully, this is a 
        blip in the matrix and we’ll return to a day of all the best players in the 
        world competing on the same tour.
      </p>
      <p>At least we still have the majors, and the Masters in particular. Some good names
         in the mix: defending champ Rahm, Scheffler, Speith, and Rory. LIV-ers: Dustin, 
         Koepka, and DeChambeau. I’m liking Canuck Nick Taylor to step up into the 
         rarified air of major champion, as well.
        </p>
      <p>Welcome to the pool. Check out the entry form, make your picks, and enjoy the 
        first major of the year. Fore! (<a id="results" href="#view.html"><b>Click here</b></a> for the full background pic.)</p>
      <p><br><br><br></p>
      
           <!-- H3 Pool and Golf Champ Placeholders-->
           <h3 style="text-align: center; ">Congrats to Scottie Scheffler on his 2nd Masters</h3>
      <h3 style="text-align: center; ">Congrats to Norm G-N and Team Gimme Shelter on the pool win!</h3>
        <p><br></p>
    </div>
    
    <!-- Second Div - Menu and News -->
    
    <div class="center"><br>
      <ul id="nav">
      <li><a href="#Rules">Rules</a></li>
        <li><a href="#Entry_Form">Entry Form</a></li>
        <li><a href="#Teams">Teams</a></li>
        <li><a href="#Pool News">Pool News</a></li>
        <li><a href="#Stats">Stats</a></li>
        <li><a href="#Hall of Fame">Hall of Fame</a></li>
        <li><a href="#Links">Links</a></li>
      </ul>
      <p><b id="lnews">Latest Pool News:</b>
      Never in doubt ... even as they entered Amen corner, Scottie Scheffler looked in complete control while those about him lost their heads. 
      Congrats to Scottie on his second green jacket.<br><br>
      To the pool, congrats to Norm Grey-Noble on his first pool win! He edges out Duffer's Eight by one stroke. The winning score pick came in handy as Sweet Cheeks finishes third over Go PGA, 
      and R Sole bests team Babsocks for sixth and seventh. Congrats everyone.<br><br>
      I'll double check the scores and make sure everything is legit, and follow up with an email shortly. In the interim, I'm off to a hockey game.<br><br>Enjoy the rest of your Sunday evening folks. Fore!!
      <!--v// <php 
      //print last post date to screen
      //convert time to eastern time zone by modifying and adding 3 hours
      $dt = $row['time'];
      $startf = date_create_from_format('Y-m-d H:i:s', $dt);
      date_modify($startf , '+3 hours');
      
      echo date_format($startf, 'Y-m-d h:i:sa') . " "; ?>
      </b>
      <php 
      //print last post to screen
      echo $row['post']; ?> <br>
        <br> -->
      </p>
    </div>
    
    <!-- Third Div - Entries and Scores -->
    
    <div class="center">
      <h2>&nbsp;Round 1 - Results!</h2>
      <ul id="header">
      <li><a href="#index_Rd1">Round 1</a></li>
        <li><a href="#index_Rd2">Round 2</a></li>
        <li><a href="#index_Rd3">Round 3</a></li>
        <li id="selected"><a href="#index">Round 4</a></li>
      </ul>
      <br>
      
      <table id="content">
        <tbody>
          <tr>
            <td style=" width: 26px; "> <br>
            </td>
            <td style=" width: 523px;"><span style="font-weight: bold; font-family: Verdana; ">TEAMS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a id="results" href="#Round4Results.html">Click here for Full
                  Scores and Rd1 Results</a></span> 
            </td>
            <td style=" width: 272px; "> <span style="font-weight: bold; font-family: Verdana; ">Scores</span>
            </td>
            <td style=" width: 272px; background: white; "> <span style="font-weight: bold; font-family: Verdana; ">Advertising</span>
            </td>
          </tr>
          <tr>
            <td id="results" style=" font-weight: bold; font-family: Verdana; vertical-align: top; width: 26px;">1<br>
              2<br>
              3<br>
              4<br>
              5<br>
              6<br>
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
              137<br>
              138<br>
              139<br>
              140<br>
              141<br>
              142<br>
              143<br>
              144<br>
              145<br>
              146<br>
              147<br>
              148<br>
              149<br>
              150<br>
              151<br>
              152<br>
              153<br>
              154<br>
              155<br>
              156<br>
              157<br>
              158<br>
              159<br>
              160<br>
              161<br>
              162<br>
              163<br>
              164<br>
              165<br>
              166<br>
              167<br>
              168<br>
              169<br>
              170<br>
              171<br>
              172<br>
              173<br>
              174<br>
              175<br>
              176<br>
              177<br>
              178<br>
              179<br>
              180<br>
              181<br>
              182<br>
              </td>
            <td style="text-align: left; width: 523px; vertical-align: top; font-family: Verdana; color: #000000;">   
             <!-- comment out php code after first round        
             <php
              // Lists team names if teamname is "OK" in database 
              
                // make connection to database  - see above.
               
                
                /*if (!$con) 
                  { 
                  die('Could not connect: ' . mysqli_error()); 
                  } 
                mysqli_select_db($con, "majorgolfpool"); */
                
                // build query 
                
                $query = mysqli_query($con, "Select * FROM entries WHERE OK=1 ORDER BY ID"); 
                if (false === $query){ 
                  echo mysqli_error(); 
                } 
                
                //execute query 
                
                while($row = mysqli_fetch_array($query)) 
                  {echo $row['teamname']. "<br/>"; 
                  } 
                
                // Don't forget to close the connection when done
                mysqli_close($con); 
            ?>   
             / add/remove ? to top-level php tag  -->
             Gimme Shelter<br>
      Duffer's Eight<br>
      Sweet Cheeks (-12)<br>
      Go PGA (-14)<br>
      R Sole (-11)<br>
      BabSocks (-12)<br>
      Foreplay<br>
      PokerGolfDR<br>
      21 under<br>
      KUKU<br>
      Drawshank Redemption<br>
      Cliff's 19th hole picks<br>
      Sobson<br>
      In the Drink!<br>
      Blackpool Bill<br>
      Hank Heinie<br>
      NFLrs1<br>
      Nezanator<br>
      DA BEARS<br>
      Kappy's Crew<br>
      hanks hackers<br>
      BCROSS 2<br>
      High Tee<br>
      Achmed the D.T.<br>
      Premier County<br>
      BaBaBooey<br>
      CoachScott<br>
      Lefty<br>
      Get out the way Joe LaCava!!!!<br>
      Granny's Greats<br>
      ViperKim<br>
      ViperKimToo<br>
      Neillsean<br>
      Wild Ass Guess 2<br>
      Par3 Golfing Solutions<br>
      Far From Par<br>
      Dormy Dude<br>
      Candy's Guys II<br>
      Tavares to Nylander<br>
      Giraffes can golf<br>
      Dylan's Superior Bracket 2.0<br>
      Granny's Greats II<br>
      M1<br>
      Greens with Envy<br>
      19th Green<br>
      Brubuzz100<br>
      Tee the Ball<br>
      R&amp;B II<br>
      Par-Tee Animals<br>
      Natural Hazards<br>
      Feeling Lucky<br>
      JB1<br>
      MOG<br>
      Tremendous Slouch<br>
      Heating up!<br>
      I LIV Golf<br>
      Chloe's Champs<br>
      Groogrux<br>
      Mudballz<br>
      Rockojr911<br>
      Packing Hammers and Driving my Truck<br>
      M2<br>
      Deez Nuts<br>
      Shouda Coulda Wouda<br>
      Pin High<br>
      Sweetlouswinners<br>
      Green LIVery<br>
      Hey Nineteen<br>
      His Masters Voice<br>
      Mightymouse<br>
      Her Lil Rascals<br>
      Angela H<br>
      Benny's Boots<br>
      Mory Racilroy<br>
      Steel Magnolia<br>
      The Hawk<br>
      Prime Time One<br>
      MOG#2<br>
      Chimpo<br>
      Team hustle<br>
      K &amp; G<br>
      Magnollia<br>
      Winner1<br>
      Virginia Venit<br>
      Redbub<br>
      Ball Busters<br>
      John Wick 2<br>
      The Finnish Butcher<br>
      I stroke it to the east<br>
      Danomite 6164<br>
      Theirs no exit to the only exit that one can creat<br>
      The Good Doctor 1<br>
      Deacon Blues<br>
      Fore 9!<br>
      Wild Ass Guess<br>
      Little J<br>
      BCROSS 1<br>
      Liz's pros<br>
      Seabass<br>
      Mark's Masters Picks 1<br>
      Green Jacket Jenny<br>
      Elin<br>
      Hot4Tiger<br>
      Thin To Win<br>
      Down The Pipe<br>
      Putt it in<br>
      Rahmbo's new Lambo runs on Jay Monahan's Fears<br>
      Gain a grip<br>
      JB2<br>
      Par 59<br>
      Lady Tiny Hands<br>
      R&amp;B<br>
      Prime Time Two<br>
      Bad Dog Legs<br>
      Niners<br>
      Sandy Par<br>
      R&amp;B III<br>
      Factory Girl<br>
      Malcolm<br>
      M3<br>
      The Big Show<br>
      bheith ar an liathroid<br>
      Phantom of the Open<br>
      Par 59&nbsp; II<br>
      The Good Doctor 2<br>
      Natural Hazards Part Deux<br>
      DingoKid<br>
      I stroke it to the west<br>
      In Da Woods<br>
      Eva's guys<br>
      LIV it up<br>
      Shawba<br>
      Nflrs2<br>
      Franktown Fore Skins<br>
      Litzy<br>
      Sweet Georgia Peaches<br>
      KHRR<br>
      Vonny<br>
      Hosel Rocket<br>
      Coolum<br>
      John Wick 4<br>
      Candy's Guys<br>
      Mankee<br>
      19 th hole<br>
      M Harrington 89<br>
      Team Danomite 6464<br>
      Winner2<br>
      Greene on the Green<br>
      Pimento Please<br>
      Ryder's Cup<br>
      Marner to Matthews<br>
      Lj<br>
      Al's Pick<br>
      Dentodd<br>
      Team Danny Willett<br>
      Basseterre or bust<br>
      TwoTone62<br>
      Elementary, my dear Watson<br>
      the A team<br>
      Club Pro Guy<br>
      Im beating this guy Ã¢â€&nbsp;â€œ Ã¢â€&nbsp;â€œ Ã¢â€&nbsp;â€œ
      Ã¢â€&nbsp;â€œ<br>
      R&amp;B IV<br>
      Up Tipp<br>
      Whitewalkers<br>
      Sry<br>
      Green power<br>
      Murphy's Magic 2<br>
      Raes Creek<br>
      MHarrington61<br>
      Ladies night out<br>
      LooLoo<br>
      Mashed Potatoes<br>
      Krissydiane<br>
      Papa G<br>
      Listen to your wife<br>
      WINBABYWIN<br>
      Murphys Magic<br>
      The Best Masters Ever<br>
      Crouching Tiger<br>
      Birdie Ryder<br>
      Fin for the Win<br>
      Pinseeker<br>
            <td style="vertical-align: top; width: 272px; font-family: Verdana; text-align: center; color: #000000;">
           <!--  Copy team scores HERE --> 
           -13<br>
    -12<br>
    -8<br>
    -8<br>
    -7<br>
    -7<br>
    -6<br>
    -4<br>
    -3<br>
    -3<br>
    -2<br>
    -2<br>
    -2<br>
    -2<br>
    -1<br>
    0<br>
    0<br>
    1<br>
    1<br>
    1<br>
    1<br>
    1<br>
    2<br>
    2<br>
    2<br>
    3<br>
    4<br>
    4<br>
    4<br>
    5<br>
    5<br>
    5<br>
    5<br>
    5<br>
    5<br>
    5<br>
    5<br>
    6<br>
    6<br>
    6<br>
    6<br>
    7<br>
    7<br>
    7<br>
    7<br>
    8<br>
    8<br>
    8<br>
    8<br>
    8<br>
    8<br>
    8<br>
    8<br>
    9<br>
    9<br>
    9<br>
    9<br>
    9<br>
    9<br>
    9<br>
    10<br>
    10<br>
    10<br>
    10<br>
    10<br>
    11<br>
    12<br>
    12<br>
    12<br>
    13<br>
    13<br>
    13<br>
    13<br>
    13<br>
    13<br>
    13<br>
    13<br>
    13<br>
    13<br>
    13<br>
    14<br>
    14<br>
    14<br>
    14<br>
    14<br>
    14<br>
    15<br>
    15<br>
    15<br>
    15<br>
    15<br>
    15<br>
    16<br>
    16<br>
    16<br>
    16<br>
    16<br>
    17<br>
    17<br>
    17<br>
    17<br>
    17<br>
    17<br>
    17<br>
    18<br>
    18<br>
    18<br>
    18<br>
    18<br>
    19<br>
    19<br>
    19<br>
    19<br>
    19<br>
    19<br>
    20<br>
    20<br>
    21<br>
    21<br>
    21<br>
    21<br>
    21<br>
    21<br>
    22<br>
    22<br>
    22<br>
    23<br>
    23<br>
    23<br>
    23<br>
    23<br>
    23<br>
    24<br>
    24<br>
    24<br>
    24<br>
    25<br>
    25<br>
    25<br>
    26<br>
    26<br>
    26<br>
    26<br>
    27<br>
    27<br>
    27<br>
    27<br>
    27<br>
    27<br>
    28<br>
    28<br>
    28<br>
    28<br>
    28<br>
    29<br>
    29<br>
    29<br>
    29<br>
    30<br>
    30<br>
    31<br>
    31<br>
    31<br>
    33<br>
    34<br>
    35<br>
    36<br>
    36<br>
    37<br>
    37<br>
    37<br>
    37<br>
    41<br>
    44<br>
    45<br>
    47<br>
    49<br>
    49<br>
    51<br>
    53<br>
    53<br>
    MC<br>            
              </td>
      <td style="vertical-align: top; width: 272px; font-family: Verdana; text-align: center; color: #000000; background: #006600;">
               <!--  Ads eventually HERE --> 
                
              </td>
          </tr>
        </tbody>
      </table>
      <br>
      <br>
      
    </div>
  </body>
</html>
