<link rel="stylesheet" href="../CSS/style.css">
<form action="action_page.php" method="post">
    
    <div class="container-signIn">
      <h1>Sign In</h1>
      <p>Please Sign In To Your Well Health Account</p>
      <hr>
  
      <div>
      <label for="email"><b>Email Adress</b></label>
      </div>
      
      <div>
      <input type="text" placeholder="Enter Email Adress" name="email adress" required>
      </div>
  
      <div>
      <label for="psw"><b>Password</b></label>
      </div>

      <div>
      <input type="password" placeholder="Enter Password" name="psw" required>
      </div>
  
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  
    <div class="button-signIn">
      <button type="button" class="cancelbtn">Cancel</button>
      <button href="database.sql" type="submit" class="loginbtn">Login</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>