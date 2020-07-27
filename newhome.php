
<?php
session_start();
require 'dbconfig/config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title></title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<style>
#more {display: none;}
</style>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.callout {
  position: fixed;
  bottom: 35px;
  right: 20px;
  margin-left: 20px;
  max-width: 250px;
}

.callout-header {
  padding: 20px 20px;
  background: #555;
  font-size: 30px;
  color: white;
}

.callout-container {
  padding: 10px;
  background-color: #ccc;
  color: black
}

.closebtn {
  position: absolute;
  top: 5px;
  right: 15px;
  color: white;
  font-size: 30px;
  cursor: pointer;
}

.closebtn:hover {
  color: lightgrey;
}
</style>
<style>
.dropbtn {
  background-color: white;
  color: grey;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: white;
}
</style>
  </head>
  <body>
<div class="w3l-bootstrap-header fixed-top">
  <nav class="navbar navbar-expand-lg navbar-light p-2">
    <div class="container">
     
        
    <a class="navbar-brand" href="newhome.php">
        <img src="assets\images\newlogo.png" class="logo" alt="Your logo" title="Your logo" style="height:70px;" />
    </a> 
	 <a class="navbar-brand" href="newhome.php"><span class="logo"></span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="padding-right:20px;">
          <li class="nav-item active">
            <a class="nav-link" href="newhome.php" >Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
		  
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        <div class="form-inline">
          <a href="" class="login mr-4" style="font-size:18px; padding-left:50px; ">Welcome, <?php echo $_SESSION['username'] ?> </a>
		  <form class="myform" action="newhome.php" method="post">
            <a href="newindex.php" style="padding-left:350px; "><input name="logout" value="Log Out" class="btn btn-primary btn-theme"></a>
			</form>
			 <?php
      if(isset($_POST['logout']))
      {
          session_destroy();
          header('location:newindex.php');
      }
      
      ?>
        </div>
      </div>
    </div>
  </nav>
</div>
<!-- index-block1 -->
<div class="w3l-index-block1">
  <div class="content py-5">
    <div class="container">
      <div class="row align-items-center py-md-5 py-3">
        <div class="col-md-5 content-left pt-md-0 pt-5">
          <p class="mt-3 mb-md-5 mb-4" style="font-size:18px;"> “മനുഷ്യൻ അപ്പംകൊണ്ടു മാത്രമല്ല, ദൈവത്തിന്റെ വായിൽകൂടി വരുന്ന സകലവചനംകൊണ്ടും ജീവിക്കുന്നു” <br>[ മത്തായി 4:4]
		  <br>
		  <br>
		  "ദൈവത്തിന്റെ വചനം ജീവനും ചൈതന്യവുമുള്ളതായി ഇരുവായ്ത്തലയുള്ള ഏതു വാളിനെക്കാളും മൂർച്ചയേറിയതും <span id="dots">...</span><span id="more">പ്രാണനെയും ആത്മാവിനെയും സന്ധിമജ്ജകളെയും വേറുവിടുവിക്കുംവരെ തുളെച്ചുചെല്ലുന്നതും ഹൃദയത്തിലെ ചിന്തനങ്ങളെയും ഭാവങ്ങളെയും വിവേചിക്കുന്നതും ആകുന്നു" <br> [എബ്രായർ 4:12]
		  </span></p>
		  <button onclick="myFunction()" id="myBtn" class="btn btn-primary btn-theme">Read more</button>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
        </div>
        <div class="col-md-7 content-photo mt-md-0 mt-5">
          <img src="assets\images\biblestudy.png" class="img-fluid" alt="main image">
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<!-- //index-block1 -->
<!-- index-block2 -->
<section class="w3l-index-block2 py-5">
  <div class="container py-md-3">
    <div class="heading text-center mx-auto">
      <h3 class="head">നിങ്ങൾക്ക് ലോകത്തെവിടെയും ഞങ്ങളെ ബന്ധപ്പെടാം </h3>
      <p class="my-3 head"> നിങ്ങളുടെ പ്രശ്നങ്ങൾക്ക് ഞങ്ങൾ പരിഹാരങ്ങൾ നൽകുന്നു</p>
    </div>
    <div class="row bottom_grids pt-md-3">
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="s-block">
          <a href="#blog-single.html" class="d-block p-lg-4 p-3">
            <img src="assets/images/personalprayer.jfif" alt="" class="img-fluid" />
            <h3 class="my-3">Personal Prayer<br>(വ്യക്തിപരമായ പ്രാർത്ഥന)</h3>
            <p class="">നിങ്ങളുടെ പ്രശ്നങ്ങൾ ഞങ്ങളുമായി പങ്കിടാൻ ഞങ്ങൾ നിങ്ങൾക്കായി പ്രാർത്ഥിക്കും</p>
			<a href="message.php"><button>click here</button></a>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="s-block">
          <a href="#blog-single.html" class="d-block p-lg-4 p-3">
            <img src="assets/images/287.jpg" alt="" class="img-fluid" style="height:200px;"/>
            <h3 class="my-3">Bible Reading<br>(ബൈബിൾ വായന)</h3>
            <p class="">നിങ്ങൾക്ക് ഞങ്ങളുടെ ദൈനംദിന ബൈബിൾ വായനാ പദ്ധതിയിലേക്ക് പ്രവേശിക്കാൻ കഴിയും</p>
			<a download href="assets/images/dailyreading1.png">
			<button class="btn"><i class="fa fa-download"></i> Download</button></a>
          </a>
        </div>
      </div>
      <div class="col-lg-4 mt-5">
        <div class="s-block">
          <a href="#blog-single.html" class="d-block p-lg-4 p-3">
            <img src="assets/images/images.jfif" alt="" class="img-fluid" style="height:200px;" />
            <h3 class="my-3">Group Prayer<br>(ഗ്രൂപ്പ് പ്രാർത്ഥന)</h3>
            <p class="">നൽകിയിരിക്കുന്ന സമയ ഷെഡ്യൂളുകൾ അടിസ്ഥാനമാക്കി നിങ്ങൾക്ക് ഞങ്ങളുടെ ഗ്രൂപ്പ് പ്രാർത്ഥനയിൽ ചേരാം.</p>
			<a href="message.php"><button>ഉടൻ അപ്‌ഡേറ്റുചെയ്യും.....</button></a>
          </a>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /index-block2 -->
<!-- content-with-photo17 -->

<!-- content-with-photo17 -->
 <div class="w3l-index-block4">
   <div class="features-bg py-5">
     <!-- features15 block -->
     <div class="container py-md-3">
       <div class="heading text-center mx-auto">
         <h3 class="head">Bible Sermons</h3>
         <p class="my-3 head"> Malayalam Christian Sermons. Listen, Share & Get Blessed !</p>
       </div>
       <div class="row">
         <div class="col-md-6 features15-col-text">
           <a href="#url" class="d-flex flex-wrap feature-unit align-items-center">
             <div class="col-sm-3">
               <div class="features15-info">
                 <img src="assets/images/unnamed.jpg">
               </div>
             </div>
             <div class="col-sm-9 mt-sm-0 mt-4">
               <div class="features15-para">
                 <h4>Audio</h4>
                 <p>You can listen our audio sermons for free</p>
               </div>
             </div>
           </a>
         </div>
         <div class="col-md-6 features15-col-text">
           <a href="#url" class="d-flex flex-wrap feature-unit align-items-center">
             <div class="col-sm-3">
               <div class="features15-info">
                <img src="assets/images/images.png">
               </div>
             </div>
             <div class="col-sm-9 mt-sm-0 mt-4">
               <div class="features15-para">
                 <h4>Video</h4>
                 <p>You can watch our video sermons</p>
               </div>
             </div>
           </a>
         </div>
         <div class="col-md-6 features15-col-text">
           <a href="#url" class="d-flex flex-wrap feature-unit align-items-center">
             <div class="col-sm-3">
               <div class="features15-info">
                <img src="assets/images/live.jpg">
               </div>
             </div>
             <div class="col-sm-9 mt-sm-0 mt-4">
               <div class="features15-para">
                 <h4>Live</h4>
                 <p>You can listen & watch live sermons</p>
               </div>
             </div>
           </a>
         </div>
         <div class="col-md-6 features15-col-text">
           <a href="#url" class="d-flex flex-wrap feature-unit align-items-center">
             <div class="col-sm-3">
               <div class="features15-info">
                 <img src="assets/images/youtube.png">
               </div>
             </div>
             <div class="col-sm-9 mt-sm-0 mt-4">
               <div class="features15-para">
                 <h4>Youtube</h4>
                 <p>You can also watch our sermons on youtube for free</p>
               </div>
             </div>
           </a>
         </div>
        
       </div>
       <div>
         <!-- features15 block -->
       </div>
     </div>
   </div>
 </div>
<!-- content-with-photo17 -->
<section class="w3l-index-block7 py-5">
  <div class="container py-md-3">
    <div class="row cwp17-two align-items-center">
      <div class="col-md-6 cwp17-text">
        <h2>സെഫന്യാവു 3:17</h2>
        <p>"നിന്റെ ദൈവമായ യഹോവ രക്ഷിക്കുന്ന വീരനായി നിന്റെ മദ്ധ്യേ ഇരിക്കുന്നു; അവൻ നിന്നിൽ അത്യന്തം സന്തോഷിക്കും; തന്റെ സ്നേഹത്താൽ അവൻ മിണ്ടാതിരിക്കുന്നു; ഉത്സവദിനത്തിലെപ്പോലെ അവൻ നിന്നിൽ ആനന്ദിക്കും"</p>
        <a href="#signup.html">Learn more &raquo;</a>
      </div>
      <div class="col-md-6 cwp17-image">
        <img src="assets/images/verses.jpg" class="img-fluid" alt="" />
      </div>
    </div>
  </div>
</section>
<!-- content-with-photo17 -->
<section class="w3l-index-block5">
  <!-- main-slider -->
  <div class="testimonials py-5">
    <div class="container text-center py-lg-3">
      <div class="heading text-center mx-auto">
        <h3 class="head">Thanks for visiting our website</h3>
      </div>
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="owl-one owl-carousel owl-theme">
            <div class="item">
              <div class="slider-info mt-lg-4 mt-3">
                <div class="img-circle">
                  <img src="assets/images/photo4.jpg" class="img-fluid rounded" alt="client image">
                </div>
                <div class="message">"അവന്‍ തന്നേ എന്റെ പാറയും എന്റെ രക്ഷയും ആകുന്നു; എന്റെ ഗോപുരം അവന്‍ തന്നേ; ഞാന്‍ കുലുങ്ങുകയില്ല" <br>[Pslams 62:6]</div>
                <div class="name">John Thomas</div>
              </div>
            </div>
            <div class="item">
              <div class="slider-info mt-lg-4 mt-3">
                <div class="img-circle">
                  <img src="assets/images/myphoto1.jpg" class="img-fluid rounded" alt="client image">
                </div>
                <div class="message">"പൂര്‍ണ്ണഹൃദയത്തോടെ യഹോവയില്‍ ആശ്രയിക്ക; സ്വന്ത വിവേകത്തില്‍ ഊന്നരുതു" [proverbs 3:5]</div>
                <div class="name">Aaron Thomas</div>
              </div>
            </div>
            
             
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /main-slider -->
</section>
<!-- partners -->

<!-- //partners -->
<!-- subscribe section -->
<section class="w3l-index-block6 py-5">
  <div class="container py-lg-3">
    <div class="subscribe mx-auto">
      <div class="heading text-center mx-auto">
        <h3 class="head">Stay Blessed! </h3>
        <p class="my-3 head"> Pls subscribe & you will get the notifications</p>
      </div>
      <form action="#" method="post" class="subscribe-wthree pt-2 mt-5">
        <div class="d-flex flex-wrap subscribe-wthree-field">
          <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
          <button class="btn form-control btn-primary" type="submit">Subscribe</button>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- //subscribe -->

<!-- index-block8 -->

<!-- / index-block8 -->
      <!-- footer-28 block -->
      <section class="w3l-market-footer">
        <footer class="footer-28">
          <div class="footer-bg-layer">
            <div class="container py-lg-3">
              <div class="row footer-top-28">
                <div class="col-md-6 footer-list-28 mt-5">
                  <h6 class="footer-title-28">Contact information</h6>
                  <ul>
                    <li>
                      <p><strong>Address</strong> : Thoppil Peedikayil ,Karthikappally ,Kerala ,India</p>
                    </li>
                    <li>
                      <p><strong>Phone</strong> : <a href="tel:+404-11-22-89">+919539539765</a></p>
                    </li>
                    <li>
                      <p><strong>Email</strong> : <a href="mailto:example@mail.com">tjohn8@yahoo.com</a></p>
                    </li>
                  </ul>

                  <div class="main-social-footer-28 mt-3">
                    <ul class="social-icons">
                      <li class="facebook">
                        <a href="#link" title="Facebook">
                          <span class="fa fa-facebook" aria-hidden="true"></span>
                        </a>
                      </li>
                      <li class="twitter">
                        <a href="#link" title="Twitter">
                          <span class="fa fa-twitter" aria-hidden="true"></span>
                        </a>
                      </li>
                      <li class="dribbble">
                        <a href="#link" title="Dribbble">
                          <span class="fa fa-dribbble" aria-hidden="true"></span>
                        </a>
                      </li>
                      <li class="google">
                        <a href="#link" title="Google">
                          <span class="fa fa-google" aria-hidden="true"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-4 footer-list-28 mt-5">
                      <h6 class="footer-title-28">Our missions</h6>
                      <ul>
                        <li><a href="mission.php">About</a></li>
                        <li><a href="#blog.html">Blog Posts</a></li>
                        <li><a href="#pricing.html">FAQ</a></li>
                      </ul>
                    </div>
                    
                   <div class="col-md-4 footer-list-28 mt-5">
                      <h6 class="footer-title-28">Support</h6>
                      <ul>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="team.php">Our team</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="midd-footer-28 align-center py-lg-4 py-3 mt-5">
              <div class="container">
                <p class="copy-footer-28 text-center"> &copy; 2020 BIBLE STUDY. All Rights Reserved. Design by <a
                    href="https://aaron592.github.io/thoppil/"><br>Aaron Thomas</a></p>
              </div>
            </div>
          </div>
        </footer>
<div class="callout">
  <div class="callout-header">BIBLE QUIZ</div>
  <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
  <div class="callout-container">
    <p> You can join our bible quiz program <a href="quiz.php">Learn more</a></p>
  </div>
</div>
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
          &#10548;
        </button>
        <script>
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () {
            scrollFunction()
          };

          function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("movetop").style.display = "block";
            } else {
              document.getElementById("movetop").style.display = "none";
            }
          }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }
        </script>
        <!-- /move top -->
      </section>
      <!-- //footer-28 block -->

      <!-- jQuery, Bootstrap JS -->
      <script src="assets/js/jquery-3.3.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>

      <!-- Template JavaScript -->
      
      <script src="assets/js/owl.carousel.js"></script>

      <!-- script for owlcarousel -->
      <script>
        $(document).ready(function () {
          $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
              0: {
                items: 1,
                nav: false
              },
              480: {
                items: 1,
                nav: false
              },
              667: {
                items: 1,
                nav: true
              },
              1000: {
                items: 1,
                nav: true
              }
            }
          })
        })
      </script>
      <!-- //script for owlcarousel -->

      <!-- disable body scroll which navbar is in active -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
      <!-- disable body scroll which navbar is in active -->

      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script>
        $(document).ready(function () {
          $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
          });

          $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
          });
        });
      </script>

</body>
</html>