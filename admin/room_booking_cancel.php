<?php 
   if(is_numeric($_GET['delete'])){
    $id = $_GET['delete'];
   }else{
       header('location:room_booking_details.php?msg=1');
   }
   
   require_once '../include/databaseconn.php';
   $sql = "DELETE FROM room_booking_details WHERE id='$id' "; 
   $result = $connection -> query($sql);
   print_r($result);
   if($connection -> affected_rows == 1){
     header('location:room_booking_details.php?msg=2');
   }else{
     header('location:room_booking_details.php?msg=3');   
   }
    
 