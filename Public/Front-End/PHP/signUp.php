<link rel="stylesheet" href="../CSS/style.css">
<form action="action_page.php" style="border:1px solid #ccc">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
  
      <label for="email"><b>Email Adress</b></label>
      <input type="text" placeholder="Enter Email Adress" name="email adress" required>
  
      <label for="psw"><b>Create Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
  
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      <label for="email"><b>Contact Details</b></label>
      <input type="text" placeholder="Enter Phone Number" name="contact" required>

      <label for="email"><b>Payment Details</b></label>
      <input type="text" placeholder="Enter Account Number" name="Account Number" required>
  
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
  
      <p>By creating an account you agree to our Terms & Privacy</p>
  
      <div class="clearfix">
        <button href="index.php" type="button" class="cancelbtn">Cancel</button>
        <button href="database.sql" type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>