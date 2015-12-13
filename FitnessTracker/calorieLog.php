<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>FitnessTracker</title><!-- Bootstrap -->
    <link href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
    rel="stylesheet">
    <link href="calorieLog.css" rel="stylesheet">
</head>

<body>
            <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '1486539894986392',
              xfbml      : true,
              version    : 'v2.5'
            });
          };
        
          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>
    <div class="container">

        <div>
           <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="index.php">
                                        Fitness Tracker
                                    </a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a href="aboutUs.php">About</a>
                                        </li>
                                        <li>
                                            <a href="contact.php">Contact</a>
                                        </li>
                                        <li>
                                            <a href="calorieLog.php">Calorie Log</a>
                                        </li>
                                        <li>
                                            <a href="exerciseLog.php">Exercise Log</a>
                                        </li>
                                        <li>
                                            <a href="login.php">Sign/Log In</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container -->
                        </nav>
        </div>

        <div class="jumbotron">
            <h1>Workout Today<small style="color: white">For a Better
            Tomorrow</small></h1><br>
        </div>

        <div id="Progress of Account">
            <h1>Almost done with Account Info</h1>

            
    </div><script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> <script type="text/javascript"></script>
</body>
</html>