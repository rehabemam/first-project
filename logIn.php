<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="utf-8">
<title>logIn</title>

<link href="style/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="style/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<body>
 <?php


 include('config.php');


  
if (isset($_POST['submit'])){
	
	if (!isset($_SESSION)){
		  session_start();
		  }
  
    
    $Email = $_POST['user_email'];
	$Pass = $_POST['user_password'];
	$encryptedPassword=md5($Pass);
	
echo  	$encryptedPassword;

$sql = "SELECT * FROM users where user_email = '".$Email."' AND user_password = '".$encryptedPassword."'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0){
	
	$_SESSION["EMAIL"]=$_POST['user_email'];
	$_SESSION["PASS"]=$_POST['user_password'];
	$_SESSION["login"] = "OK";  
	header( 'Location:index.php' ) ;
	
}
	
else{
	
	?>
    <script> alert ("Wrong Email Or Password");</script>
    <?php


	
 

}

}
?>
                  
<div id="logIn">
	<div class="container">

 <div class="row">
 <div class="col-9 offset-1">
<form action="logIn.php" method="post" onSubmit="return validation(); ">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Email :</label>
   <input type="email" class="form-control" id="email" name="user_email" aria-describedby="emailHelp" placeholder="Enter your email">
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password :</label>
    <input type="password" class="form-control" id="password" name="user_password" placeholder="Password">
  </div>
   <button type="submit" name="submit" class="btn btn-primary">SIGN IN</button>
</form>
  </div>
  
</div>
</div>



<script src="js/jquery-3.3.1.min.js"> </script>
<script src="js/popper.min.js"> </script>
<script src="js/tether.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
<script src="js/jquery.js"> </script>
<script src="js/js.js"> </script>
</body>

</html>
