<?php 

    $name= 'Erik Bates'; /*'' are string literals*/
    $message= "Welcome $name"; /*"" evaluates whats in the string*/
    
    $person = array('Name' => $name, 'Age' => 21.5, 'CalorieGoal' => 2000 );
    $food = array(
        
        array('Name'=>'Breakfast', 'Time'=> strtotime("one hour ago"), Calories=> 400),
        array('Name'=>'Lunch', 'Time'=> strtotime("now"), Calories=> 800),
        array('Name'=>'Snack', 'Time'=> strtotime("now"), Calories=> 250),
        array('Name'=>'Dinner', 'Time'=> strtotime("6pm"), Calories=> 800),
        
        );
    $total =0;
    foreach($food as $meal){  /*flipped around. the meal is the iterative variable*/
        $total += $meal['Calories'];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Food Intake</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
            <h1>Food Intake</h1>
            <h2><?=$message?></h2>
            <div class="panel panel-success">Successful Butts</div>
            <div class= "panel-heading">Your Data</div>
            <div class = "panel-body">
                <dt>
                    Name
                </dt>
                <dd><?=$person['Name']?></dd>
                <dt>
                    Age
                </dt>
                <dd><?=$person['Age']?></dd>
                <dt>
                    Today's Intake
                </dt>
                <dd><?=$total?></dd>
            </div>
            
            
            
      <div class="row">
        <div class="col-md-8 col-xs-10">
            <a href="#" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i>
                New Record
            </a>
            <a href="#" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
                Delete All
                <span class="badge">4</span>
            </a>
            <table class="table table-condensed table-striped table-bordered table-hover">
              <thead>
                <tr>
                 <th>#</th>
                  <th>Time</th>
                  <th>Name</th>
                  <th>Calories</th>
                  
                </tr>
              </thead>
              
              <tbody>
                  <?php foreach($food as $meal):?>
                <tr>
                  <th scope="row">1</th>
                  <td><?=$meal ['Name']?></td>
                  <td><?=$meal ['Time']?></td>
                  <td><?=$meal ['Calories']?></td>

                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>  
          
        </div>
        <div class="col-md-4 col-xs-10">
            <div class="alert alert-success" role="alert">
                You did well
            </div>
            <div class="alert alert-danger" role="alert">
                Oh no! You messed up.
            </div>
           
          
        </div>
      </div>
      
            
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    
      (function(){
        $(".progress-bar").css({width: $(".progress").width() * .75});
        
        SomeName = function (){
          $(".progress-bar").css({width: MyObject.intendedWidth}, 2000);
        }
        
        var MyObject = {
          hello: "world",
          intendedWidth: $(".progress-bar").width() * .75
        };
        
        
      })()
      //SomeName();
      
      setTimeout( SomeName, 1000);
    </script>
  </body>
</html>