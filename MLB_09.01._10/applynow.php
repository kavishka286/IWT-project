<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style/new 1.css">
  <title>Career Journey</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
<body>
     <header>
    <div class="logo">
	<a href="#"><img src="image/logo.jpeg" class="log"></a>
	<a href="home.html" class="page-name">Career Journey</a>
	       <div class="right">
            <a href="" class="login" >Login</a>
            <a href="" class="Register" >Register</a>
            <a href=""> <img src="image/photo.png" id="prof"></a>
            </div> 
	</div> 
	   
	</header>
	
  <!--navigation bar// -->
  <nav>
    <ul class="navigation-tabs">
       <li><a href="home.html">Home</a></li>
       <li><a href="post_jobs.html">Post Jobs</a></li>
       <li><a href="candidate.html">Candidate</a></li>
       <li><a href="about_us.html">About Us</a></li>
       <li><a href="help.html">Help</a></li>
    </ul><br>
	
  </nav>
   <br>

   
  <h2>Application </h2>
  
  <img src="image/handshake.jpg" alt="hand shake" class="shake">

    <div class="form-container">
     <form action="applyform.php">
         <label for="name">Name:</label><br><br>
         <input type="text" id="name" name="name"><br>
         <label for="lname">NIC number:</label><br><br>
         <input type="number" id="NIC" name="NIC" ><br><br>
         <label for="Age">Age:</label><br>
         <input type="number" id="Age" name="Age" ><br><br>
         <label for="Jtitle">Job Tiltle:</label><br>
         <input type="text" id="Jtitle" name="Jtitle" ><br><br>
  
        <script>
        function showMessage() {
            alert("Thank you for Apply. Your Application has been successfully completed.");
        }
        </script>

         <input type="submit" value="Submit" onclick="showMessage()">
		 
     </form> 
    </div>
<p>Thanks For Apply to Us.</p>


</body>
</html>

