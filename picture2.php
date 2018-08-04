<?php

session_start();

?>





<!DOCTYPE html>
<html>
    
<!-- Mirrored from demo.themeum.com/html/kidzy/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Sep 2016 04:22:21 GMT -->
<head>
        <title>Picture Tools</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Themeum">

        <!-- Include All Css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/preset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!--[if lt IE 9]>
            <script src="js/html5shive.js"></script>
        <![endif]-->

    </head>
    <body>
        <!-- Header Area -->
        <header class="header-area inner-page">
            <!-- Header Top Area -->
            <section class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="header-elements pull-right">
                               
                                <div class="login-or-signup pull-left">
                                    <a href="sign.html" style="color: white;" ><i class="icon-user"></i><span>Login/sign up</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.header-top -->
             <nav id="po" class="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="logo pull-left">
                                <a href="indexafsana.html"><img alt="Kidzy" src="play1.png" height="50" width="300"></a> 
                            </div>
							
                            <ul class="main-menu pull-right">
                                <li>
                                    <a id="a" href="home.html"><i class="fa fa-home" aria-hidden="true"></i> হোম</a>
                      
                                </li>
                               
                                <!--<li class="menu-has-child">
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li>
                                            <a href="event.html">Event</a>
                                            <ul>
                                                <li><a href="event-details.html">Event Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="routine.html">Routine</a></li> 
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>-->
                                <li class="menu-has-child">
								<a id="a" >ভিডিও টিউটোরিয়াল</a>
								   <ul>
                                        <li><a href="vdo.php">একাডেমিকস</a></li>
										 <li><a href="vdo.php">সাধারণ জ্ঞান </a></li>
										  <li><a href="vdo.php">সোশ্যাল স্কিল</a></li>
										
										
                                    </ul>
								</li>
								
								
                               <li>
                                    <a id="a" href="drawing.php">ড্রয়িং টুলস </a>
                                </li>
								
								 <li class="menu-has-child">
								 <a>গেমস </a>
								      <ul>
                                        <li><a href="games.php">১-৫ বছর</a></li>
										 <li><a href="games.php">৬-১০ বছর</a></li>
										 <li><a href="games.php">১০ বছরের অধিক </a></li>
										
										
                                    </ul> 
								 </li>
								
								<li class="menu-has-child">
								<a id="a"  style="font-size: 15px; font-weight:bold; color:#cc043c;">পিকচার টুলস</a>
								 <ul>
                                        <li><a href="pictures.php">একাডেমিকস</a></li>
										 <li><a href="pictures.php">সাধারণ জ্ঞান </a></li>
										 <li><a href="pictures.php">সোশ্যাল স্কিল</a></li>
										
                                    </ul>
								</li>
								
								
                               
                            </ul>
                            <div class="mobile-menu hidden-lg hidden-md hidden-sm">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" placeholder="অনুসন্ধান করুন....">
                    </form>
                    <a href="#" class="search-close"><i class="fa fa-times"></i></a>
                </div>
            </nav>
        </header>
        <!-- /.header-area -->
		
		
		
		<?php

         include "dbConnect.php";
       
			
         $title=$_GET['take'];
		
       
		
	     $sql_query = "select name,source from picturetool where topics like '$title';";
			
		$result = mysqli_query($con,$sql_query);
			
			
			
			echo '
        <!-- Breadcrumb  -->
        <section class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 text-center">
                        <div class="breadcrumb-content">
                            <h2>'.$title.' </h2>
                            <ul>
                                <li><a href="pictures.php">শিখুন ছবি দেখে</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.breadcrumb-section  -->
		 <section class="event-section">
            <div class="container">
                <div class="row">';
                   
			
		
			while( $row = mysqli_fetch_array($result)) 
				
			 {  
			
             $source=$row["source"];
             $name=$row["name"];			 
			
			
		     echo '<div class="col-sm-6 col-md-4">
                        <div class="single-event">
                            <div class="event-img">
                                <img src='.$source.' alt="">
                                <div class="class-hover">
                                    <a class="popup" href='.$source.' ><i class="icon-link"></i></a>
                                </div>
                                <a href="#">'.$name.' <span></span></a>
                            </div>
                            <h3><a href="#"></a></h3>
                            <a href="#"></a>
                            <a href="#"></a>
                            <p>
                                
                        </div>
						</div>';
			 
			
			
			 }  
         
            echo '   
                </div>
             
            </div>
        </section> ';
          
         ?>
		
		
</body>
       

              <!-- Footer Section -->
        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 text-left">
                        <div class="about-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img alt="" src="images/home1/play1.png"></a>
                            </div>
                            <p>
                                 আপনার শিশুর সঠিক বিকাশের হাতিয়ার।

                            </p>
                            <span>&copy; 2016 Kidzy School</span>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 text-left">
                        <div class="footer-widget">
                            <h3>ডাইরেক্ট  লিংক</h3>
                            <ul>
                                <li><a href="#">হোম </a></li>
                                <li><a href="#">ভিডিও</a></li>
                                <li><a href="#">পিকচার</a></li>
                                <li><a href="#">ড্রয়িং</a></li>
                                <li><a href="#">লগ ইন</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 text-left">
                        <div class="footer-widget">
                            <h3>ওয়েবসাইটের লিংক</h3>
                            <ul>
                                <li><a href="#">Do2learn.com </a></li>
                                <li><a href="#">Autism Speaks</a></li>
                                <li><a href="#">Autism Now</a></li>
                                <li><a href="#">Autism Games</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget">
                            <h3>কিভাবে ব্যাবহার করবেন?</h3>
                              <ul>
                                <li><a href="#">মেন্যু রাউস করুন  </a></li>
                                <li><a href="#">যেকোন একটি টুল সিলেক্ট করুণ</a></li>
                                <li><a href="#">আপনার শিশুকে শিখতে দিন</a></li>
                                <li><a href="#">পড়াশুনা শেষে টেস্ট নিন</a></li>
                                
                            </ul>
                            <form action="#" method="post" class="subscribe-form">
                               
                                <button class="primary-btn pull-right"><span>যোগাযোগ করুন</span></button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.footer-section -->
		

        <!-- Include All JavaScript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mixIt.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from demo.themeum.com/html/kidzy/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Sep 2016 04:22:44 GMT -->
</html>