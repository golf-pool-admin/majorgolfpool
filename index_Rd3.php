<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta content="text/html; charset=UTF8" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" href="majorgolfpools2023.css">
    <title>2025 Masters Golf Pool</title>
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
    // Don't forget to close the connection when done
    mysqli_close($con); 
?>

<body>
    <!-- First Div - Header and Opening Blurb -->
    
    <div class="center">
    
    <!-- Logo and Champion Images -->
    <a href="https://www.masters.com" title=" Richard Heathcote/Getty Images"><img id="champ" src="images/rory2025-2.png"></a>
    <a href="https://www.masters.com" title="2024 Masters Logo"><img id="logo" src="images/MastersTournamentLogo.svg__88x111.png"></a>
    
    <!-- Pool Title -->
    <h1>2025 Masters Golf Pool</h1>
      
    <!-- Pool location and Dates -->
      <h4 id="locationdate">Augusta National Golf Club<br>
      April 10-13, 2025</h4>        
      
    <!-- Pool Opening Blurb-->
    <p>Twenty years ago, this humble online golf pool began. Tiger captured his 
      fourth green jacket in that year with a remarkable chip on 16, a great 
      tournament moment. Check out the results from that first year, 
      <a id="results" href="https://www.majorgolfpools.ca/Hall/Master05.html">2025 Masters Golf Pool</a>!
    </p>
    <p>I'm not sure how much longer I can keep up this pool, but it's nice to hit this anniversary 
        at least. Many thanks to all the pool players out there, especially those from day one.
    </p>
    <p>Back to business: Welcome to the pool. Check out the entry form, make your picks, and enjoy the 
      first major of the year. Fore! (<a id="results" href="view.html"><b>Click here</b></a> for the full background pic.)</p>
    <p><br><br><br></p>
      
          <!-- H3 Pool and Golf Champ Placeholders-->
          <h3 style="text-align: center; ">Congrats to Rory on the career slam!</h3>
      <h3 style="text-align: center; ">Congrats to Matton2 for the pool victory!</h3>
        <p> <br></p>
    </div>
    <div class="center"><br>
      <ul id="nav">
        <li><a href="Rules2023.html">Rules</a></li>
        <li><a href="Entry_Form.php">Entry Form</a></li>
        <li><a href="TeamPage.php">Teams</a></li>
        <li><a href="News.php">Pool News</a></li>
        <li><a href="Stats.html">Stats</a></li>
        <li><a href="Hall.html">Hall of Fame</a></li>
        <li><a href="Links.html">Links</a></li>
      </ul>
      <p><b id="lnews">Latest Pool News:</b> <b>
      <?php 
      //print last post date to screen
      //convert time to eastern time zone by modifying and adding 3 hours
      $dt = $row['time'];
      $startf = date_create_from_format('Y-m-d H:i:s', $dt);
      date_modify($startf , '+3 hours');
      
      echo date_format($startf, 'Y-m-d h:i:sa') . " "; ?></b>
      
      <?php 
      //print last post to screen
      echo $row['post']; ?> <br>
        <br>
      </p>
    </div>
    <div class="center">
      <h2>&nbsp;Round 3 - Results</h2>
      <ul id="header">
        <li><a href="index_Rd1.php">Round 1</a></li>
        <li><a href="index_Rd2.php">Round 2</a></li>
        <li id="selected"><a href="index_Rd3.php">Round 3</a></li>
        <li><a href="index.php">Round 4</a></li>
      </ul>
      <br>
      <table id="content">
        <tbody>
          <tr>
            <td style=" width: 26px; "> <br>
            </td>
            <td style=" width: 523px;"> <span style="font-weight: bold; font-family: Verdana;">TEAMS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a id="results" href="Round3Results.html">Click here for Full
                  Scores and Rd3 Results</a></span> </td>
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
              183<br>
              184<br>
              185<br>
              186<br>
              187<br>
              188<br>
              189<br>
              190<br>
              191<br>
              192<br>
              193<br>
              194<br>
              195<br>
              196<br>
              197<br>
              198<br>
              199<br>
              200<br>
            </td>
            <td style="text-align: left; width: 523px; vertical-align: top; font-family: Verdana; color: #000000;">
            <!--  Copy team results HERE -->
            Brianna's Birdies<br>
      Jen's Drive/Nick's Putt<br>
      Shouda Coulda Wouda<br>
      Big Q's Dawgs<br>
      Matton2<br>
      Sammy<br>
      Canada blue jay<br>
      LETS GO 3<br>
      Top 20 Finish<br>
      Liga from Riga<br>
      John1to4<br>
      A Gusta Wind<br>
      Chimpo<br>
      Skull Shot<br>
      Niners<br>
      Number1 Balls in Golf<br>
      Steel Magnolia<br>
      Team Stella<br>
      Coolum<br>
      Vodka pig<br>
      Azaleas<br>
      PokergolfDR<br>
      BC1<br>
      Gringo Amigo<br>
      Ljs<br>
      His Master's Voice<br>
      The Murph<br>
      LETSGO 1<br>
      Lady Tiny Hands<br>
      FinnyForTheWinny<br>
      Shelldan<br>
      Head Master<br>
      Sandy Par<br>
      Team Morris<br>
      Canada 4<br>
      JB1<br>
      Sammy&amp;Groo<br>
      Cliff's Aces<br>
      Unc<br>
      Ball striker<br>
      Nineteen19th hole<br>
      Packing Hammers and Driving my Truck<br>
      Gillis's Guesses<br>
      Hot Wheels<br>
      Tiffs Tweets Takes The Turn Tight<br>
      Cleviedog<br>
      Amanda B's Chicken Biscuit<br>
      ViperKim<br>
      In the red!<br>
      hanks hackers<br>
      Harrington 1<br>
      Lem23<br>
      Groogruxking<br>
      Schauffelemetothe front!<br>
      Baba Booey<br>
      Duffer White<br>
      Birdie/Juice<br>
      Nezanator<br>
      Birdie in the rain<br>
      Tweetybirds<br>
      BC2<br>
      In it to win it<br>
      Ryder Cup<br>
      Pokergolfdr2<br>
      Horton Smith Hears a Who<br>
      Dan sent me this link<br>
      Yung Kap<br>
      The Inaugural Champion<br>
      Win Moo Nee<br>
      Birdie Jettie<br>
      Simmer Down<br>
      Wang chung tonitght<br>
      Dormy Dude<br>
      Arnies Umbrella<br>
      Wild Ass Guess 2<br>
      CoachScott<br>
      JB2<br>
      Swoop!<br>
      Anytime Hole in One<br>
      The Jerman and the Gew<br>
      Elementary, my dear Watson<br>
      Birdie Juice<br>
      Chloe's Champs<br>
      Drawshank Redemption<br>
      Sweet Georgia Peaches<br>
      Greene on the Green<br>
      Big Q's Dawgs #2<br>
      Sammy and Groo<br>
      Geo1<br>
      Young Guns<br>
      Sandman69<br>
      Benders Best<br>
      The Hawk<br>
      KuKu<br>
      Als Pic<br>
      Carlos<br>
      Missy #1<br>
      R Sole<br>
      JSS<br>
      Ticket to Ride<br>
      Bad Dog Legs<br>
      Chefer1<br>
      Sean - neill<br>
      Candy's Guys<br>
      Three year olds picks<br>
      BabSocks<br>
      LETS GO 2<br>
      Wild Ass Guess<br>
      MikeD<br>
      Golf59 1<br>
      Gimme Shelter<br>
      KHRR<br>
      Fore Horsemen<br>
      LeafsFanatic<br>
      Turf jockey<br>
      DeChampo Rahming It Homa<br>
      In Da Woods<br>
      Harrington 2<br>
      Ruddy<br>
      Hot4Tiger<br>
      bheith ar an liathroid<br>
      Papa G<br>
      Blackpool Bill<br>
      The winning team<br>
      Amen Conners<br>
      Golden Green<br>
      M3<br>
      Natural Hazards<br>
      Phantom of the Open<br>
      Listen to your wife!<br>
      Green Eggs and Sam Snead<br>
      Jim Nantz<br>
      Augusta Wind<br>
      The Big Show<br>
      WINBABYWIN<br>
      Murphy's Magic<br>
      AGO<br>
      ViperKimToo<br>
      Golf59 2<br>
      Candy's Guys II<br>
      Age 30 and under<br>
      Scottie's Bail Bondman<br>
      Whitewalkers<br>
      Fuzzy Tiger<br>
      Tee the Ball<br>
      Green Giants 2<br>
      Nowhere Man<br>
      Butler Cabin Ballers<br>
      Granny's Greats<br>
      NFLERS#1<br>
      Nflrs2<br>
      Pinseeker<br>
      Staples Standards<br>
      M1<br>
      Red Bud<br>
      Kappy's Krew<br>
      aka Milos<br>
      Sir Lancelot<br>
      SRY<br>
      Heating up!<br>
      Magnolia<br>
      vonn<br>
      Johnny Cash<br>
      Chicken Nugget<br>
      Jimmy<br>
      Matton 1<br>
      Day Tripper<br>
      Seabass<br>
      St Kitts Nevis boys<br>
      BC3<br>
      Flying Finn<br>
      Journeymen<br>
      Sweetlouswinners<br>
      Two Guys on a Court 1<br>
      Granny's Greats II<br>
      Stonecode<br>
      Ryder Rue<br>
      Rocket<br>
      Team Danny Willett<br>
      G MONEY<br>
      Fire Your Caddie<br>
      Tigerpaws<br>
      Green Giants<br>
      M2<br>
      Ladies night out<br>
      Scotty's Cheese Sandwich &amp; Red Water<br>
      Anyone got Scotty's Lawyer's number?<br>
      Scotty's PO doesn't think Golf is a Real Job<br>
      Scotty's got No Belt &amp; No Shoelaces<br>
      Scotty Sheffler &amp; The Great Officer Drag of 2024<br>
      Hole Bean<br>
      Short Skirt Green Jacket<br>
      Two guys on a court 2<br>
      Rhymes with Orange<br>
      Pretzel Logic<br>
      Thin To Win<br>
      LIV 4 LIF<br>
      bsaundy<br>
      ForeOrr<br>
      TBD<br>
            </td>
            <td style="vertical-align: top; width: 272px; font-family: Verdana; text-align: center; color: black;">
            <!--  Copy team scores HERE -->
            -52<br>
    -50<br>
    -48<br>
    -47<br>
    -47<br>
    -45<br>
    -44<br>
    -43<br>
    -41<br>
    -40<br>
    -40<br>
    -40<br>
    -40<br>
    -40<br>
    -39<br>
    -39<br>
    -38<br>
    -38<br>
    -37<br>
    -37<br>
    -37<br>
    -37<br>
    -36<br>
    -36<br>
    -36<br>
    -36<br>
    -36<br>
    -36<br>
    -36<br>
    -36<br>
    -35<br>
    -35<br>
    -35<br>
    -35<br>
    -35<br>
    -35<br>
    -35<br>
    -35<br>
    -35<br>
    -34<br>
    -33<br>
    -33<br>
    -33<br>
    -33<br>
    -33<br>
    -32<br>
    -32<br>
    -32<br>
    -32<br>
    -32<br>
    -31<br>
    -31<br>
    -31<br>
    -31<br>
    -31<br>
    -30<br>
    -30<br>
    -30<br>
    -30<br>
    -30<br>
    -29<br>
    -29<br>
    -29<br>
    -29<br>
    -29<br>
    -28<br>
    -28<br>
    -27<br>
    -27<br>
    -27<br>
    -27<br>
    -27<br>
    -27<br>
    -27<br>
    -27<br>
    -27<br>
    -27<br>
    -27<br>
    -27<br>
    -27<br>
    -26<br>
    -26<br>
    -26<br>
    -26<br>
    -26<br>
    -26<br>
    -26<br>
    -26<br>
    -25<br>
    -25<br>
    -25<br>
    -25<br>
    -25<br>
    -25<br>
    -25<br>
    -25<br>
    -25<br>
    -24<br>
    -24<br>
    -24<br>
    -24<br>
    -24<br>
    -23<br>
    -23<br>
    -23<br>
    -23<br>
    -23<br>
    -23<br>
    -23<br>
    -22<br>
    -22<br>
    -22<br>
    -22<br>
    -21<br>
    -21<br>
    -21<br>
    -21<br>
    -21<br>
    -20<br>
    -20<br>
    -20<br>
    -20<br>
    -20<br>
    -20<br>
    -20<br>
    -20<br>
    -19<br>
    -19<br>
    -19<br>
    -19<br>
    -19<br>
    -19<br>
    -19<br>
    -19<br>
    -18<br>
    -18<br>
    -18<br>
    -18<br>
    -17<br>
    -17<br>
    -17<br>
    -17<br>
    -16<br>
    -16<br>
    -16<br>
    -16<br>
    -16<br>
    -16<br>
    -15<br>
    -15<br>
    -15<br>
    -15<br>
    -15<br>
    -14<br>
    -14<br>
    -14<br>
    -14<br>
    -13<br>
    -13<br>
    -13<br>
    -12<br>
    -12<br>
    -12<br>
    -12<br>
    -11<br>
    -11<br>
    -11<br>
    -10<br>
    -10<br>
    -9<br>
    -9<br>
    -9<br>
    -8<br>
    -8<br>
    -7<br>
    -7<br>
    -7<br>
    -5<br>
    -4<br>
    -2<br>
    -1<br>
    0<br>
    4<br>
    6<br>
    MC<br>
    MC<br>
    MC<br>
    MC<br>
    MC<br>
    MC<br>
    MC<br>
    MC<br>
    MC<br>
    MC<br>
    MC<br>
    MC<br>
    MC<br>
    MC<br>
    MC<br>
    MC<br>
            </td>
            <td style="vertical-align: top; width: 272px; font-family: Verdana; text-align: center; color: #000000; background: #006600;">
                
              </td>
          </tr>
        </tbody>
      </table>
      <br>
      <br>
    </div>
  </body>
</html>
