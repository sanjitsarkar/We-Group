<?
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WeGroup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />
 <style>
   body{
     background:linear-gradient(to right bottom,rgba(96, 150, 186,1),rgba(163, 206, 241,1));
     background-size: cover;
    
   }
   .left-content{
     
    background:linear-gradient(to right bottom,rgba(227, 234, 238, 0.3),rgba(251, 253, 255, 0.3)),url(bg.jpg) no-repeat;
    background-size: cover;
   }
 </style>
</head>
<body>
  <div class="content">
<div class="left-content">
<div class="content-text">
  <header class="header">
    <nav></nav>
  </header>
  <h1 class="heading-text"><span id="we">We</span>Group</h1>
  <p class="desc">Connecting Peoples With Similar Interest</p>
  </div>
</div>
<div class="right-content">
  <div class="form-area">
    <div class="signup_form">
    <div class="form-header">
      <div class="header-text">Sign Up</div>
    </div>
<form action="" class="signup">
  <div class="group">
    <input type="text" name="" id="" placeholder="Enter Your Name...">
  </div>
  <div class="group">
    <input type="email" name="" id="" placeholder="Enter Your Email...">
  </div>
  <div class="group">
  
    <input type="password" name="" id="" class="control" placeholder="Enter Your Password...">
    </div>
    <div class="group">
     
    <input type="password" name="" id="" placeholder="Reenter Your Password...">
    </div>
    <div class="group">
      
    <label for="file" class="file_label">Upload Profile Picture</label>
    </div>
    <div class="group">
      
    <input type="file" name="" id="file">
    </div>
    <div class="group">
    <input type="submit" class="btn btn-signup" value="CREATE">
    </div>
    <a href="#" class="login_link">Already Have An Account...</a>
  </form>
</div>
<div class="login_form">
  <div class="form-header">
    <div class="header-text">Log In</div>
  </div>
<form action="" class="login">
<div class="group">
  <input type="email" name="" id="" placeholder="Enter Your Email or Username...">
</div>
<div class="group">

  <input type="password" name="" id="" class="control" placeholder="Enter Your Password...">
  </div>

  <div class="group">
  <input type="submit" class="btn btn-signup" value="LOGIN">
  </div>
  
  <a href="#" class="signup_link">Create An Account...</a>
</form>
</div>
</div>
</div>
</div>
  <script src="assets/js/main.js">
    
  </script>
</body>
</html>