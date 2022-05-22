<?php 
session_start();

	include("index.php");
	include("functions.php");

	$user_data = check_login($conn);


include './header/headerhome.php';
?>
      <h1>One Fitness Club & Gym</h1>
      <h4>Welcome,<?php echo $user_data['username']; ?></h4>
      <h2>Membership Type</h2>
  <video autoplay muted loop>
          <source src="./assets/gym.mp4" type="video/mp4" />
        </video>
        <ul>
    <li class="li"><a href="./form.php"><i class="fa fa-button" aria-hidden="true">Gold</i></a></li>
    <li class="li"><a href="./form.php"><i class="fa fa-button" aria-hidden="true">Silver</i></a></li>
    <li class="li"><a href="./form.php"><i class="fa fa-button" aria-hidden="true">Bronze</i></a></li>
 
  
  </ul>

        
       
  </div>
  </body>
</html>