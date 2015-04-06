<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                    <title>QuikBake</title>
                    <!-- Adress bar icon -->
                    <link rel="icon" type="image/png" href="/img/qb_adbar.jpg"/>
                    <!-- Bootstrap -->
                    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
                        <!-- custom css-->
                        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
                            
                            <!-- font awesome for icons -->
                            <link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
                                <!-- flex slider css -->
                                <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
                                    <!-- animated css  -->
                                    <link href="css/animate.css" rel="stylesheet" type="text/css" media="screen">
                                        <!--Revolution slider css-->
                                        <link href="rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen">
                                            <link href="css/rev-style.css" rel="stylesheet" type="text/css" media="screen">
                                                <!--google fonts-->
                                                
                                                
                                                <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
                                                    <!--owl carousel css-->
                                                    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
                                                    <link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
                                                    <!--mega menu -->
                                                    <link href="css/yamm.css" rel="stylesheet" type="text/css">
                                                    <!--popups css-->
                                                    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
                                                    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                                    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                                                    <!--[if lt IE 9]>
                                                     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                                                     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                                     <![endif]-->
                                                    
                                                    </head>
    <body>
        
        <div id="header-top">
            <div class="container">
                <div class="top-bar">
                    <div class="pull-left sample-1right hidden-xs">
                        <a><i class="fa fa-phone"></i> Call: <span class="colored-text">1-(347)-796-0225</span> </a>
                        <a><i class="fa fa-envelope"></i> Mail us: <span class="colored-text"><a href="mailto:support@quikbake.com?Subject=QuikBake%20Support:" target="_blank">support@quikbake.com</span></a></a>
                    </div>
                    <div class="pull-right">

                </div>
            </div>
        </div><!--top bar end hidden in small devices-->
        <!--navigation -->
        <!-- Static navbar -->
        <div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/QBword.jpg" alt=“QuikBake”></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown active ">
                            <a href="index.php">Home </a>
                        </li>
               <!--           <li class="dropdown active ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>
                        </li> -->
                    <ul>

                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div><!--navbar-default-->
        
        
        </div>

                       
        
        <section class="fun-fact-wrap fun-facts-bg">
            <div class="container">
                <div class="row">
                    <div class="center-heading">
                        <div id="subscribe">   
                            <h1>The First Online Marketplace <br> Connecting Bakeries with Baked Goods Lovers</h1>
<span style="text-align: center;">
              <form method="post" action="index.php">  
             <input type="text" size=40 name="name" aria-required="true" aria-invalid="false" placeholder="Name" value=""><br><br>
             <input type="text" size=40 name="email" aria-required="true" aria-invalid="false" placeholder="Email" value=""> <br><br>
             <input type="submit" name="submit" value="Early Access">
        </form>
                </div>
                </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <?php
    if(isset($_POST['submit'])){
        $to = 'rakinzaman@gmail.com';
        $name = $_POST[ 'name' ] ;
        $email = $_POST['email'] ; 
        $regex = '/^([0-9]+)$/'; 
        $error = "Error";
        // This is what is included in both emails to me and the user.
        $headers = 'From: do-not-reply';
        $subject = "Message from $name ($email).";  
        $subject2 = "Hi $name."; 
        $message = "Name: $name  Email: $email has subscribed.  "; 
        $autoreply = "Thank you for subscribing to QuikBake."; 
        // Validations. User must enter a name and an email.
        // CONDITIONAL CLAUSE HERE
        if ( empty( $_POST[ 'name' ] ) ) {
            print "<h5><span style='color:red'>Error: You did not enter your name.</span></h5>";
        } elseif (empty( $_POST[ 'email' ])) {
            echo "<h5><span style='color:red'>Error: You did not enter your email.</span></h5>";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              echo "<h5><span style='color:red'>Error: E-mail is invalid.</span></h5>";
        } else {      
                $name = htmlentities( $_POST[ 'name' ] );
                //sends to quikbake
                $send = mail($to, $subject, $message, $headers);
                //sends to user
                $send2 = mail($email, $subject2, $autoreply, $headers); 
                // Displays if the person is able to send the email. 
                if($send)  {
                    echo "
                     <script type='text/javascript'>
                      $('#subscribe').hide();
                    </script>
                    <div id='thanks'>             
                        <div class='row'>
                        <div class='col-sm-8 col-sm-offset-2'>
                        <div class='bounceInDown'>
                        <div class='center-heading'>
                            <h1>Thank you for your support!</h1>       
                            <h5>
                            Watch out for our newsletter. We hope you are as excited as we are! 
                            We are looking to revolutionize how you get those delicious baked goods. 
                            But, we can only do it with YOUR help. </h5>
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>
                   ";        
        }}}
        ?>

                </div>
            </div>
        </section><!--fun facts-->

                    <div class="container"> 
           
                      <br><br><br>
                <h2>"If Baking is any labor at all, it's a labor of love. A love that gets passed from generation to generation." </h2>
                <h5>- Regina Brett</h5>

                     </div> 

                    
                            <div class="assan-features">
                            <div class="container">
                            <div class="row">
                            <div class="col-md-12">
                            <div class="center-heading">
                    
                            <span class="center-line"></span>
                            </div>
                            </div>
                            </div>
							<div class="row">
                            <div class="center-heading">
                           
									 <h4>Whether you want a cake for your friend's birthday, chocolate chip cookies for a midnight snack or enjoy your coffee with a delicious pastry, Quikbake makes it easy and convenient.</h4>
                    
                            </div>
                            </div>

            
                            </div>
                            </div><!--services container-->
            <div class="divide60"></div>
                            
                      
                            </div>
							
				            <div class="row special-feature">
                                <div class="center-heading">
                
				                <div class="col-md-4 padding">
				               
				                            <!-- Icon -->
				                            <i class="fa fa-laptop"></i>
				                            <!-- Title -->
				                            <h4>Convenience</h4>
				                            <!-- Text -->
				                            <h6>Delicious baked goods can be delivered, shipped or picked up with just a few clicks.</h6>
				         
				                </div><!--services col-->
				                <div class="col-md-4 padding">
			                      
				                            <!-- Icon -->
				                            <i class="fa fa-list"></i>
				                            <!-- Title -->
				                            <h4>Choice</h4>
				                            <!-- Text -->
				                            <h6>Unique baked goods of every kind - cupcakes, cookies, pastries and much more!</h6>
				            
				                 
				                </div><!--services col-->
				                <div class="col-md-4 padding">             
                                  
				                            <!-- Icon -->
				                            <i class="fa fa-users"></i>
				                            <!-- Title -->
				                            <h4>Community</h4>
				                            <!-- Text -->
				                            <h6>Share the love with out forum reviews and blog features.</h6>

				                </div><!--services col-->

                            </div>
				            </div>


                            <br>

                            <footer id="footer">
                            <div class="container">
                            <div class="row">
                  
                            <div class="col-md-12 text-center">
                            <span style="color: white; font-size: 30px;">Connect With Us</span>
                            <span style="color: white; font-size: 16px;"><br><br>
                            <div class="row special-feature">
                            <ul class="list-inline">
                            <li><a href="https://www.facebook.com/QuikBake" target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a></li>
                            <li><a href="https://www.twitter.com/quikbake" target="_blank"><i class="fa fa-twitter-square fa-lg"></i></a></li>
                            <li><a href="https://instagram.com/quikbake/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
                            <li><a href="https://www.pinterest.com/QuikBake/" target="_blank"><i class="fa fa-pinterest-square fa-lg"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/quikbake" target="_blank"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
                            </ul><br>
                        </div>
                        <strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="mailto:support@quikbake.com?Subject=QuikBake%20Support:" target="_blank">support@quikbake.com</a><br><br>
                              <span>&copy;2015. QuikBake </span>
                            </div>      
                            </div>
        
                          
                      
        </div>
        </footer><!--default footer end here-->
        <!--scripts and plugins -->
        <!--must need plugin jquery-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script> 
        <!--bootstrap js plugin-->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
        <!--very easy to use portfolio filter plugin -->
        <script src="js/jquery.mixitup.min.js" type="text/javascript"></script>
        <!--digit countdown plugin-->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="js/wow.min.js" type="text/javascript"></script> 
        
        
        <!--owl carousel slider-->
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!--you tube player-->
        <script src="js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>        
        <!--customizable plugin edit according to your needs-->
        <script src="js/custom.js" type="text/javascript"></script>
        
        <!--revolution slider plugins-->
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="js/revolution-custom.js" type="text/javascript"></script>
        
    </body>
</html>
