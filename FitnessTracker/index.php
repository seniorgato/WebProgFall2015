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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Exercise Log</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
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


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    </script>
</body>

</html>