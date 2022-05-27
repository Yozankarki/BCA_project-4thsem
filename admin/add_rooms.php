<?php 
 include_once('../include/databaseconn.php');
 
 if(isset($_POST['add_room'])){
    $message = [];

     $room_no = $_POST['room_no'];
     $room_type = $_POST['room_type'];
     $room_price = $_POST['room_price'];
     $room_details = $_POST['room_details'];
     $room_location = $_POST['room_location'];
     $image = $_FILES['image']['name'];
     $image_tmp_name = $_FILES['image']['tmp_name'];
     $image_folder = '../photos/'.$image;

     if(empty($room_no) || empty($room_type) ||empty($room_price) || empty($room_details) || empty($room_location) || empty($image)){
         $message[] = 'Please fill out all';
     }
     else if(file_exists($image_folder)){
      $message[] = 'File already exists';
      
   }
     if(count($message) == 0){
         $insert = "insert into rooms(room_no, type, price, details, location, image) values ( '$room_no', '$room_type', '$room_price', '$room_details', '$room_location', '
         $image' )";
         $upload = mysqli_query($connection, $insert);
         if($upload){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'new room added successfully';
         }else{
            $message[] = 'could not add the room';
         }

     }

     
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Rooms </title>
  <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
--green:#27ae60;
--black:#333;
--white:#fff;
--bg-color:#eee;
--box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
--border:.1rem solid var(--black);
}

*{
font-family: 'Poppins', sans-serif;
margin:0; padding:0;
box-sizing: border-box;
outline: none; border:none;
text-decoration: none;
text-transform: capitalize;
}

html{
font-size: 62.5%;
overflow-x: hidden;
}

.btn{
display: block;
width: 100%;
cursor: pointer;
border-radius: .5rem;
margin-top: 1rem;
font-size: 1.7rem;
padding:1rem 3rem;
background: var(--green);
color:var(--white);
text-align: center;
}
.btn a{
color: white;
}

.btn:hover{
background: var(--black);
}

.message{
display: block;
background: var(--bg-color);
padding:1.5rem 1rem;
font-size: 2rem;
color:var(--black);
margin-bottom: 2rem;
text-align: center;
}

.container{
max-width: 1200px;
padding:2rem;
margin:0 auto;
}

.room-container.centered{
display: flex;
align-items: center;
justify-content: center;
min-height: 100vh;

}

.room-container form{
max-width: 50rem;
margin:0 auto;
padding:2rem;
border-radius: .5rem;
background: var(--bg-color);
}

.room-container form h3{
text-transform: uppercase;
color:var(--black);
margin-bottom: 1rem;
text-align: center;
font-size: 2.5rem;
}

.room-container form .box{
width: 100%;
border-radius: .5rem;
padding:1.2rem 1.5rem;
font-size: 1.7rem;
margin:1rem 0;
background: var(--white);
text-transform: none;
}

.room-display{
margin:2rem 0;
}

.room-display .room-display-table{
width: 100%;
text-align: center;
}

.room-display .room-display-table thead{
background: var(--bg-color);
}

.room-display .room-display-table th{
padding:1rem;
font-size: 2rem;
}


.room-display .room-display-table td{
padding:1rem;
font-size: 2rem;
border-bottom: var(--border);
}

.room-display .room-display-table .btn:first-child{
margin-top: 0;
}

.room-display .room-display-table .btn:last-child{
background: crimson;
}

.room-display .room-display-table .btn:last-child:hover{
background: var(--black);
}
@media (max-width:991px){

html{
font-size: 55%;
}

}

@media (max-width:768px){

.room-display{
overflow-y:scroll;
}

.room-display .room-display-table{
width: 80rem;
}

}

@media (max-width:450px){

html{
font-size: 50%;
}

}
  </style>
</head>
<body>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
    <div class="container">
        <div class="room-container">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post" enctype="multipart/form-data">
              <h3> Add a new Room</h3>
              <input type="text" placeholder="Enter Room No" name="room_no" class="box">

              <input type="text" placeholder="Enter Room Type" name="room_type" class="box">

              <input type="number" placeholder="Enter Room Price" name="room_price" class="box">
              
              <input type="text" placeholder="Enter Room Details" name="room_details" class="box">

              <input type="text" placeholder="Enter Room Location" name="room_location" class="box">

              <input type="file" accept="image/png, image/jpeg, image/jpg" name="image" class="box">

              <input type="submit" class="btn" name="add_room" value="Add Rooms">
              <button class="btn"><a href="room_info.php">Back</a></button>
                     
          </form>
        </div>

        <?php 
         $select = mysqli_query($connection, "select * from rooms order by room_id desc");
        ?>
        <div class="room-display">
      <table class="room-display-table">
         <thead>
         <tr>
            <th>Room image</th>
            <th>Room No</th>
            <th>Room type</th>
            <th>Room Price</th>
            <th>Room Details</th>
            <th>Room Location</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="../photos/<?php echo $row['image']; ?>" width="200" height="100" alt=""></td>
            <td><?php echo $row['room_no']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td>Rs: <?php echo $row['price']; ?>/-</td>
            <td><?php echo $row['details']; ?></td>
            <td><?php echo $row['location']; ?></td>
         </tr>
      <?php } ?>
      </table>
   </div>


    </div>
</body>
</html>