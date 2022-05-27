<?php session_start();
include_once('../include/databaseconn.php');

if (strlen($_SESSION['adminid']==0)) {
  header('location:include/logout.php');
  } else{
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dashboard | Registration and Login System </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style>
       table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;
}
th {
  background-color: #04AA6D;
  color: white;
}
tr:hover {background-color: #ddd;}
.action_column a{
    color: white;
    border: none;
    border-radius: 10px;
    padding: 3px 10px;
    text-decoration: none;
}
.action_column a.view{
    background-color: greenyellow;
}
.action_column a.delete{
    background-color: red;
}
.err_msg{
    background-color: red;
    padding: 10px;
    color: white;
}
.success_msg{
    background-color: green;
    padding: 10px;
    color: white;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: flex;
  float: right;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}
.button1 a{
    text-decoration: none;
    color: #000;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
    </style>
    </head>
    <body class="sb-nav-fixed">
   <?php include_once('include/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('include/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
<?php 
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($connection, "DELETE FROM rooms WHERE room_id = $id");
    echo '<script>window.location.assign = "room_info.php";</script>';
 };

 $email = $_SESSION['email'];
 $sql = "select * from rooms order by room_id desc ";
 $result = $connection -> query($sql);
 $data =[];
 if($result -> num_rows > 0){
     while($row = $result -> fetch_assoc()){
         array_push($data, $row);
     }
 }
 
 
 ?>
 <?php 
    if (isset($_GET['msg']) && $_GET['msg'] == 2) {
		echo "<script>alert('category deleted successfully.')</script>";
	} 
    if (isset($_GET['msg']) && $_GET['msg'] == 3) {
		echo "<script>alert('category not deleted.')</script>";
	}  
    ?>
                    <h3>Users Information</h3>
                    <button class="button button1"><a href="add_rooms.php">Add Rooms</a></button>
   <table>
         <thread>
             <tr>
                 <th>SN</th>
                 <th>Image</th>
                 <th>Type</th>
                 <th>Room no</th>
                 <th>Price(Rs:)</th>
                 <th>Details</th>
                 <th>Location</th>
                 <th>Action</th>
                 
             </tr>
             <tbody>
                 <?php if(count($data) > 0) {?>
                    <?php foreach($data as $key => $record){?>
                 <tr>
                     <td><?php echo  $key + 1;?></td>   
                     <td><img src="../photos/<?php echo $record['image'] ;?>" alt="Room image" width="50%" height="40%"></td>
                     <td><?php echo $record['type'] ;?></td>
                     <td><?php echo $record['room_no'] ;?></td>
                     <td><?php echo $record['price'] ;?></td>
                     <td><?php echo $record['details'] ;?></td>
                     <td><?php echo $record['location'] ;?></td>
                     <td class="action_column">
                        <a href="edit_rooms.php?id=<?php echo $record['room_id'];?>"
                        class="view">Edit</a>
                        
                        <a href="room_info.php?delete=<?php echo $record['room_id'];?>"
                        class="delete" onclick="return confirm('Are you sure to delete this user!');">delete</a>
                     </td>
                 </tr>
                 <?php };?>
                 <?php } else {?> 
                    <tr>
                        <td colspan="6">NO categories found in database</td>
                    </tr>
                    <?php };?>
             </tbody>
         </thread>
     </table>
                    </div>
                </main>
             <?php include_once('../include/footer.php'); ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>