<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>KTech1</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css"> 
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
       	<link rel="stylesheet" type="text/css" href="style.css" />
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
         <nav>
           <div class="line">
               <div class="s-12 l-2">
                  <img class="s-5 l-12 center" src="img/logo.png">
                   <br>
               </div>
               <div class="top-nav s-12 l-10 right">
                  <p class="nav-text">Click to expand</p>
                  <ul class="right">
                     <li><a href="index.html">Home Page</a></li>
                     <li>
                        <a href="about.html">About Us</a>
                           </li>

                     <li>
                        <a href="FAQ.html">FAQ</a>
                        
                     </li>
                     <li><a href="contact.html">Contact Us</a></li>
                      <li><a href="Remote.html"><font color="red">Remote Help</font> </a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <!-- ASIDE NAV AND CONTENT -->
      <div class="line">
         <div class="box  margin-bottom">
            <div class="margin">
               <!-- ASIDE NAV 1 -->
               <aside class="s-12 l-3">
                  <h3>Navigation</h3>
                  <div class="aside-nav">
                     <ul>
                        <li><a>Home Services</a></li>
                        <li>
                           <a>Business Services</a>
                           <ul>
                              <li><a>Product 1</a></li>
                              <li>
                                 <a>Product 2</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a>Data Recovery</a>
                           
                        </li>
                        <li><a>Refrences</a></li>
                     </ul>
                  </div>
               </aside>
               <!-- CONTENT -->
               <section class="s-12 l-6">
           
                 <body>

    <?php include("../header.php"); ?>

	<div id="page-wrap">

		
	

						
		<div id="contact-area">
			
			<form method="post" action="contactengine.php">
				<table>
					<tr>
						<td class="left"><label for="Name">Name:</label></td>
						<td><input type="text" name="Name" /></td>
					</tr>
					<tr>
						<td class="left"><label for="City">City:</label></td>
						<td><input type="text" name="City" /></td>
					</tr>
					<tr>
						<td class="left"><label for="Email">Email:</label></td>
						<td><input type="text" name="Email" /></td>
					</tr>
					<tr>
						<td class="left"><label for="Message">Message:</label></td>
						<td><textarea name="Message" rows="20" cols="20"></textarea></td>
					</tr>
				</table>
				
				<div id="captcha-area">
				
				<?php
				
				require_once('recaptchalib.php');
				$publickey = "6LdmigAAAAAAAHJEZiIdo6bYZtwReBZavbXxGacx";
				$privatekey = "6LdmigAAAAAAAPTBvc0XBOdlKn5dPyTgazNvmHBx";
				
				# the response from reCAPTCHA
				$resp = null;
				# the error code from reCAPTCHA, if any
				$error = null;
				
				# are we submitting the page?
				if ($_POST["submit"]) {
				  $resp = recaptcha_check_answer ($privatekey,
												  $_SERVER["REMOTE_ADDR"],
												  $_POST["recaptcha_challenge_field"],
												  $_POST["recaptcha_response_field"]);
				
				  if ($resp->is_valid) {
					echo "You got it!";
					# in a real application, you should send an email, create an account, etc
				  } else {
					# set the error code so that we can display it. You could also use
					# die ("reCAPTCHA failed"), but using the error message is
					# more user friendly
					$error = $resp->error;
				  }
				}
				echo recaptcha_get_html($publickey, $error);
				?>
				
				</div>
								
				<input type="submit" name="submit" value="Submit" class="submit-button" />
			</form>
		
		</div>
	
	</div>
	
	<?php include("../footer.php"); ?>

                   
                   
                   
                   
                   
                   
                   
               </section>
               <!-- ASIDE NAV 2 -->
               <aside class="s-12 l-3">
                 
                  <div class="aside-nav">
  
                  </div>
               </aside>
            </div>
         </div>
          <div><p align="center"><font color="white"> &copy; KTech1 </font> </p>
      </div> 
      <!-- FOOTER -->
      <footer class="box">
         <div class="line">
           
            <div class="s-12 l-6">
               <a class="right"  framework"></a>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="js/responsee.js"></script>
   </body>
</html>