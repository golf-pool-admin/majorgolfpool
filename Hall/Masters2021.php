<!DOCTYPE html>
<html dir="ltr">
  <head>
   
    <meta http-equiv="content-type" content="text/html; charset=UTF8">
    <link rel="stylesheet" type="text/css" href="Masters2021.css">
    <title>2021 Masters Golf Pool</title>
    
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
       <a href="https://www.masters.com" title="Patrick Smith, Getty Images"><img id="champ" src="images/hideki2021.png"></a>
      <a href="https://www.masters.com" title="2021 Masters Logo"><img id="logo" src="images/MastersTournamentLogo.svg__88x111.png"></a>
    
      <!-- Pool Title -->
      <h1>2021 Masters Golf Pool</h1>
      
      <!-- Pool location and Dates -->
      <h4 id="locationdate">Augusta National Golf Club<br>
      April 8-11, 2021</h4>  
      
     <!-- Pool Opening Blurb-->
     <p>Youth versus experience appears to be the Sunday theme of late, with muscle-bound Bryson playing the role of cherubic 
        babe and Lee Westwood that of father time. It would be nice if Lee could keep up the play and challenge at Augusta, where 
        he’s played well in years past. But lots of other young guns awaiting the challenge. As always, we await the coming 
        storyline that get written on Amen corner, Sunday afternoon.</p>
      <p>Still no par 3 tourney, and Tiger will most-certainly be out for the champions’ dinner, but a select few patrons will be 
        allowed to roam the pine straw. It’s been nice to see the crowds back on the course during the Florida swing. Should be 
        great to hear a few roars on the course.</p>
      <p>Get your picks in now. Enjoy the first major of the 2021. As it should be. Fore!!!!</p>
      <p>(<a id="results" href="view.html"><b>Click here</b></a> for the full background pic)</p>
      <p><br><br><br></p>
      
     <!-- H3 Pool and Golf Champ Placeholders-->
     <h3 style="text-align: center; ">Congrats to Hideki Matsuyama, Masters Champ!! </h3>
      <h3 style="text-align: center; ">Congrats to Mean Mr Mustard, Andrew P., Pool Champ!</h3>
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
      <p><b id="lnews">Latest Pool News:</b><b>2021-04-11 08:19:04pm</b> 
  Congratulations to Hideki Matsuyama for winning his first major tournament! After that initial tee shot, I was thinking that 
  might not be the case, but those extra strokes came in handy -- along with some solid play (as well as shaky) -- to finish 
  things off by one on 18. Xander was really close there, but, oh my, 16; Zalatoris played some lights-out golf, too, for the rookie. 
  Not a bad Masters.
        <br><br>
        To the pool!! To my surprise, our 3rd round leaders both dropped out of the lead, and in popped Mean Mr. Mustard. 
        Andrew Palmer's team was lurking in 10th after 3 rounds, but recorded a solid win with Hideki, Jordan, 
        and -- the key -- Jon Raham, who carded a six under score today, on his team. Congrats, Andrew. 
        Teams PokerGolfDR and Smitty 76 take 2nd and 3rd; Longballs and Jojo take 4th and 5th.<br>  
        <br>
        All your team and player scores available on the Round 4 Results page<br><br>
        Hope everyone enjoyed the pool. Maybe one more over the season. Not much else to do, alas. Fore!!!!<br><br>    
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
            </td>
            <td style="text-align: left; width: 523px; vertical-align: top; font-family: Verdana; color: black;">
  
            <!--  Copy team results HERE -->
            <b>Mean Mr. Mustard</b><br>
      PokerGolfDR (-11)<br>
      Smitty 76 (-13)<br>
      Long Balls Lemay (-12)<br>
      JoJoforthewin (-7)<br>
      Best Week in Golf (-14)<br>
      Pandemonium 2 (-16)<br>
      Pauly 2012 Patron<br>
      Skulled It<br>
      JB2KB<br>
      Master Putter<br>
      myluck<br>
      Sweet Georgia Peach<br>
      CoachScott<br>
      Neillsean<br>
      Loblolly Cones<br>
      National Pines<br>
      Fighting Major One<br>
      Pool Girl<br>
      laxcall48<br>
      Habitants<br>
      MasterBlaster<br>
      Release the Hounds!<br>
      "SEND IT" !<br>
      Pool man<br>
      Wrong Hole Fool!<br>
      PayMay1<br>
      Hot Potatoes<br>
      Unc<br>
      Baby Eating Dingos<br>
      Barrie Bomber<br>
      Sweet Lou's Winners<br>
      Al's Pick<br>
      Linsmore 2<br>
      Pimento Butty<br>
      Queen Orvas Revenge<br>
      Bob Cross<br>
      In Da Woods<br>
      LJ<br>
      Blooming Azaleas<br>
      Kimba<br>
      JB1<br>
      Rubbertoe<br>
      Bleacher Sleeper<br>
      Mark's Master Picks 21<br>
      Sandy Hill<br>
      Dodge Rahm<br>
      Packing Hammers And Driving My Truck<br>
      KHRR-2<br>
      Roscoe<br>
      Golden Girls<br>
      The Jerman the Gew<br>
      Kappy's Crew<br>
      Atigerk<br>
      Magnolia Mayhem<br>
      Magnificent<br>
      His Masters' Voice<br>
      Nezanator<br>
      Hot4Tiger<br>
      Young Guns<br>
      Par 3 Golfing Solutions<br>
      Litzy99<br>
      Couldabins<br>
      Shouldabins<br>
      M3<br>
      Candy's Guys<br>
      NFLERS#1<br>
      Up Yours Covid<br>
      Greene on the Green<br>
      Steel Magnolia<br>
      Number 1 Balls in Golf<br>
      Golfing Granny<br>
      Mankee<br>
      Granny<br>
      Gringo's Guesses<br>
      Sandbaggers<br>
      Gimme a Five<br>
      Lefty<br>
      Magnificent 2<br>
      PINSEEKER<br>
      Driving Mr.Woods<br>
      Nflrs#2<br>
      4th and Long<br>
      Taxi<br>
      Listen To Your Wife!<br>
      Mayday<br>
      Seabass<br>
      bi an liathroid<br>
      Natural Hazards<br>
      Grinder<br>
      Eisen's Haiziz<br>
      Mature Evacuator<br>
      Murphy's&nbsp; Magic<br>
      Chimpo<br>
      Gain a Grip<br>
      Linsmore<br>
      whitevale<br>
      Thin To Win<br>
      Factory Girl<br>
      Big man<br>
      Murph<br>
      Cleviedog<br>
      KuKu<br>
      Tee the Ball<br>
      BabSocks<br>
      Team Danny Willett<br>
      Ninteenth hole<br>
      Kind Red Bud<br>
      Belgreen Jacket<br>
      My Husband Made Me Do It !<br>
      Winners<br>
      Crouching Tiger<br>
      Bryson Baby<br>
      robin banks<br>
      KHRR-1<br>
      Chloe's Champs<br>
      The big Show<br>
      PayMay<br>
      BITE<br>
      Been a Long Time Since I Rock and Rolled<br>
      Nezzie<br>
      The Hawk<br>
      Pimento Peach<br>
      Go4Glory<br>
      Skis Be Gone-&nbsp; Golf Time!<br>
      Coolum<br>
      DJ's Menu<br>
      Caser2<br>
      111**SIVAT**111<br>
      Dormy Dude<br>
      Beezow Doo-Doo Zoppitybop-Bop-Bop Zowa Bup-Bup Cow<br>
      NFLer#4<br>
      THENOSE<br>
      Sandy Par<br>
      The Carl Spacklers<br>
      MOG<br>
      Rennie<br>
      Clifford's Last Shot<br>
      Fighting Major Two<br>
      Candy's Guys II<br>
      WINBABYWIN<br>
      Eva's Boys<br>
      Metal maniac<br>
      Von<br>
      Rollofthedie<br>
      ViperKim<br>
      Bobby Jones (A)<br>
      Mr R Sole<br>
      Heating up<br>
      DONT KNOW **** ABOUT GOLF<br>
      The Hateful Eighteen<br>
      Master DeBater<br>
      Sniper<br>
      Killa picks<br>
      Twin Peaks<br>
      White Walkers<br>
      JB3<br>
      hanks hackers<br>
      The A team<br>
      GrooGrux<br>
      Wayner Is My Best Friend<br>
      Bad Dog Legs (-6)<br>
      Green With Envy (-11)<br>
      Tiffs Tweets (-14)<br>
      M1 (-16)<br>
      Slice and dice (-17)<br>
      M2 (-17)<br>
            </td>
            <td style="vertical-align: top; width: 272px; font-family: Verdana; text-align: center; color: black;">
  
            <!--  Copy team scores HERE -->
            -39<br>
    -36<br>
    -36<br>
    -33<br>
    -33<br>
    -33<br>
    -33<br>
    -32<br>
    -31<br>
    -31<br>
    -30<br>
    -30<br>
    -29<br>
    -28<br>
    -28<br>
    -28<br>
    -28<br>
    -27<br>
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
    -25<br>
    -25<br>
    -25<br>
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
    -22<br>
    -21<br>
    -21<br>
    -21<br>
    -21<br>
    -21<br>
    -21<br>
    -21<br>
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
    -17<br>
    -17<br>
    -17<br>
    -17<br>
    -17<br>
    -17<br>
    -17<br>
    -17<br>
    -17<br>
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
    -14<br>
    -14<br>
    -13<br>
    -13<br>
    -13<br>
    -13<br>
    -12<br>
    -12<br>
    -12<br>
    -12<br>
    -12<br>
    -12<br>
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
    -10<br>
    -10<br>
    -10<br>
    -10<br>
    -10<br>
    -10<br>
    -9<br>
    -9<br>
    -9<br>
    -8<br>
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
    -6<br>
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
    -2<br>
    -1<br>
    0<br>
    0<br>
    0<br>
    1<br>
    4<br>
    6<br>
    7<br>
    7<br>
    8<br>
    10<br>
    11<br>
    14<br>
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
