<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF8">
    <link rel="stylesheet" type="text/css" href="masters2023.css">
    <title>2023 Masters Golf Pool</title>  
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
  ?> 

<body>
<!-- First Div - Header and Opening Blurb -->
    
    <div class="center">
    
    <!-- Logo and Champion Images -->
      <a href="https://www.masters.com" title="AP Photo/Charlie Riedel"><img id="champ" src="images/rahm_2023.png"></a>
      <a href="https://www.masters.com" title="2022 Masters Logo"><img id="logo" src="images/MastersTournamentLogo.svg__88x111.png"></a>
    
    <!-- Pool Title -->
     <h1>2023 Masters Golf Pool</h1>
      
    <!-- Pool location and Dates -->
      <h4 id="locationdate">Augusta National Golf Club<br>
      April 6-9, 2023</h4>  
      
      <!-- Pool Opening Blurb-->
      <p>Welcome to the pool! A fun opportunity to showcase your golf knowledge and 
        gain bragging rights amongst your foursome. Good, clean, entertainment for the 
        whole family.
      </p>
      <p>LIV is on its second season and continues 
        to provide disruption and sniping between the pros and media. I’m looking 
        forward to seeing the best players in the world compete at this year’s tourney.
         But, as my ol’ pal and past pool champ, Ian McLean, suggested, the real 
         action may take place during the Champions’ dinner – a true pay-per-view event 
         I’d like to see.
        </p>
        <p>Happy spring everyone. Enjoy the golf and the pool. Fore!!
          (<a id="results" href="#view.html"><b>Click here</b></a> for the full background pic.)</p>
      <p><br><br><br></p>
      
           <!-- H3 Pool and Golf Champ Placeholders-->
      <h3 style="text-align: center; ">Congrats to Jon Rahm, Masters Champ! </h3>
      <h3 style="text-align: center; ">Congrats to Yung Kap, Pool Champ! </h3>
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
      <p><b id="lnews">Latest Pool News:</b><b>2023-04-10 08:13:56am</b> 
      Congrats to Jon Raham on his first Masters victory. I was hoping for more of a duel 
      from Koepka, but still a great tourney. A nice round by Phil to post an early number, but not enough.
        <br><br>
        To thee pool: congrats to team Yung Kap on his first Masters pool win! 
        Team INTERNATIONALS and gothatton in 2nd and 3rd, thanks to winning 
        score pick. And our good sport award goes to team Putt it in!
        <br><br>
        All your player and team results at the page below. Another pool in the books. Hope everyone enjoyed the pool 
        despite a few site hiccups. Hopefully, will get to another one this season. Fore!!<br><br>
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
              5<br>
              5<br>
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
            </td>
            <td style="text-align: left; width: 523px; vertical-align: top; font-family: Verdana; color: black;">
            <!--  Copy team results HERE -->
            Yung Kap<br>
            INTERNATIONALS (-14)<br>
      GotaHatton (-7)<br>
      Mankee<br>
      bsaundy (-16)<br>
      #2 Balls in Golf (-8)<br>
      We BeLeaf<br>
      Babsocks<br>
      Harrington<br>
      jd picks<br>
      M1<br>
      Knutson 3<br>
      Kids in a Sandbox<br>
      Nezanator #1<br>
      Sweet Georgia Peach<br>
      Candy's Guys<br>
      ViperKim2<br>
      Unsportsmanlike Conduct<br>
      Listentoyourwife<br>
      Lj dolphins<br>
      ForeOrr<br>
      LIV or die!<br>
      Back nines matter<br>
      West of Woodbine<br>
      Lady Tiny Hands<br>
      Mud Balls<br>
      The Carl Spacklers<br>
      hanks hackers<br>
      Kappy's Crew<br>
      And the winner is ...<br>
      Rune power<br>
      Bobaloo<br>
      Pinata Colada<br>
      Razor<br>
      MC2BRIDE<br>
      Luvthegreens<br>
      From Saudi Arabia and Back Again<br>
      Polythene Pam<br>
      Girl power<br>
      Lefty<br>
      Kizzy's winners<br>
      The Outsiders<br>
      underdogs<br>
      LILAC<br>
      19th hole<br>
      Chloe's Champs<br>
      Wild Wings<br>
      Mrs Dolphins<br>
      Antediluvian<br>
      Cinnamon 2<br>
      Nodoubles<br>
      Heating up<br>
      Top Gun<br>
      IWILLWIN<br>
      Team hustle<br>
      AGO<br>
      Team Duster<br>
      Mcgillicuddies Buddy<br>
      Knutson 1<br>
      Unc<br>
      Seabass<br>
      Nflr#3<br>
      Tee to Green Jacket<br>
      Murphy's Magic<br>
      UP &amp; DOWN<br>
      Spanish Johnny<br>
      ThreefromtheTee<br>
      Chubbs Peterson<br>
      I Never Win<br>
      Par 59&nbsp; II<br>
      Eagle Highballs<br>
      LoLo<br>
      Team hustle99<br>
      Coolum<br>
      Natural Hazards<br>
      Young Guns<br>
      Sniper<br>
      Litzy<br>
      Dormy Dude<br>
      Nflrs#2<br>
      Pickleball 365!<br>
      Maizie's Buzzin'<br>
      Cliff's Aces<br>
      Chimpo<br>
      Tiffs Tweets<br>
      Screw LIV, I am playing with Blake LIVely<br>
      Grand Master2<br>
      M2<br>
      M3<br>
      Cinnamon 1<br>
      Grammas picks<br>
      Fore9!<br>
      Short Skirt Green Jacket<br>
      Mark's Masters Picks<br>
      Lakeside<br>
      Maypay<br>
      His Masters Voice<br>
      Nezanator<br>
      Gain a Grip<br>
      Imback<br>
      Steel Magnolia<br>
      Justonetime<br>
      Justinthenickoftime<br>
      KPOP<br>
      Tea Olive<br>
      Grand Master 3<br>
      Tigers Leg<br>
      Pimento Pete<br>
      Candy's Guys II<br>
      Foreplay<br>
      Lager Lady<br>
      Als Pick<br>
      Champs Pensacola Pics<br>
      Back 9's matter x2<br>
      Neverup Neverin<br>
      Brubuzz100<br>
      Happy Gilmore<br>
      Nezanator#5<br>
      Fore2!<br>
      JB 1<br>
      Kuku Loves Europe Asia<br>
      Papa G<br>
      The Green Jacket Gang<br>
      Tin Cup<br>
      Packing Hammers and Driving my Truck<br>
      Amen Corner<br>
      Granny's Greats<br>
      PAYMAY<br>
      Team Danny Willet<br>
      PokerGolfDR2<br>
      Belgreen Jacket<br>
      Team Danomite<br>
      ScheffleMeSome$<br>
      Triple Bogey<br>
      Cleviedog<br>
      Greene on the Green<br>
      Factory Girl<br>
      Don't Rory Be Happy II<br>
      Siiiiii WOOOOOOOoO KiiiiiiiiiiiiiiiiMmmMmMm<br>
      The Big Show<br>
      Mastermomof3<br>
      ViperKim1<br>
      Knutson 2<br>
      JOHN<br>
      JB2<br>
      Rennie<br>
      Dog-Lefty<br>
      TAS<br>
      Willman's Team<br>
      Rails and Ales<br>
      Tee the Ball<br>
      BirdieCollector<br>
      Put me down for a 10<br>
      How Does Annie Do It<br>
      See Hoo Win<br>
      The Hawk<br>
      Easter Bunny<br>
      Par 59<br>
      Sweet Lou's Winners<br>
      Betterthanmost<br>
      Frida's Flowers<br>
      Grand Master<br>
      WINBABYWIN<br>
      Hot4Tiger<br>
      Phantom of the Open<br>
      Happy Gilmour<br>
      Lenni finally made the green<br>
      #1 Balls in Golf<br>
      Groogruxking<br>
      Jai Alai Hoi Polloi<br>
      Don't Rory Be Happy<br>
      Bobby Locke<br>
      Leo<br>
      Sweet Eagle<br>
      Cedarhill1962<br>
      Par 3 Golfing Solutions<br>
      Mean Mr. Mustard<br>
      Nightking<br>
      Ricky Bobby<br>
      Tough Choices<br>
      Two Tone<br>
      Niners<br>
      Win Moo Nee<br>
      Team Fukunata<br>
      The Green Jackets<br>
      In Da Woods<br>
      The Jerman and the Gew<br>
      Whitewalkers<br>
      Ron Burgundy<br>
      Sry eh<br>
      All Teed Up<br>
      bheith ar an liathroid<br>
      Sandy Par<br>
      CoachScott<br>
      Fin for the Win<br>
      PINSEEKER<br>
      BaBaBooey49<br>
      R Sole<br>
      PokerGolfDR<br>
      Gringo's Guesses<br>
      Bubba<br>
      Crouching Tiger<br>
      Clifford's Last Shot<br>
      Long Balls Lemay<br>
      DingoKid<br>
      Putt it in there<br>
      AMERICANS<br>
            </td>
            <td style="vertical-align: top; width: 272px; font-family: Verdana; text-align: center; color: black;">
            <!--  Copy team scores HERE -->
            -39<br>
    -37<br>
    -37<br>
    -35<br>
    -34<br>
    -34<br>
    -32<br>
    -31<br>
    -30<br>
    -30<br>
    -29<br>
    -29<br>
    -29<br>
    -28<br>
    -28<br>
    -28<br>
    -28<br>
    -27<br>
    -27<br>
    -26<br>
    -26<br>
    -26<br>
    -26<br>
    -25<br>
    -25<br>
    -25<br>
    -25<br>
    -24<br>
    -24<br>
    -24<br>
    -24<br>
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
    -18<br>
    -18<br>
    -18<br>
    -18<br>
    -17<br>
    -17<br>
    -17<br>
    -16<br>
    -16<br>
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
    -15<br>
    -14<br>
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
    -11<br>
    -11<br>
    -11<br>
    -11<br>
    -11<br>
    -11<br>
    -11<br>
    -11<br>
    -11<br>
    -11<br>
    -11<br>
    -11<br>
    -10<br>
    -10<br>
    -10<br>
    -10<br>
    -10<br>
    -10<br>
    -9<br>
    -9<br>
    -9<br>
    -9<br>
    -9<br>
    -9<br>
    -9<br>
    -8<br>
    -8<br>
    -8<br>
    -8<br>
    -8<br>
    -8<br>
    -8<br>
    -8<br>
    -8<br>
    -8<br>
    -7<br>
    -7<br>
    -6<br>
    -6<br>
    -6<br>
    -6<br>
    -6<br>
    -5<br>
    -5<br>
    -5<br>
    -5<br>
    -5<br>
    -5<br>
    -5<br>
    -5<br>
    -5<br>
    -4<br>
    -4<br>
    -4<br>
    -4<br>
    -4<br>
    -4<br>
    -3<br>
    -3<br>
    -3<br>
    -2<br>
    -2<br>
    -2<br>
    -2<br>
    -1<br>
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
    2<br>
    2<br>
    2<br>
    2<br>
    2<br>
    4<br>
    4<br>
    4<br>
    5<br>
    5<br>
    5<br>
    5<br>
    8<br>
    8<br>
    8<br>
    10<br>
    11<br>
    11<br>
    12<br>
    12<br>
    12<br>
    13<br>
    14<br>
    15<br>
    16<br>
    17<br>
    18<br>
    18<br>
    19<br>
    22<br>
    27<br>
    MC (-12)<br>
    MC (-13)<br>
    MC (-16)<br>
    MC (-16)<br>
    MC (-21)<br>
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
