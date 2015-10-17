<?php 
    //var_dump($_GET);
    //var_dump($_POST);
    //var_dump($_REQUEST);
    session_start();
    
    $exercise = $_SESSION['exercise'];
    
    if($_POST){
        if(isset($_GET['id'])){
            $exercise[$_GET['id']] = $_POST;
        }
        else{
            $exercise[] = $_POST;
        }
        $_SESSION['exercise'] = $exercise;
        header('Location: ./exerciseLog.php');
    }
    
    if(isset($_GET['id'])){
        $exer = $exercise[$_GET['id']];
    }
    else{
        $exer = array();
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Exercise Log: Edit</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>

<body>
    <div class="container">
        <div class='alert alert-warning'>
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="page-header">
            <h1>Exercise Log <small>Record your daily workouts</small></h1>
        </div>
        <form class="form-horizontal" method="POST" action="">
            <div id="messageAlert" class='alert' style="display: none">
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3></h3>
            </div>
            <div class="form-group">
                <label for="txtName" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtName" name="Name" placeholder="Exercise's Name" value="<?=$exer['Name']?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="txtCallories">Difficulty</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" id="txtDifficulty" name="Difficulty" placeholder="Difficulty of Workout" value="<?=$exer['Difficulty']?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="txtDate">Minutes</label>
                <div class="col-sm-10">
                        <input type="number" class="form-control" id="txtMinutes" name="Minutes" placeholder="# minutes" value="<?=$exer['Minutes']?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button id="submit" type="submit" class="btn btn-success">Record</button>
                </div>
            </div>
        </form>
        
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript">
        (function($) {
            $(function() {
                
            });
        })(jQuery);
    </script>
</body>

</html>