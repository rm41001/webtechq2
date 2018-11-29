<?php
        //template with all the code needed to connect to the server  
		$dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass =  '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
		 else {
			//echo "connected to the server"; 
		 }
		 
		 /*
		 
config -> establish connection to server 
include the config in the database 
create database 
create table
	table has columns
	each column has a data type 
*/
?>
