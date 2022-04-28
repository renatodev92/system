
<?php
   $host = "localhost";
   $username  = "root";
   $password = "";
   $dbname = "system";
   $port_db = "3307";

   //Creating a connection
   $mysqlConector = mysqli_connect($host, $username, $password, $dbname, $port_db);

   /* if($mysqlConector==true){
      print("Connection Established Successfully");
   }else{
      print("Connection Failed ");
   } */

?>
