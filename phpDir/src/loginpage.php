<?php 
session_start();

	include("index.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$userdata = mysqli_fetch_assoc($result);
					
					if($userdata['password'] === $password)
					{

						$_SESSION['user_id'] = $userdata['user_id'];
						header("Location: home.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>
<?php
include './header/headerlogin.php';
?>

    <div class="container my-5">
    <h2>Admin Login</h2>
    <form method="post" name="login">
    <div class="row g-2">
     
  <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInputGrid" placeholder="Admin" value="" name="username" required >
      <label for="floatingInputGrid">Admin log</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
    <input type="password" class="form-control" id="floatingInputGrid" placeholder="Admin Pass" value="" name="password" required>
      <label for="floatingInputGrid">Password</label>
    </div>
  </div>
  <button   type="submit" class="btn btn-outline-secondary">Login</button>
  <a href="signuppage.php">Click to Signup</a><br><br>
 
</div>
</form>
    </div>
</body>
</html>