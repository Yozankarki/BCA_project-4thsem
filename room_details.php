<?php require_once 'include/databaseconn.php';?>
<?php 
   if(is_numeric($_GET['room_id'])){
    $id = $_GET['room_id'];
   }else{
       header('location:rooms.php?msg=1');
   }
  $sql = "select * from rooms where room_id=$id ";
  $result = $connection -> query($sql);
  if($result -> num_rows == 1){
    $row = $result -> fetch_assoc();
  }else{
      $row = [];
  }
   
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="rooms.css">
    <title>GuideAl rooms</title>
    <style>
        table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #777}

th {
  background-color: #04AA6D;
  color: white;
}
    </style>
</head>
<body>
    <div class="page-wrapper">
      <section id="header">
          <!-- logo -->
          <h1><a href="index.php"><i class="bi bi-house"></i>GuideAL</a></a></h1>
          <!-- nav -->
          <nav id="nav">
            <ul>
                <li><a href="index.php" class="active"><span>Home</span></a></li>
                <li><a href="#"><span>Kathmandu</span></a></li>
                <li><a href="#"><span>Bhaktapur</span></a></li>
                <li><a href="#"><span>Lalitpur</span></a></li>
            </ul>  
          </nav>
      </section>
      <div class="container">
        <?php 
            if(!empty($row)){ ?>
            <div class="gallery">
                <img src="photos/<?php echo $row['image']; ?>"alt="ROOMS1" width="100%" height="auto">
            </div>
        <table>              
                <tr>
                    <th>Room type</th>
                    <td><?php echo $row['type'];?></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><span>RS: <?php echo $row['price'];?> /- Per Night.</span></td>
                </tr>
                <tr>
                    <th>Details</th>
                    <td><?php echo $row['details'];?></td>
                </tr>
                <tr>
                    <th>room No</th>
                    <td><?php echo $row['room_no'];?></td>
                </tr>
                
            </table>
           <?php }else{ ?>
               <div class="no_record">
                   Invalid category.
               </div>
           <?php }  ?> 
           <button style="margin-top: 5px;"><a href="book_now.php?room_id=<?php echo $row['room_id']; ?>">BOOK NOW</a></button>
     </div>
       
     <?php include_once('include/footer.php');?>
</body>
</html>
