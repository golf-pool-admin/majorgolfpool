<!DOCTYPE html>
<html dir="ltr">
  <head>
   
    <meta http-equiv="content-type" content="text/html; charset=UTF8">
    <link rel="stylesheet" type="text/css" href="masters2022.css">
    <title>2022 Masters Golf Pool</title>
    
    
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
       <a href="https://www.masters.com" title="AP Photo/Charlie Riedel"><img id="champ" src="images/Scheffler-2022.png"></a>
      <a href="https://www.masters.com" title="2021 Masters Logo"><img id="logo" src="images/MastersTournamentLogo.svg__88x111.png"></a>
    
      <!-- Pool Title -->
      <h1>2022 Masters Golf Pool</h1>
      
      <!-- Pool location and Dates -->
      <h4 id="locationdate">Augusta National Golf Club<br>
      April 7-10, 2022</h4>  
      
      <!-- Pool Opening Blurb-->
      <p>So, is Phil suspended or not from the PGA Tour? His outspoken comments and flirtation with the Saudi’s raised Monahan’s ire, 
        and I wonder if  his time away from the game is truly self-imposed. I suppose it doesn’t matter, and I trust we’ll see him 
        well-rested and back in Augusta for the first major of the year.</p>
      <p>Also, congrats to Tiger Woods on his recent induction into the golf hall of fame, not a huge surprise by any means. 
        And there’s even some speculation that he’ll play at this year’s Masters, but we’ll need to wait and see. At least, 
        he’ll be able to attend the Champions’ dinner this year.</p>
        <p>Tiger and Phil … keeping things interesting as always.</p>
      <p>The pool is back! Check out the entry form, make your picks, and enjoy the first major of the year. Fore!</p>
      <p>(<a id="results" href="#view.html"><b>Click here</b></a> for the full background pic taken by yours truly back in the day.)</p>
      <p><br><br><br></p>
      
     <!-- H3 Pool and Golf Champ Placeholders-->
     <h3 style="text-align: center; "></h3>
      <h3 style="text-align: center; "></h3>
        <p> <br></p>
    </div>
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
      <p><b id="lnews">Latest Pool News:</b><b>2022-04-10 08:14:45pm</b> 
      Congratulations to Scottie Scheffler, who was remarkably composed all round, withstood the major pressure, and 
      came home with the green jacket! A fun day of golf out there, with Rory going low, drama on 12, back-nine roars, 
      and Nick Faldo spoiling Rory's hole-out. Not a bad tourney!
        <br><br>
        To the pool: With some serious score fluctuations, we do get some big changes in pool places. Congrats to 
        Jennifer's team, Lady Tiny Hands, who takes first in the pool (by her winning score pick, too). In second 
        is Ryan's team, Phil the Drink, and in 3rd, is Mary Ann's team, The Green Jacket. The winning score tie-breaker 
        pick coming in to help with the order. And, I hope I didn't jinx you, Josh, with my wire-to-wire comment.
        <br><br>
        All the team players and team scores are available below on the Round 4 Results page. I'll double-check the 
        scores tomorrow and make sure everything is okay. Hope everyone enjoyed the pool. See you next time! Fore!!!!<br><br>
      </p>
    </div>
    <div class="center">
      <h2>&nbsp;Round 4 - Results</h2>
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
            <td style=" width: 523px;"> <span style="font-weight: bold; font-family: Verdana;">TEAMS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a id="results" href="#Round4Results.html">Click here for Full
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
              201<br>
              202<br>
              203<br>
              204<br>
              205<br>
              206<br>
              207<br>
              208<br>
              209<br>
              210<br>
              211<br>
              212<br>     
            </td>
            <td style="text-align: left; width: 523px; vertical-align: top; font-family: Verdana; color: black;">
            <b>Lady Tiny Hands (-10)</b><br>
            <b>Phil of Drink (-9)</b><br>
            <b>Green Jacket (-11)</b><br>
            <b>SultanOfSwing (-12)</b><br>
            <b>Tilman 1 (-14)</b><br>
            <b>Whitewalkers (-14)</b><br>
            <b> Heads to the Tee (-10)</b><br>
      The Hawk (-12_<br>
      Rennie (-13)<br>
      In Da Woods (-16)<br>
      Seabass 2<br>
      Steely Magnolia<br>
      Eastern master<br>
      TML1<br>
      Chimpo<br>
      Neillsean<br>
      M2<br>
      Zoe<br>
      Better Than Most<br>
      Yung Kap<br>
      Unc C<br>
      Sunday back 9<br>
      Buller18<br>
      Taxi<br>
      bheith ar an liathroid<br>
      Timetowinone<br>
      Par3 Golfing Solutions<br>
      Jdubs<br>
      Go4Glory<br>
      Candy's Guys<br>
      Linsmore<br>
      TRUMPWON<br>
      Ms Maizle<br>
      Bleacher Sleeper<br>
      Lost in the Woods --&gt; The Return of Tiger, A Mot<br>
      Crouching Tiger<br>
      Papa G<br>
      Eldrick Paws<br>
      Chick with Sticks<br>
      MyGuysToo<br>
      Orva Redenbacher<br>
      Play Golf<br>
      Grip and Sip<br>
      Paula's Picks<br>
      Listen to your wife!<br>
      Holasuz<br>
      Rail &amp; Ales #2<br>
      19th&nbsp; Hole<br>
      Groogruxking<br>
      Maypay<br>
      Chubbs Peterson<br>
      The winne<br>
      Chloe's Champs<br>
      Factory Girl<br>
      MyGuys<br>
      Skis Be Gone<br>
      Al's Pick<br>
      Mrs. LJ<br>
      Sandy Par<br>
      Leafswinstanleycup<br>
      Tiffs Tweets<br>
      Mean Mr. Mustard<br>
      Send It<br>
      ForeOrr<br>
      G's Men<br>
      Natural Hazards<br>
      Florida<br>
      I Can Drive<br>
      KPOP<br>
      Masters of None<br>
      Lane's Lancers<br>
      Smokin' Jackets<br>
      Joe Vale<br>
      THRNOSER<br>
      Henley2Win<br>
      JB2<br>
      PokerGolfDR2<br>
      Masterton<br>
      VOLS2<br>
      Kappy's Crew<br>
      KuKu<br>
      Liz's Aces<br>
      Savannah Savvy<br>
      PokerGolfDR<br>
      Thin To Win<br>
      Litzy 2.<br>
      M1<br>
      Razor<br>
      greganator<br>
      Can't Go Rahm<br>
      Hot4Tiger<br>
      Termiinators<br>
      Long Balls Lemay<br>
      VOLS1<br>
      Springfield Bengals<br>
      Team fukunata<br>
      Gringo's Guesses<br>
      Go leafs go<br>
      Gimme Genie<br>
      Dormie Dude<br>
      Nezanator<br>
      The Villagers<br>
      Maiden Oils<br>
      Steel Magnolia<br>
      Defending Champion<br>
      Lucky Charms<br>
      Termiinators 2.0<br>
      FORE9!<br>
      Par 59&nbsp; II<br>
      NFLERS#1<br>
      Taxi 3<br>
      scarPARdown<br>
      Greene on the Green<br>
      Sry<br>
      Team JK<br>
      M3<br>
      Kelowna Cameron<br>
      Tiger FTW<br>
      Ryot<br>
      Caddy shack gopher<br>
      Heating up<br>
      igustawin<br>
      UBERGUY<br>
      Lostballs<br>
      Leonardo<br>
      Paulina<br>
      Bob Barker<br>
      Bikini Waxed Greens<br>
      Team Danomite<br>
      Taxi 2<br>
      Tybee Breakers<br>
      Sweet Georgia Peach<br>
      hanks hackers<br>
      myrtlegirl<br>
      Litzy<br>
      Packing Hammers and Driving my Truck<br>
      Smokin' Jackets Two<br>
      Positively Duffer<br>
      Danny Willett<br>
      TML2<br>
      Meteghan tiger<br>
      THEE Edmonton Oilers<br>
      Nflrs#2<br>
      Mark's Master Picks<br>
      weirwuzhere2<br>
      Third team long shot<br>
      Female Body Part -Rhymes with Zalatoris<br>
      Neon Coats<br>
      Lefty<br>
      Sweet Lou's Winners<br>
      Nezzie<br>
      Metal Maniac<br>
      Team Green!<br>
      Nolan H<br>
      ViperKim<br>
      Lefty55<br>
      Putters Rule<br>
      Win to a tee<br>
      Tilman 2<br>
      Indulgence<br>
      Murphy's Magic<br>
      Sniper<br>
      Bronco's Busters<br>
      Coach Scott<br>
      Mankee<br>
      CAN I USE MY HOCKEY STICK<br>
      His Master's Voice<br>
      Out of the Woods<br>
      Never too old<br>
      Angela H<br>
      My Mulligan<br>
      Highlands Links<br>
      Coolum<br>
      NFLer#4<br>
      Babsocks<br>
      MasterBlaster<br>
      Whitewalkers II<br>
      Snacks<br>
      Leo&nbsp; H<br>
      Beezow Doo-Doo Zoppitybop-Bop-Bop Zowa Bup-Bup Cow<br>
      Amen Corner<br>
      Number 1 Balls in Golf<br>
      Bad Dog Legs<br>
      R Sole<br>
      Gang Green<br>
      Gutterflies and Flutterbys<br>
      WINBABYWIN<br>
      Taxi1<br>
      Tee the Ball<br>
      Bobaloo. II<br>
      The Big Show<br>
      Augustas Gloop<br>
      First Cut<br>
      I Can't Golf<br>
      Rails &amp; Ales #1<br>
      Grip n Rip<br>
      Flog it<br>
      Spanish Johnny<br>
      Frida's Flowers<br>
      Big Rig<br>
      King Kumar and the Lords of Beat<br>
      Seabass<br>
      Young Guns<br>
      Frampton's Foot wedge<br>
      LJ<br>
      The A team<br>
      Cart Golf<br>
      Mason Nation<br>
      Bobaloo<br>
      Tiger's Mistress<br>
      Par 59<br>
      Robin banks<br>
            <!--  Copy team results HERE -->
           
            </td>
            <td style="vertical-align: top; width: 272px; font-family: Verdana; text-align: center; color: black;">
            -14<br>
    -14<br>
    -11<br>
    -11<br>
    -11<br>
    -11<br>
    -10<br>
    -10<br>
    -10<br>
    -10<br>
    -9<br>
    -8<br>
    -8<br>
    -8<br>
    -8<br>
    -7<br>
    -7<br>
    -7<br>
    -7<br>
    -7<br>
    -6<br>
    -5<br>
    -5<br>
    -4<br>
    -4<br>
    -3<br>
    -3<br>
    -3<br>
    -3<br>
    -2<br>
    -2<br>
    -2<br>
    -2<br>
    -2<br>
    -1<br>
    -1<br>
    0<br>
    0<br>
    0<br>
    0<br>
    0<br>
    0<br>
    0<br>
    0<br>
    1<br>
    1<br>
    1<br>
    1<br>
    1<br>
    1<br>
    1<br>
    1<br>
    2<br>
    2<br>
    2<br>
    2<br>
    2<br>
    2<br>
    3<br>
    3<br>
    3<br>
    3<br>
    3<br>
    3<br>
    4<br>
    4<br>
    4<br>
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
    5<br>
    5<br>
    5<br>
    6<br>
    6<br>
    6<br>
    6<br>
    6<br>
    7<br>
    7<br>
    7<br>
    7<br>
    7<br>
    7<br>
    7<br>
    7<br>
    7<br>
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
    10<br>
    10<br>
    10<br>
    10<br>
    10<br>
    10<br>
    10<br>
    11<br>
    11<br>
    11<br>
    11<br>
    11<br>
    11<br>
    11<br>
    11<br>
    11<br>
    12<br>
    12<br>
    12<br>
    12<br>
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
    18<br>
    18<br>
    18<br>
    18<br>
    18<br>
    18<br>
    18<br>
    19<br>
    19<br>
    20<br>
    20<br>
    20<br>
    20<br>
    20<br>
    21<br>
    21<br>
    21<br>
    22<br>
    22<br>
    22<br>
    22<br>
    23<br>
    23<br>
    24<br>
    25<br>
    25<br>
    25<br>
    25<br>
    26<br>
    27<br>
    28<br>
    28<br>
    29<br>
    29<br>
    29<br>
    29<br>
    30<br>
    32<br>
    32<br>
    33<br>
    33<br>
    33<br>
    35<br>
    37<br>
    39<br>
    40<br>
    41<br>
    44<br>
    46<br>
    MC<br>
            <!--  Copy team scores HERE -->
           
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
