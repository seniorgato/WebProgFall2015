<?php
    session_start();
    $name = 'Erik Bates';
    $message = "Welcome $name";
    
    $person = array('Name' => $name, 'Age' => 21, 'Weight'=> 265, 'ExerciseTime' => 1000);
    
    $exercise= $_SESSION['exercise'];
    if(!$exercise){
        $_SESSION['exercise'] = $exercise = array(
        array('Name' => 'Running', 'Difficulty' => 'Hard', Minutes => 60),
        array('Name' => 'Jogging', 'Difficulty' => 'Easy', Minutes => 60),
        array('Name' => 'Weight Lifting', 'Difficulty' => 'Easy' , Minutes => 30),
        array('Name' => 'Swimming', 'Difficulty' => 'Medium', Minutes => 40)
        );
    }
        
    //$_SESSION['food'] = $exercise[] = $_REQUEST;
    $total = 0;
    foreach($exercise as $exer){
        $total += $exer['Minutes'];
    }
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Exercise</title><!-- Bootstrap -->
    <link href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
    rel="stylesheet">
    <link href="Exercise.css" rel="stylesheet">
</head>

<body>
    <div class="container">
       <a href = "http://cs.newpaltz.edu/~n02633949/FitnessTracker/Home.php">
                            <img class="iconlogo1" src="http://djabcd.biz/wp-content/uploads/2015/09/logo_healthfitness.png"></img>
                        </a>

        <div>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->

                    <div class="navbar-header">
                        <button class="navbar-toggle collapsed" data-target=
                        "#bs-example-navbar-collapse-1" data-toggle="collapse"
                        type="button"><span class="sr-only">Toggle
                        navigation</span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span> <span class=
                        "icon-bar"></span></button> <a class="navbar-brand"
                        href="http://cs.newpaltz.edu/~n02633949/FitnessTracker/Home.php" rel="home" title="tddesigns">Home</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse" id=
                    "bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="http://cs.newpaltz.edu/~n02633949/FitnessTracker/Food.php">Food</a>
                            </li>

                            <li>
                                <a href="#">Exercise</a>
                            </li>

                            <li>
                                <a href="http://cs.newpaltz.edu/~n02633949/FitnessTracker/Progress.php">Progress</a>
                            </li>

                            <li>
                                <a href="#">Community</a>
                            </li>

                            <li>
                                <a href="#">Log In</a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">Donations</a>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle=
                                "dropdown" href="#">Related Websites
                                <span class="caret"></span></a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Fitness.com</a>
                                    </li>

                                    <li>
                                        <a href="#">Nutrition.com</a>
                                    </li>

                                    <li>
                                        <a href="#">com.com</a>
                                    </li>

                                    <li class="divider"></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>

        <div id="jt" class="jumbotron">
            <h1>Workout Today<small style="color: white">For a Better
            Tomorrow</small></h1><br>
        </div>

        

        <h1>Exercise Log</h1>
        <h2><?=$message?></h2>
        <div class="panel panel-default">
            <div class="panel-heading">Your Data</div>
            <div claa="panel-body">
                <dl class="dl-horizontal">
                    <dt>Name (English)</dt>
                    <dd><?=$person['Name']?></dd>
                    <dt>Age (Years)</dt>
                    <dd><?=$person['Age']?></dd>
                    <dt>Weight (lbs)</dt>
                    <dd><?=$person['Weight']?></dd>
                    <dt>Goal Time (Min)</dt>
                    <dd><?=$person['ExerciseTime']?></dd>
                    <dt>Today's Time (Min)</dt>
                    <dd><?=$total?></dd>
                </dl>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-xs-10">
                <a href="edit.php" class="btn btn-success">
                    <i class="glyphicon glyphicon-plus"></i> New Record
                </a>
                <a href="#" class="btn btn-danger">
                    <i class="glyphicon glyphicon-trash"></i> Delete All
                    <span class="badge"><?=count($exercise)?></span>
                </a>
                <table class="table  table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Difficulty</th>
                            <th>Minutes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($exercise as $i => $exer): ?>
                <tr>
                  <th scope="row">
                      <div class="btn-group" role="group" aria-label="...">
                      <a href="view.php" title="View" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                      <a href="edit.php?id=<?=$i?>" title="Edit" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="delete.php?id=<?=$i?>" title="Delete" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                  </div>
                  </th>
                  
                  <td><?=$exer['Name']?></td>
                  <td><?=$exer['Difficulty']?></td>
                  <td><?=$exer[Minutes]?></td>
                </tr>
                <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
           
        </div>


        
    </div><script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> <script type="text/javascript"></script>
</body>
</html>