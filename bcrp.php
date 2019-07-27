<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Parton personal portfolio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <link rel="icon" href="img/fav.png" type="image/x-icon">

    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">


    <!-- modernizr -->
    <script src="js/modernizr.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
        
    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box-header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="index.html"><img src="img/logo1.png" width="80" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box-header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">Parton</li>

                <li><a href="index.html">Home</a> <i class="ion-ios-circle-filled color"></i></li>
                <li><a href="index.html">About me</a></li>
                
                <li><a href="photography.html">Photographs</a></li>
                <li><a href="contact.php">contact me</a></li>



                <li class="box-label">GitHub</li>

                <li class="box-social"><a href="https://github.com/NotDonaldTrump/"><i class="ion-social-github"></i></a></li>
            </ul>
        </nav>
        <!-- end nav -->

    </div>

    <!-- top bar -->
    <div class="top-bar">
        <h1>contact Me</h1>
        <p><a href="#">Home</a> / Application</p>
    </div>
    <!-- end top bar -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- main-container -->
    <div class="container main-container">
        <div class="col-md-6">
            <form action="#" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" name="name">
                            <span>your name</span>
                 </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" name="email">
                            <span>valid email</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-contact">
                            <input type="text"  name="subject">
                            <span>subject</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <select name="Application">
                            <option value="BCSO">BCSO</option>
                            <option value="FIRE">Fire</option>
                            <option value="EMS">EMS</option>
                            <option value="STAFF">Staff</option>
                          </select>
                    </div>
                    <div class="col-md-12">
                        <div class="textarea-contact">
                            <textarea  name="message1"></textarea>
                            <span>Question 1</span>
                        </div>
                    </div>
                    


                   
                    
                    <div class="col-md-12">
                        <button type="submit"  name="sendmail" class="btn btn-lg
                        btn-success btn-block" onclick="window.location.href = 'success.com';">Send</button>
                       
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-6">
            <h3 class="text-uppercase">Application</h3>
            <h5>BCRP</h5>
            <div class="h-30"></div>
            <p>Lol idk some text i guess</p>
            <p><b>More text wibba</b></p>
            
        </div>

        <?php
        
        $headers = 'From: {$myemail}' . "\r\n" . 
        'MIME-Version: 1.0' . "\r\n" .
        'Content-Type: text/html; charset=utf-8';
        $myemail = 'no-reply@snotrap.com';
        $name       = @trim(stripslashes($_POST['name']));
        $from       = @trim(stripslashes($_POST['email'])); 
        $subject    = @trim(stripslashes($_POST['subject'])); 
        $message1   = @trim(stripslashes($_POST['message1']));
        $message = '<html><body>';
        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
        $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($from) . "</td></tr>";
        $message .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($subject) . "</td></tr>";
        $message .= "<tr><td><strong>Message:</strong> </td><td>" . htmlentities($message1) . "</td></tr>";
        $message .= "</table>";
        $message .= "</body></html>";
      
        $msg = $name . ",\n\nThank you for your recent email. I will respond to your enquiry as soon as possible." . "\n";
        $msg .= "Have a great day!" . "\n\n";
        $msg .= "Kindest Regards," . "\n";
        $msg .= "-Dylan Parton" . "\n\n";
        $msg .= "This inbox is NOT monitored";
    
       

        if (isset($_POST['sendmail'])) { mail("no-reply@snotrap.com", 'New Message:'. "\n\n" . $subject, $message, $headers); echo "<script>alert('Email sent successfully');</script>";
        }
        mail( $from, 'RE:'. "\n\n" . $subject, $msg, 'From: ' . "no-reply@snotrap.com" );
    
          
        
    ?>
    </div>
    <!-- end main-container -->

    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <p class="copyright">© Parton Portfolio 2019</p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
    <!-- end back to top -->



    <!-- jQuery -->
    <script src="js/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>


    <!--  custom script -->
    <script src="js/custom.js"></script>

</body>

</html>