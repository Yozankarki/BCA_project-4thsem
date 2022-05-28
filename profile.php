<?php session_start();
include_once('include/databaseconn.php');
if (!isset($_SESSION['email'])) {
    header('location:index.php?msg=1');
}
 else{   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profile</title>
    </head>
    <body class="sb-nav-fixed">
      <?php include_once('include/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('include/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
<?php 
   $userid=$_SESSION['email'];
   
$query=mysqli_query($connection,"select * from users where id='$userid'");
$select = " SELECT * FROM users WHERE id='$userid' ";

while($result=mysqli_fetch_array($query))
{?>
                        <h1 class="mt-4"><?php echo $result['name'];?>'s Profile</h1>
                        <div class="card mb-4">
                     
                            <div class="card-body">
                                <a href="edit-profile.php">Edit</a>
                                <table class="table table-bordered">
                                   <tr>
                                    <th>Name</th>
                                       <td><?php echo $result['name'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Email</th>
                                       <td colspan="3"><?php echo $result['email'];?></td>
                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
<?php } ?>

                    </div>
                </main>
          <?php include('include/footer.php');?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="scripts.js"></script>   
        <script src="datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>
