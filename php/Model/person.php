<?php
    require_once '../inc/global.php';
    class Person{
        public static function Get(){
            return FetchAll("SELECT * FROM 2015Fall_Persons");
            $conn = GetConnection();
            $results= $conn->query("SELECT * FROM 2015Fall_Persons");
            $row = $results -> fetch_assoc();
            my_print($row);
            
        }
    }
    
    Person::Get();
    