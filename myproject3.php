<html>
<head>
<style type="text/css">
form {
  border: 3px solid double;
}


input[type=mail], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 8px;
  display: inline-block;
  border: 1px solid red;
  box-shadow:5px 5px 5px 5px lightblue;
  box-sizing: border-box;
}


button {
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 18px 10px;
  border: none;
  cursor: pointer;
  width: 57%;
}


button:hover {
  opacity: 0.8;
}


.cancelbtn {
  width: auto;
  padding: 15px 25px;
  background-color: olive;
  
}


.imgcontainer {
  text-align: center;
  margin: 12px 0 6px 0;
}


img.avatar {
  width: 10%;
  border-radius: 20%;
}


.container {
  padding: 0px;
  text-align: center;
}


span.psw {
  float: right;
  padding-top:0px;
}


@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 50%;
    
  }
}
</style>
</head>
<body  background="bck2.jpg" height="100%" width="100%" style="background-repeat:cover;">
<form action="myproject3.php"  method="post">
  <div class="imgcontainer">
    <img src="logo1.jpeg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email" style="background-color: olive;"><b>Email Address</b></label>
    <input type="mail" placeholder="Enter Email" name="email" required>
    <br />
    <label for="psw" style="background-color: olive;"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="subBtn">Login</button>
    <br/>
    <label> 
    
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:pink">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"><a href="#">Forgot password?</a></span>
  </div>
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="nm"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="nm" required>
    <label for="addr"><b>Address</b></label>
    <input type="addr" placeholder="Enter Address" name="addr" required>
    <label for="cn"><b>Contact no.</b></label>
    <input type="number" placeholder="Enter Contact No." name="cn" required>





    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="conpsw" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" name="subBtn" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Succesfully Account Created? <a href="myproject2.php">Login Now</a>.</p>
  </div>
</form>

</body>
</html>


<?php
extract($_POST);
if(isset($subBtn))
{
    $link=mysqli_connect("localhost","root","","myproject2023");
    $qry="select * from dr_details where E_mail ='$email' and dr_password='$psw'";
    $resultset=mysqli_query($link,$qry);
    $count=mysqli_num_rows($resultset);
    
    $r= mysqli_fetch_row($resultset);
    if($count!=0)
    {
    session_start();
    $_SESSION['DID']=$r[0];
    $_SESSION['DNM']=$r[1];
    $_SESSION['DMAIL']=$r[3];
    $_SESSION['DCN']=$r[5];
    $_SESSION['DADDR']=$r[7]; 
    $_SESSION['DSPL']=$r[2];    
      
    header("location:myprojrct6.php");
    }
    
    
}
    
    
    
    



?>