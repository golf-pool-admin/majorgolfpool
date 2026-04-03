<!DOCTYPE html>
<html dir="ltr">
  <head>
   
    <meta http-equiv="content-type" content="text/html; charset=UTF8">
    <link rel="stylesheet" type="text/css" href="Masters2020.css">
    <title>2020 Masters Golf Pool</title>
    
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6822487033765586",
    enable_page_level_ads: true
  });
</script>
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
       <a href="https://www.masters.com" title="Patrick Smith, Getty Images"><img id="champ" src="images/dj2020champ.png"></a>
      <a href="https://www.masters.com title="2020 Master Logo"><img id="logo" src="images/Masters2020_Fall_logo_3.png"></a>
    
      <!-- Pool Title -->
      <h1>2020 Masters Golf Pool</h1>
      
      <!-- Pool location and Dates -->
      <h4 id="locationdate">Augusta National Golf Club<br>
      November 12-15, 2020</h4>  
      
      <!-- Pool Opening Blurb-->
      <p>Autumn leaves instead of spring azaleas. Welcome to the final major of the season, the 2020 Masters! Covid has provided this unique timing of what is usually
       a spring-time rite, but I'm looking forward to seeing the course in fall colours (or do you think the Masters committee will force some azaleas to bloom?).</p>
      <p>No par 3 tourney, no patrons, and no roars from Amen corner, but hopefully the lads will give us an exciting tournament, nonetheless. Will Bryson overpower? Will 
      Phil and Tiger compete? Will DJ, Brooks, or Rory show up? We'll see.</p>
      <p>Get your picks in now. Enjoy the final major of 2020. Fore!!!!</p>
      <p>(<a id="results" href="#view"><b>Click here</b></a> for the full background pic)</p>
      <p><br><br><br></p>
      
     <!-- H3 Pool and Golf Champ Placeholders-->
      <h3 style="text-align: center; ">Congrats to DJ, Masters Champ</h3>
      <h3 style="text-align: center; ">Congrats to Bryden Suits, Thin to Win, Pool Champ</h3>
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
      <p><b id="lnews">Latest Pool News:</b><b> 2020-11-15 04:56:31pm </b> Tiger Woods and I both have something in common: scoring 10 on a par 3! That was about the only flurry of excitement in today's final round. DJ played solid, smart golf, and it was never in doubt, really. Congrats to him on his second major and his first green jacket.
        <br><br>
        To the pool: Congrats to pool champ, Bryden Suits, and his team "Thin to Win" - amazingly, Bryden did not have DJ on his team, but still pulled out the win. In second is team Factory Girl. And Chris Case's team Caser2 takes third. No need for the winning score pick to decide anything.<br>  
        <br>
        See how your team fared on the Rd 4 Scores link below. I did a quick double-check and all look okay. Hopefully, see everybody in April. Fore!<br><br>
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
                <a id="results" href="#Round4Results">Click here for Full
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
              136
            </td>
            <td style="text-align: left; width: 523px; vertical-align: top; font-family: Verdana; color: black;">
                 Thin To Win<br>
      Factory Girl<br>
      Caser2<br>
      Nezanga<br>
      Nezagre<br>
      Gringo's Guesses<br>
      whitevale<br>
      ViperKim<br>
      November Nandina<br>
      GlenCedar1<br>
      Atigerk<br>
      Heating up<br>
      Candy's Guys<br>
      Be Best.&nbsp; Or at least beat Tom 'Ace' Currie<br>
      King Kumar and the Lords of Golf<br>
      Nflrs#2<br>
      Cleviedog<br>
      White Walkers<br>
      McCauley<br>
      Taxi<br>
      His Master's Voice<br>
      Curt's Team<br>
      Mankee<br>
      Team Mulligan<br>
      Coolum<br>
      The Jerman and the Gew<br>
      Lem23<br>
      Augusta Autumn<br>
      Sniper Sucks<br>
      Mr R Sole<br>
      Georgia On My Mind<br>
      Grip it and rip it.<br>
      Duckhook<br>
      Murph1<br>
      Nflers#1<br>
      Steel Magnolia<br>
      Fall Classic<br>
      Up and Downers<br>
      Three (3) Out Of The Sand<br>
      Lenni finally made the green<br>
      19th hole<br>
      Master Blaster<br>
      Sniper<br>
      Tiger Town<br>
      Hot4Tiger<br>
      Hipster<br>
      Linkster<br>
      Augusta's Gloop<br>
      The Real Kap Squad<br>
      GlenCedar<br>
      Pool Man<br>
      Mud Ballz<br>
      Par3 Golfing Solutions<br>
      PapaG's Men<br>
      Winbabywin<br>
      Crouching Tiger<br>
      Still away<br>
      Rennie<br>
      Pimento Pete<br>
      Johnson Rahms Douchambo<br>
      Loochman<br>
      Slice and Dice<br>
      The B-52 Open<br>
      Chimpo<br>
      Kappy's Crew<br>
      In da Woods<br>
      The shivering hits<br>
      Be Better.<br>
      Crouching Tiger Sucks<br>
      Kuku<br>
      Listen to your Wife<br>
      I hit bombs<br>
      The Big Show<br>
      Natural Hazards<br>
      Nose<br>
      The Hawk<br>
      A bugs life<br>
      Mark's Master Picks<br>
      My Luck<br>
      Murph2<br>
      JB 3<br>
      Bad Lies<br>
      Ballantrae2<br>
      Augustus Novembrus<br>
      Nezanator<br>
      Chilli Dip<br>
      Wolf<br>
      PINSEEKER<br>
      Nosette<br>
      Tee the Ball<br>
      Joe Briden Elect<br>
      Pimento Pampas<br>
      Candy's Guys 2<br>
      Sweet Lou's Winners<br>
      NFLER#4<br>
      Ahhshoot<br>
      bi an liathroid<br>
      Greene on the Green<br>
      Winehog<br>
      RAZOR<br>
      Pimento Pars<br>
      Sweet Georgia Peach<br>
      Bomb and Gauge<br>
      Viridi Lorica<br>
      JB1<br>
      Blind Squirrel<br>
      Sandy Par<br>
      Send IT !!!<br>
      Linsmore<br>
      Taco Boy<br>
      hanks hackers<br>
      Pool Noodle<br>
      111SIVAT111<br>
      DreamTeam<br>
      Joe's picks<br>
      SWINGER<br>
      Young Guns<br>
      The underdoga<br>
      I hit bombs sucks<br>
      nuckles<br>
      The Carl Spacklers<br>
      the old dirty buzzards<br>
      Fore Franktown<br>
      DreamTeam2<br>
      JB 2<br>
      Jeff Gallant<br>
      Tiffs Tweets<br>
      Dodge Rham<br>
      Kimba<br>
      Fall renovations<br>
      fancy putter<br>
      Lefty<br>
      Team Dust<br>
      Stroke of Luck<br>
      Murphy's Magic<br>
      Kimbo Slice It Right<br>
            <!--  Copy team results HERE -->
            
            </td>
            <td style="vertical-align: top; width: 272px; font-family: Verdana; text-align: center; color: black;">
                -79<br>
      -78<br>
      -77<br>
      -76<br>
      -74<br>
      -74<br>
      -74<br>
      -73<br>
      -73<br>
      -72<br>
      -72<br>
      -71<br>
      -70<br>
      -70<br>
      -69<br>
      -69<br>
      -69<br>
      -69<br>
      -68<br>
      -67<br>
      -67<br>
      -67<br>
      -66<br>
      -66<br>
      -65<br>
      -65<br>
      -64<br>
      -64<br>
      -64<br>
      -63<br>
      -62<br>
      -62<br>
      -62<br>
      -62<br>
      -61<br>
      -61<br>
      -60<br>
      -60<br>
      -60<br>
      -59<br>
      -59<br>
      -59<br>
      -58<br>
      -58<br>
      -58<br>
      -58<br>
      -58<br>
      -58<br>
      -57<br>
      -56<br>
      -56<br>
      -56<br>
      -56<br>
      -56<br>
      -55<br>
      -55<br>
      -55<br>
      -55<br>
      -55<br>
      -54<br>
      -54<br>
      -54<br>
      -54<br>
      -54<br>
      -53<br>
      -53<br>
      -53<br>
      -53<br>
      -53<br>
      -53<br>
      -52<br>
      -52<br>
      -52<br>
      -51<br>
      -51<br>
      -51<br>
      -51<br>
      -51<br>
      -51<br>
      -51<br>
      -51<br>
      -51<br>
      -50<br>
      -50<br>
      -50<br>
      -50<br>
      -50<br>
      -50<br>
      -50<br>
      -50<br>
      -50<br>
      -50<br>
      -49<br>
      -49<br>
      -48<br>
      -48<br>
      -48<br>
      -47<br>
      -47<br>
      -47<br>
      -47<br>
      -46<br>
      -46<br>
      -46<br>
      -46<br>
      -46<br>
      -45<br>
      -45<br>
      -45<br>
      -44<br>
      -44<br>
      -44<br>
      -44<br>
      -43<br>
      -43<br>
      -43<br>
      -42<br>
      -42<br>
      -42<br>
      -42<br>
      -41<br>
      -41<br>
      -40<br>
      -39<br>
      -39<br>
      -38<br>
      -37<br>
      -36<br>
      -36<br>
      -33<br>
      -33<br>
      -31<br>
      -31<br>
      -29<br>
      -25<br>
      -21<br>
            <!--  Copy team scores HERE -->
           
            </td>
            <td style="vertical-align: top; width: 272px; font-family: Verdana; text-align: center; color: #000000; background: #006600;">
             <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    
             <p></p>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- Round table ad -->
              <ins class="adsbygoogle"
                style="display:inline-block;width:160px;height:600px"
                data-ad-client="ca-pub-6822487033765586"
                data-ad-slot="4745432556"></ins>
                <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <p><br><br><br></p>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- Round table ad -->
              <ins class="adsbygoogle"
                style="display:inline-block;width:160px;height:600px"
                data-ad-client="ca-pub-6822487033765586"
                data-ad-slot="4745432556"></ins>
                <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <p><br><br><br></p>
                 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- Round table ad -->
              <ins class="adsbygoogle"
                style="display:inline-block;width:160px;height:600px"
                data-ad-client="ca-pub-6822487033765586"
                data-ad-slot="4745432556"></ins>
                <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
              </td>
          </tr>
        </tbody>
      </table>
      <br>
      <br>
    </div>
  </body>
</html>
