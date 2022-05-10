<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="project1.css">
     <!--this is bootstrap link-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
     <!-- this is fontawesome link -->
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
     <!--*******************This is jquery links**************-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#date11" ).datepicker({ minDate: -0, maxDate: "+30D" });
    $( "#date1" ).datepicker({ minDate:+1, maxDate: "+30D" })
  } );
  </script>
</head>
<body>
   <div class="gird-container">
    <div class="header">
     
      <nav class="navbar">
        <div class="content">
          <div class="logo">
            <a href="#"><i class="bi bi-house"></i>GuideAL</a>
          </div>
          <ul class="menu-list">
            <div class="icon cancel-btn">
              <i class="bi bi-x-lg"></i>
            </div>
            <li><a href="#">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#Features">Features</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <div class="signin"  onclick="signclose()">
            <h3 class="sign-in">
              <i class="bi bi-person-circle"></i><span>sign-in</span>
            </h3>
          </div>
          <div class="icon menu-btn">
            <i class="bi bi-list"></i>
          </div>
        </div>
      </nav>
      <div class="banner"></div>
        </div>
    </div>
    <!-- this is for login -->
    <div class="container">
      <div class="forms" >
          <div class="form1 login">
              <span class="title">Login</span>
              <div class="cancel-login-signup" onclick="close_cross()">
                <i class="bi bi-x-lg"></i>
              </div>
              <form action="#">
                  <div class="input-field email">
                      <input type="text" placeholder="Enter your email">
                      <i class="bi bi-envelope-fill icon1"></i>
                  </div>
                  <br>
                  <span class="error" style="color: red;" id="err_email"></span>

                  <div class="input-field password">
                      <input type="password"
                      id="password" name="id_password" placeholder="password">
                      <i class="bi bi-lock-fill icon1"></i>
                  </div>
                  <br>
                  <span class="error" style="color: red;"  id="err_psd"></span>
                      
                  <div class="checkbox-text">
                      <div class="checkbox-content">
                          <input type="checkbox" id="logCheck">
                          <label for="logCheck" class="text">Remember me</label>
                      </div>
                      <a href="#" class="text">Forgot password?</a>
                  </div>

                  <div class="input-field button">
                      <input type="submit" value="Login Now">
                  </div>
              </form>

              <div class="login-signup">
                  <span class="text">Not a member?
                      <a href="#" class="text signup-link">Signup now</a>
                  </span>
              </div>
          </div>

          <!----------------- Registration Form---------- -->
          <div class="form1 signup">
              <span class="title">Registration</span>
              <div class="cancel-login-signup" onclick="close_cross()">
                <i class="bi bi-x-lg"></i>
              </div>
              <form action="#" id="formreg" >
                  <div class="input-field username">
                      <input type="text" placeholder="Enter your name">
                      <i class="bi bi-person-fill"></i>
                  </div>
                  <br>
                  <span class="error" style="color: red;" id="err_username"></span>

                  <div class="input-field email">
                      <input type="text" placeholder="Enter your email">
                      <i class="bi bi-envelope-fill icon1"></i>
                  </div>
                  <br>
                  <span class="error" style="color: red;" id="err_emaill"></span>

                  <div class="input-field password">
                    <input type="password" name="id_password" 
                    id="password" placeholder="password">
                      <i class="bi bi-lock-fill icon1"></i>
                  </div>
                  <br>
                  <span class="error" style="color: red;" id="err_psdd"></span>
                      
                  <div class="input-field repassword">
                    <input type="password"
                    id="repassword" name="id_password" placeholder="Confirm password">
                      <i class="bi bi-lock-fill icon1"></i>
                  </div>
                  <br>
                  <span class="error" style="color: red;" id="err_re-psdd"></span>

                  <div class="checkbox-text">
                      <div class="checkbox-content">
                          <input type="checkbox" id="sigCheck">
                          <label for="sigCheck" class="text">Remember me</label>
                      </div>
                      
                      <a href="#" class="text">Forgot password?</a>
                  </div>

                  <div class="input-field button">
                      <input type="submit" value="Login Now">
                  </div>
              </form>

              <div class="login-signup">
                  <span class="text">Not a member?
                      <a href="#" class="text login-link">Signup now</a>
                  </span>
              </div>
          </div>
      </div>
  </div>

      <!---------this is for Reserve Now rect -------------->
    <div class="explore-row">
        <h2>Explore Now</h2>
    <div class="flex_grow">
        <label for="dest">Destination</label><br>
        <input onclick="myFunction()" type="text" id="dest" name="dest" placeholder="Where To?" required> 
    </div>
    <div class="flex_grow">
        <label for="date">Date</label><br>
        <input onclick="myFunction()" type="text" value="
        <?php
echo "FROM :"." " . date("Y/m/d");
echo " \n"."-". " ";
$tomorrow = date( "Y/m/d", strtotime( "+1 days" ) );

echo "TO : " . $tomorrow;
?>"
 name="date" id="date" required>
    </div>
    <div class="flex_grow" style="align-self:center">
        <input onclick="myFunction()" type="submit" style="width: auto" value="Reserve Now">
    </div>
</div>

<!----------this is for clickable reserve now button-----------> 
<?php 
$dest = $check = $guest = "";
$destErr = $checkErr = $guestErr ="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST["dest"])){
$destErr = "Enter your destination.";
}else{
$dest = test_value($_POST["dest"]);
}
if(empty($_POST["guest"])){
$guestErr = "guest cannot be empty";
}else{
$guest = test_value($_POST["guest"]);
}
if(empty($_POST["check"])){
$checkErr = "please enter date";
}else{
$check = test_value($_POST["check"]);
}
}
function test_value($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<hr>
<div class="form" id="form1">
    <form class="form_content animate"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="img_container1">
            <p class="close" id="cross"><i class="bi bi-x-lg"></i></p>
            <p class="person"><i class="bi bi-person-circle"></i></p>
        </div>
        <div class="container1">
            <label for="dest"><b>Destination: </b>
            <span class="error"><?php echo "*" . $destErr;?></span>
            </label>
		<select name ="dest" class ="dest">
		<option><?php echo $dest; ?></option>
		<option>Kathmandu</option>
		<option>Bhaktapur</option>
		<option>Lalitpur</option>
		</select>
		<br>
            <br>
            <label for="date"><b>Check-in: </b>
            <span class="error"><?php echo "*" .  $checkErr;?></span>
            </label>
            <input type="text" name="check" id="date11">
            
            <br>
            <label for="date"><b>Check-out: </b>
            <span class="error"><?php echo "*" . $checkErr;?></span>
            </label>
            <input type="text" name="check" id="date1">
            <br>
            <label>Adults:</label> <br>
            <input name="guest" type="number" min="0" max="6" placeholder="00">
            <span class="error"><?php echo "*" . $guestErr;?></span>
            <br>
            <label>Children:</label> <br>
            <input name="guest" type="number" min="0" max="6" placeholder="00">
            <span class="error"><?php echo "*" . $guestErr;?></span>
            <br>
            <button type="submit" class="btn_reserve">Reserve Now</button>

            <div class="container1" style="background-color: #f1f1f1;">
                <button  class="cancelbtn"
                 onclick="document.getElementById('form1').style.display = 'none';"
                 type="button" >Cancel</button>
            </div>
        </div>
    </form>
</div>

    <div class="gird-row-2">
        <!--This is for two images-->
<div class="gallery" id="apartment">
    <img src="photos/room1.jpg" alt="image_loading">
      <div class="img_text">
       <p><span>GuideAL</span> offers 500 guest rooms and suites with beautiful views and spacious quarters. Stay in the Preferred Club Two-Bedroom Villa, ideal for families who want to be steps from the water park, lazy river, Explorer's Club for Kids and Core Zone for Teens. Or try one of our spacious Junior suites, with beautiful views of the garden, pool or ocean and easy access to our gourmet restaurants and bars. Each room is equipped with the all-inclusive amenities of Unlimited-Luxury. Calming neutral tones are accented by deep teals and blues with hints of the tropical island throughout.</p>
      </div>
  </div>
  <div class="gallery">
     <img src="photos/bouddha.jpg" alt="image_loading">
      <div class="img_text">
        <p>Add a description of the image here</p>
      </div>
  </div>
    </div>

    <div class="wrapper top" id="services">
      <div class="container-amenties">
        <div class="text">
          <h2>Our Amenities</h2>
          <p>We have tried to include all the facilities that our customers require during their stays in our partner hotels and apartments so this are some of our main services that we provide along with our rooms and packages.  </p>
  
          <div class="content2">
            <div class="box-flex">
              <i class="fas fa-swimming-pool"></i>
              <span>Swimming pool</span>
            </div>
            <div class="box-flex">
              <i class="fas fa-dumbbell"></i>
              <span>Gym & yogaa</span>
            </div>
            <div class="box-flex">
              <i class="fas fa-ship"></i>
              <span>Boat Tours</span>
            </div>
            <div class="box-flex">
              <i class="fas fa-swimmer"></i>
              <span>Surfing Lessons</span>
            </div>
            <div class="box-flex">
              <i class="fas fa-microphone"></i>
              <span>Conference room</span>
            </div>
            <div class="box-flex">
              <i class="fas fa-water"></i>
              <span>Diving & smorking</span>
            </div>
            <div class="box-flex">
              <i class="fas fa-umbrella-beach"></i>
              <span>Private Beach</span>
            </div>
            <div class="box-flex">
              <i class="fas fa-wifi"></i>
              <span>Free wifi</span>
            </div>
            <div class="box-flex">
              <i class="fas fa-charging-station"></i>
              <span>Electric vehicle charging</span>
            </div>
            <div class="box-flex">
              <i class="fas fa-spa"></i>
              <span>Spa</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="gird-row-3">
        <!--This is for Near available rooms-->
    <div class="explore">
        <div class="explore_center">
          <h1>Explore More</h1>
          <button onclick="hidebtn()">Near Available Rooms</button>
        </div> 
       </div>
    </div>

    <!-- this is our rooms available -->
    <div class="main" id="main">

      <h1>Rooms near you</h1>
      <hr>
      <h2>Hotel Rooms</h2> 
      <div class="photo-row">

        <div class="photo-column">
          <div class="img-content">
            <img src="photos/two-queen-rooms.jpg" alt="ROOMS1" >
            <h4>Mountains</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>

        <div class="photo-column">
          <div class="img-content">
          <img src="photos/room2.jpg" alt="ROOMS2" >
            <h4>Lights</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>

        <div class="photo-column">
          <div class="img-content">
          <img src="photos/room3.jpg" alt="ROOMS3" >
            <h4>Forest</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>
        
        <div class="photo-column">
          <div class="img-content">
            <img src="photos/room4.jpg" alt="ROOMS4">
            <h4>Retro</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>

        <div class="photo-column">
          <div class="img-content">
          <img src="photos/room5.jpg" alt="ROOMS5" >
            <h4>Fast</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>

        <div class="photo-column">
          <div class="img-content">
          <img src="photos/room6.jpg" alt="ROOMS6">
            <h4>Classic</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>
      
        <div class="photo-column">
          <div class="img-content">
            <img src="photos/room7.jpg" alt="ROOMS7" >
            <h4>Girl</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>

        <div class="photo-column">
          <div class="img-content">
          <img src="photos/room8.jpg" alt="ROOMS8">
            <h4>Man</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>

        <div class="photo-column">
          <div class="img-content">
          <img src="photos/room9.jpg" alt="ROOMS9" >
            <h4>Woman</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>
        
        <div class="photo-column">
          <div class="img-content">
          <img src="photos/top.jpg" alt="ROOMS10" >
            <h4>Woman</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>
      </div>
      </div>

    <!--This is for image container info-->
    <div class="gird-row-4">
    <div class="image_info">
        <div class="image_group">
            <div class="image_card">
                <img src="photos/kathmandu.jpg" alt="Kathmandu" style="width:100%" height="300px">
                <div class="image_container">
                   <h2>kathmanu</h2>
                   <p class="img_title">Explore kathmandu</p>
                   <p>Kathmandu is a beautiful city and capital city of Nepal</p>
                   <p>
                     <button class="img_button" onclick="morerooms()" >Explore More</button>
                    </p>
               </div>
            </div>
        </div>
   
        <div class="image_group">
           <div class="image_card">
               <img src="photos/lalitpur.jpg" alt="Lalitpur" style="width:100%" height="300px">
               <div class="image_container">
                  <h2>Lalitpur</h2>
                  <p class="img_title">Explore Lalitpur</p>
                  <p>Kathmandu is a beautiful city and capital city of Nepal</p>
                  <p>
                    <button class="img_button"  onclick="morerooms()" >Explore More</button>
                  </p>
              </div>
           </div>
       </div>
   
       <div class="image_group">
           <div class="image_card">
               <img src="photos/bhaktapur.jpg" alt="Bhaktapur" style="width:100%" height="300px">
               <div class="image_container">
                  <h2>Bhaktapur</h2>
                  <p class="img_title">Explore Bhaktapur</p>
                  <p>Kathmandu is a beautiful city and capital city of Nepal</p>
                  <p>
                    <button class="img_button"  onclick="morerooms()" >Explore More</button>
                  </p>
              </div>
           </div>
       </div>
     </div>
    </div>

    
    <div class="gird-row-5" id="Features">
        <!--This is for featured Destinations-->
 <h2>Featured Destinations</h2>
 <div class="Featured_dest">
  <img class="feature" src="photos/nature.jpg" alt="Resort_image" width="800" height="400">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet...
 </div>
    </div>

    <!--This is for footer-->
    <div class="footer" id="contact">
  <footer>
    <div class="footer-left">
      <label class="logo">
        <i class="bi bi-house-fill"></i>
        </i>GuideAL</i>
      </label>
      <p class="footer-links">
        <a href="">Home</a> |
        <a href="">Blog</a> |
        <a href="">About</a> |
        <a href="">Contact</a>
      </p>
      <p class="footer-company-name">
        &copy; 2022 <span>GuideAL</span> Accomodation pvt. Ltd.
      </p>
    </div>
    <div class="footer-center">
      <div>
        <i class="bi bi-geo-alt-fill"></i>
          <p><span>Patan Multiple Campus, </span>
          Patan Dhoka, Lalitpur, Nepal</p>
      </div>
      <div>
        <i class="bi bi-telephone-fill"></i>
        <p>+977 9844588930</p>
      </div>
      <div>
        <i class="bi bi-envelope-fill"></i>
        <p><a href="mailto:#">support@GuideAL.com</a></p>
      </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
        <span>About the company</span>
        We offer Rooms for Rooms seeks and provide online platforms for Room owners to go online.</p>
      <div class="footer-icons">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
        <a href="#"><i class="bi bi-youtube"></i></a>
        <a href="#"><i class="bi bi-github"></i></a>
      </div>
    </div>
  </div>
  </footer>
    </div>
   <script type="text/Javascript" src="project.js"></script>
</body>
</html>
