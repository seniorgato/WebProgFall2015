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
        header('Location: ./');
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
    <title>Exercise Log: View</title>

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
            </div>
            
            
        </form>
        
        <div claa="panel-body">
                <dl class="dl-horizontal">
                    <dt>Name (English)</dt>
                    <dd></dd>
                    <dt>Difficulty</dt>
                    <dd><?=$exercise['Difficulty']?></dd>
                    <dt>Minutes</dt>
                    <dd><?=$exercise['Minutes']?></dd>
                  
                </dl>
            </div>
        
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