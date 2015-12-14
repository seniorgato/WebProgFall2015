<?php

if ( !isset($_REQUEST['term']) )
    exit;
function GetConnection(){
	include 'password.php';
	return new mysqli('localhost','erik','0000','c9');
}
mysql_select_db('zipcode_number');

$rs = mysql_query('select zip, city, state from zipcode where zip like "'. mysql_real_escape_string($_REQUEST['term']) .'%" order by zip asc limit 0,10', $dblink);

$data = array();
if ( $rs && mysql_num_rows($rs) )
{
    while( $row = mysql_fetch_array($rs, MYSQL_ASSOC) )
    {
        $data[] = array(
            'label' => $row['zip'] .', '. $row['city'] .' '. $row['state'] ,
            'value' => $row['zip']
        );
    }
}

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  <script>
    jQuery(document).ready(function($){
	$('#zipsearch').autocomplete({source:'suggest_zip.php', minLength:2});
});
  </script>
 
</head>

<body>
  
  
        <div class="ui-widget">
          <label for="tags">Tags: </label>
          <input id="tags">
        </div>
        
        
         <div>
           <form action="search.php" method="post">
        	Enter your zipcode:
        	<input type="text" id="zipsearch" />
         
        	<br />
        	<input type="submit" value="Search" />
        </form>
        
         </div>
 
</body>
</html>