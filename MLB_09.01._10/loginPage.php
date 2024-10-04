<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="loginstyle.css">
</head>

<body>
    
	<div class="background-image"></div>
 <section>
	  <div class="form-box">
		     <div class="form-value">
			    <form action="new.php" method="POST">
				    <h2> Login </h2>
					  <div class="inputbox"> 
					  <ion-icon name="mail-outline"></ion-icon>
					    <input type="email" name="email" required>
						<label for="">Email</label>
					  </div>
					  
					  <div class="inputbox">
					  <ion-icon name="lock-closed-outline"></ion-icon>
					    <input type="password" name="password" required>
						<label for="">Password</label>
					  </div>
					  
					  <div class="forget">
						<label for=""><input type="checkbox"> Remember Me <a href="#">Forget Password</a> </label>
					  </div>
					  
					<button type="submit">Login</button>
					
					<div class="register">
					
				        <p>Don't have an account? <a href="#">Register</a></p>
						
					</div>
					  
			    </form>
		      </div>
			 </div> 
	  </section>
</body>
</html>