
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <!-- <style> -->
  </head>
  <body>
    <span class="preheader"></span>
    <table class="body">
      <tr>
        <td class="center" align="center" valign="top">
          <center data-parsed="">
            <style type="text/css" align="center" class="float-center">
              body,
              html, 
              .body {
                background: #f3f3f3 !important;
              }
            </style>
            
            <table align="center" class="container float-center"><tbody><tr><td>
            
              <table class="spacer"><tbody><tr><td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td></tr></tbody></table> 
            
              <table class="row"><tbody><tr>
                <th class="small-12 large-12 columns first last"><table><tr><th>
                  <h1>Thanks for your order.</h1>
                  <p>Thanks for Booking with us! 
                  <table class="spacer"><tbody><tr><td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td></tr></tbody></table> 
            
                  <table class="callout"><tr><th class="callout-inner secondary">
                    <table class="row"><tbody><tr>
                      <th class="small-12 large-6 columns first"><table><tr><th>
                        <p>
                          <strong>Payment Method</strong><br>
                          Stripe
                        </p>
                        <p>
                          <strong>Email Address</strong><br>
                          <p><?php echo e($order->email); ?></p>
                        </p>
                        <p>
                          <strong>Order ID</strong><br>
                          <p><?php echo e($order->id); ?></p>
                        </p>
                        <p>
                          <strong>Your Phone Number</strong><br>
                          <p><?php echo e($order->phone_number); ?></p>
                        </p>
                      </th></tr></table></th>
                      <th class="small-12 large-6 columns last"><table><tr><th>
                       <!--  <p>
                          <strong>Shipping Method</strong><br>
                          Boat (1&ndash;2 weeks)<br>
                          <strong>Shipping Address</strong><br>
                          Captain Price<br>
                          123 Maple Rd<br>
                          Campbell, CA 95112
                        </p> -->
                      </th></tr></table></th>
                    </tr></tbody></table>
                  </th><th class="expander"></th></tr></table>
            
                  <h4>Order Details</h4>
            
                  <table>
                    <tr><th>Hotel</th><th>Price</th></tr>
                    <tr><td>Sub Total</td><td>Ksh <?php echo e(Cart::subtotal()); ?></td></tr>
                    <tr><td>Tax</td><td>Ksh<?php echo e(Cart::tax()); ?></td></tr>
                    <!-- <tr><td>Total</td><td>2</td><td>$100</td></tr> -->
                    <tr>
                      <td colspan="2"><b>Total Amount:</b></td>
                      <td><p><?php echo e(Cart::total()); ?></p> </td>
                    </tr>
                  </table>
            
                  <hr>
            
                  <h4>What's Next?</h4>
            
                  <p>OPLOS Booking is an online platform for conference,meeting, rooms and hotel booking .We always do our best to make sure our clients gets satisfactory services. </p>
                </th></tr></table></th>
              </tr></tbody></table>
              <table class="row footer text-center"><tbody><tr>
                <th class="small-12 large-3 columns first"><table><tr><th>
                  <a href="#"><img class="img-fluid" src="../images/l5.jpg" alt="logo"></a>
                </th></tr></table></th>
                <th class="small-12 large-3 columns"><table><tr><th>
                  <p>
                    Call us at 0700000000<br>
                    Email us at support@oplosbooking.com
                  </p>
                </th></tr></table></th>
                <th class="small-12 large-3 columns last"><table><tr><th>
                  <p>
                    Oplos Booking<br>
                    Njema Court R2  Rapta Road
                  </p>
                </th></tr></table></th>
              </tr></tbody></table>
            </td></tr></tbody></table>
            
          </center>
        </td>
      </tr>
    </table>
    <!-- prevent Gmail on iOS font size manipulation -->
   <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
   
  </body>
</html>

