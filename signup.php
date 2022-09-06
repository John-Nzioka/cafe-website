<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/mine.css">
  <title></title>
</head>
<body>
   <div class="signup-box">
    <div class="header">
      <h1>Sign Up</h1>
      <h4>Its free and only takes a minute</h4>
    </div>
      <form id="signup" action="signup1.php" method="POST" >
          <label for="firstName">First Name</label>
          <input type="text" name="fname" id="firstName" placeholder="First Name"/>
          <label for="lastName">Last Name</label>
          <input type="text" name="lname" id="lastName" placeholder="Last Name"/>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Email"/>
          <label for="county">County</label>
          <input type="text" name="county" id="county" placeholder="County"/>
          <label for="phoneNumber">Phone Number</label>
          <input type="text" name="phone" id="phoneNumber" placeholder="Phone Number"/>
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Password"/>
          <label for="confirmPassword">Confirm Password</label>
          <input type="password" name="cpassword" id="confirmPassword" placeholder="Confirm Password"/>
          <button type="submit" id="form-submit" name="submit" class="main-button-icon">Create an account</button>
      </form>
     
 </div>
 
</body>
</html>












