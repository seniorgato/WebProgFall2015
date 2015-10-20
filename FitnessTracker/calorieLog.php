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
    <link href="Progress.css" rel="stylesheet">
</head>

<body>
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

            <div class="progress">
                <div class="progress-bar" style="width: 60%;">
                    60%
                </div>
            </div>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-success" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span> Calorie
            </div>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-info" style="width: 20%">
                <span class="sr-only">20% Complete</span> Exercise for the Day
            </div>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-warning" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span> Weight
            </div>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-danger" style="width: 80%">
                <span class="sr-only">80% Complete (danger)</span> Consumption
            </div>
        </div>
    </div><script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> <script type="text/javascript"></script>
</body>
</html>