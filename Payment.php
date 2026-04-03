<?php require_once('auth.php');?>


<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta content="text/html; charset=windows-1252" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" href="majorgolfpools2023.css">
    <style>
     
    
#stat{width: 80%; margin-left:10%; margin-right:10%; border-collapse: collapse; font-family: Verdana, Geneva, sans-serif; font-size: medium} 
      
ul.stat {
    list-style-type: disc; font-family: Verdana, Geneva, sans-serif; font-size: small; margin-left: 85px;
}

</style> 

<style>
.button {
  background-color: #006600;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

<title>2023 Masters Golf Pool - Payment!</title>
  </head>
  <body>
    <div class="center">
      <h1>Pool Fee Payment<a href="http://www.majorgolfpools.ca"><img id="home" title="Back to homepage"

            alt="Back to homepage" src="images/greenhome5.png"></a></h1>
      <p style="text-align: center;">Click the button below to pay for your pool entry!</p>
       <table id="stat">
        <tbody>
          <tr>
            <td>
              <div>
                <p>One of the most time-consuming aspects of running the pool is accounting for all the
                   pool fees. And 99% of the time all is great, everyone is prompt with e-transfers
                   or other means. However, I’m hoping that paying for the fee at the time of entry 
                   will help with the time-intensive reconciliation process.</p>
                <p>I’m using a third-party company called <a style="color: #006600" href="https://www.stripe.com">Stripe</a> that is designed to facilitate 
                  online transactions. It is completely secure and any payment details are handled
                  by them completely. I do not see or receive any card data.</p>
                <p>It is a paid service and the reason why I’m increasing the pool fee by 85 cents. 
                  The bulk of that increase goes to Stripe (68 cents per transaction). The 
                  remaining about will go towards hosting costs.</p>
                <p>If you’re still not comfortable using this service to pay your pool fee, please email me 
                  directly and we’ll make other arrangements.</p><br>
                <h3><a href="https://buy.stripe.com/test_cN26sfa9M2JG0hycMN" class="button">Submit Payment</a><br><br></h3>
                <p>Clicking the link takes you to an outside site and, after payment, returns you to the entry form. Thank you!</p><br><br>
                <h4>No thanks, maybe next time. Proceed direct to the <a style="color: #006600" href=Entry_Form_2.php>Entry Form</a>.</h4>
              </div>
            </td>
          </tr>
          <tr>
            <td>
            </td>
            <td>
            </td>
          </tr>
        </tbody>
      </table>
      <p><br>
      </p>
      <br>
    </div>
   
  </body>
</html>
