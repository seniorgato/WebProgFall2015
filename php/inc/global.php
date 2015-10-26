<?php
    ini_set("display_errors",1);
    date_default_timezone_set("America/New_York");
    
    function GetConnection(){
        $sql_password= '0000';
        return mysqli_connect('localhost', 'erik', $sql_password, 'c9');
    }
    
    function my_print($x){
     echo '<pre>';
     print_r($x);
     echo '</pre>';
    }
    
    function FetchAll($sql){
        $ret = array();
        $conn = GetConnection();
        $results = $conn->query($sql);
        
        $error = $conn ->error;
        if($error){
            echo $error;
        }else{
            while($rs = $results->fetch_assoc()) {
                $ret[]=$rs;
            }
        }
        $conn->close();
        return $ret;
    }
