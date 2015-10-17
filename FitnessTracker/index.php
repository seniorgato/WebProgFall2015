<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>FitnessTracker</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="index.css">
    </head>
    
    <body>
        <div class="container">
            <div class="jumbotron container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <a href = "http://cs.newpaltz.edu/~n02633949/FitnessTracker/index.php">
                            <img class="iconlogo1" src=""></img>
                        </a>
                    </div>
                    <div class="col-md-5">
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
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container -->
                        </nav>

                    </div>
                </div>
                <div id="title">
                     <h1 style=" padding-top: 35px;  color: white;">Live Healthier <small style="color: white;">Live Better</small></h1>

                </div>
                <div id="buttons" style="padding-top: 50px">
                    <button type="button" class="btn btn-primary btn-lg active">Sign Up</button>
                    <button type="button" class="btn btn-default btn-lg active">Log In</button>
                </div>
            </div>
            <div id="missionstatement">
                <center style="color: gray;">
                     <h2>Prepare to Live healthier through Health & Fitness</h2>

                </center>
            </div>
            <div id="links" class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="https://mllenoelle.files.wordpress.com/2009/05/plate-of-food1.jpg" alt="...">
                        <div class="caption">
                             <h3>Food Guide & Recipe</h3>

                            <p>Our board of nutritionist giveaway tips and tricks to living a healthier life</p>
                            <p><a href="http://www.healthyfood.co.nz/" class="btn btn-primary" role="button">View Now</a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="http://www.bodyforwife.com/wp-content/uploads/2015/09/exercise.jpg" alt="...">
                        <div class="caption">
                             <h3>Exercise Log</h3>

                            <p>Workout and Record your activities in this state of the art log!</p>
                            <p><a href="exerciseLog.php" class="btn btn-primary" role="button">View Now</a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="http://www.mamashealth.com/nutrition/images/calories.jpg" alt="...">
                        <div class="caption">
                             <h3>Calorie Log</h3>

                            <p>Keeping Track of all your fitness and nutritional progress!</p>
                            <p><a href="calorieLog.php" class="btn btn-primary" role="button">View Now</a> 
                        </div>
                    </div>
                </div>
            </div>
            <div id="review">
                <div class="row">
                    <div class="col-md-4">
                         <h3>Health and Fitness is the Best Website!</h3>

                        <p>Before Health and Fitness I was most certainly not Healthy. Nor was I fit. Then I found this website and BOY am I the most Fit guy on the block. Ladies can't get enough of me. Men wanna be me. Did I forget to mention that I'm a dog.</p>
                        <p>Sincerely, Max</p>
                    </div>
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe width="640" height="360" src="https://www.youtube.com/embed/5hr17Dn-Ikk" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                
                
            </div>
            
            
            
            
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(".progress-bar").animate({
                width: "75%"
            }, 2000);
        </script>
        <!-- it works the same with all jquery version from 1.x to 2.x -->
        <script src="jquery.min.js"></script>
        <script src="jssor.slider.mini.js"></script>
    </body>

</html>