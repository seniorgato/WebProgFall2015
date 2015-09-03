<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
         <div class= "container">
           <h1>Hello, world!</h1>
           <div class= "row">
             
             <div class= "col-sm-8">
               
                                           
                          
                          
                          
                         <button type="button" class="btn btn-success btn-lg"> <I class="glyphicon glyphicon-plus" ></I>New record
                         
                         </button>
                         
                         
                         
                         <button type="button" class="btn btn-danger btn-lg"> <I class="glyphicon glyphicon-trash" ></I>Delete all
                         <span class="badge">4</span>
                         
                         </button>     
                          
                          
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
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
                            </tbody>
                          </table>
    
               
               
             </div>
             <div class= "col-xs-4">
                            
                              <div class="alert alert-success "container" " role="alert">You did well</div>
                              <div class="alert alert-info ""container" role="alert">:D</div>
                         
                               
                 
                 
                              <div class="progress ""container">
                              <div class="progress-bar progress-bar-striped active container" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                      <span class="sr-only">45% Complete</span>
                      
                        </div>
                      </div>    
            
               
             </div>
           </div>
           
     
    
        </div>
        
        
            
       
            
     
        
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>\
    <script type="text/javascript" src="">
      $(".progress-bar").animate({width: "75%"}, 2000);
        
    </script>
    
  </body>
</html>