<?php
   $dbhost = '139.59.58.3:3036';
   $dbuser = 'sportsfete';
   $dbpass = 'gvp2896';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   $rollnumber =  $_GET['rollno'];
   $dept = $_GET['department'];
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'select current_num from dept_marathon where department = "' . $dept . '"';      
   $value = mysql_query( $sql, $conn );
   
   $sql = 'insert into marathon VALUES (NULL, ' . $rollno .', '. $value .')';      
   $value = mysql_query( $sql, $conn );
   
   $sql = 'update dept_marathon set current_num = current_num + 1 where department = "'. $dept .'"';      
   $value = mysql_query( $sql, $conn );
   


   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($conn);
?>