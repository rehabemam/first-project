
                 <?php


 include('config.php');


  
if (isset($_POST['submit6'])){
	
	
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
		
	
	$_SESSION["login"] = "OK";  


//	$_SESSION["NAME"]= explode(' ',trim($_POST['registerUserName']));  
    $_SESSION["NAME"]=$_POST['registerUserName'];
	$_SESSION["EMAIL"]=$_POST['registerEmail'];
	$_SESSION["PASS"]=$_POST['registerPasword'];

    $name = $_POST['registerUserName'];
    $Email = $_POST['registerEmail'];
	$Pass = $_POST['registerPasword'];
    $mob = $_POST['registerMobile'];
    $address = $_POST['registerAddress'];
    $Gender = $_POST['registerRadios'];
	
    $year = $_POST['year'];
	$month = $_POST['month'];
	$day = $_POST['day'];
    $date = date("Y-m-d", mktime(0,0,0,$month, $day, $year));
	$encryptedPassword=md5($Pass);
  



$sql = "SELECT * FROM users where user_email = '".$Email."'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	?>
    <script> alert ("This email is already exist");</script>
    <?php
	
}
	
else{
	
$stmt = $conn->prepare("INSERT INTO users (user_name,user_password,user_email,user_mobile,user_address,user_gender,user_bdate) VALUES (?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssisis", $name, $encryptedPassword, $Email,$mob ,$address,$Gender, $date);

$stmt->execute();

$stmt->close();

	
 header( 'Location:index.php' ) ;


}

}
?>
    


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="utf-8">
<title>Register</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<link href="css/style.css" rel="stylesheet" type="text/css">

</head>


<body>
<div id="header-Register" >


  <div id="top-header">
      <div class="container">
       <div class="row">
        <div class="col-lg-6 col-xs-12" id="info">
            <i class="fas fa-phone "></i> <span>01007744177</span>
            <i class="fas fa-map-marker-alt"></i> <span>Nasr City,32 Mostafa El Nahas Street</span>
        </div>
        
        
        <?php
		
		  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
		
	
	include('config.php');
	
	if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
?>
		
		 <div class="col-lg-6 col-xs-12" id="signIn">
        <span>
           <a href="register.php"> Register  | </a>
          
<!--<a style="cursor:pointer"
  onclick=" window.open('logIn.php','',' scrollbars=no,menubar=no,width=400,height=400, resizable=no,toolbar=no,location=0,status=no,left=400,top=200')">LogIn</a>-->
  
  <a href="#" data-toggle="modal" data-target="#exampleModal"> Sign In</a> 
  
  <i class="fas fa-sign-in-alt"></i></span>
  
  <?php

 include('login2.php'); 
 


  
if (isset($_POST['submit'])){
	
	if (!isset($_SESSION)){
		  session_start();
		  }
  
    
    $Email = $_POST['user_email'];
	$Pass = $_POST['user_password'];
	$encryptedPassword=md5($Pass);
	


$sql = "SELECT user_name FROM users where user_email = '".$Email."' AND user_password = '".$encryptedPassword."'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0){
	
	$_SESSION["EMAIL"]=$_POST['user_email'];
	$_SESSION["PASS"]=$_POST['user_password'];
	$_SESSION["login"] = "OK";
	
	 while($row = $result->fetch_assoc()) {
      
		$_SESSION["NAME"]=$row["user_name"];
    } 
	header( 'Location:index.php' ) ;
	
}
	
else{
	

	?>
    <script> alert ("Wrong Email Or Password");</script>
    	
    <?php
	

	
 
}

}
?>
  
           
          </div>
	<?php	
    
}
	
else{	
		?>
        
         <div class="col-lg-6 col-xs-12" id="signIn">
        <span>
        
          <?php echo'Welcome '. $_SESSION["NAME"] ; ?>
          
         <a href="logOut.php"> SIGN OUT </a>
        
         </span>
          </div>
         
   <?php } ?>
		   
       
          
        
       </div>
      </div>
  </div>

  <div id="nav">
   <div class="container">
       <div class="row">
       <div class="col-lg-12 col-xs-8 ">
       
       <nav class="navbar navbar-expand-lg navbar-light " style="z-index:1000">
  <a class="navbar-brand" href="#"><img src="imgs/logo.png" width="178" height="66" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto nav">
      <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Reviews</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="doctors.php">Our Doctors</a>   
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="article.php">Articles</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="career.php">Careers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#footer">Contact us</a> 
                  </li>
    </ul>
    
  </div>
</nav>
	
        
       </div>
   </div>
  	  </div>
      
  </div>
  
            
            <div id="content-career">
	<div class="container">
    
    
    

<div class="row">
 <div class="col-lg-6 col-xs-12 offset-1" id="appForm">
     <div class="row" id="DAF">
                 <div class="col-12 text-center">
             <h3> Create An Account </h3>
                  </div>
                  </div>
                  
                  
                  
                  
                  
                  
                  
                  
               
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
             <form  action="register.php" method="post" onSubmit="return registerValidation();">
          <div class="form-group">
           
            <input type="text" class="form-control form-control-lg" id="registerUserName" name="registerUserName" aria-describedby="userName" placeholder="Enter your name">
        
          </div>
          
          <div class="form-group">
          
             <div class="form-group">
        <input type="email" class="form-control form-control-lg" id="registerEmail" name="registerEmail" aria-describedby="emailHelp" placeholder="Enter your email">
        </div>
          
            <input type="password" class="form-control form-control-lg"  id="registerPasword" name="registerPasword" placeholder="Password">
          </div>
          
          <div class="form-group">
           
            <input type="password" class="form-control form-control-lg" id="registerRePasword" name="registerRePasword" placeholder="Confirm Password">
          </div>
          
       
        <div class="form-group">
           
            <input type="text" class="form-control form-control-lg" maxlength="11" id="registerMobile" name="registerMobile" aria-describedby="phone Number" placeholder="Mobile Number ">
        
          </div>
          <div class="form-group">
           
            <input type="text" class="form-control form-control-lg" id="registerAddress" name="registerAddress" aria-describedby="Address" placeholder="Address ">
        
          </div>
           <div class="form-group">
           <label> Your Gender: </label>
           <div class="row">
           <div class="col-9 offset-1" >
          <div class="form-check">
            <input class="form-check-input" type="radio" name="registerRadios" id="registerRadios1" value="0" checked>
              <label class="form-check-label" for="registerRadios1">
                Male
              </label>
           </div>
           <div class="form-check">

  <input class="form-check-input" type="radio" name="registerRadios" id="registerRadios1" value="1">
  <label class="form-check-label" for="registerRadios1">
   Female
  </label>
        </div>
        </div>
        </div>
</div>

<div class="form-group">
           <label> Birth Date: </label> 
 

          
          <select id="years" class="form-control-sm" name="year" onchange="call()">
           <option value="">year</option>
          </select>
          <select id="months" class="form-control-sm" name="month" onchange="call()" >
         <option value="">Month</option>
         <option value="1">Jan</option>
         <option value="2">Feb</option>
         <option value="3">Mar</option>
         <option value="4">Apr</option>
         <option value="5">May</option>
         <option value="6">Jun</option>
         <option value="7">Jul</option>
         <option value="8">Aug</option>
         <option value="9">Sep</option>
         <option value="10">Oct</option>
         <option value="11">Nov</option>
         <option value="12">Dec</option>
</select>
<select id="days" class="form-control-sm" name="day" >
            <option value="">Day</option>
          </select>

        
          </div>
           <button type="submit" name="submit6" class="btn btn-primary">SIGN UP</button>
        </form>

        
</div>
<div class="col-lg-3  d-none d-lg-flex  " id="Show" >
        
         <img src="imgs/docreg.png" > </div>
      
       </div>
</div>
</div>
</div>
 
        
        <!--end of careerform-->
         </div>
      
       
       	
     </div>
      </div>
    </div>




    

<?php include('templates/footer.php'); ?>






<script>


function registerValidation(){
	

var name=document.getElementById('registerUserName').value;
var pass=document.getElementById('registerPasword').value;
var rePass=document.getElementById('registerRePasword').value;
var email=document.getElementById('registerEmail').value;
var phone=document.getElementById('registerMobile').value;
var address=document.getElementById('registerAddress').value;
var day=document.getElementById('days').value;
var month=document.getElementById('months').value;
var year=document.getElementById('years').value;


 var numbers = /[0-9]/g;
 x=email.indexOf("@");
	y=email.lastIndexOf(".");
	z=email.length;

if (name==""){
	
	alert ("please Enter Your Name!");
	document.getElementById("registerUserName").style.borderColor = "red";
	return false;
	
	}
else if (name.match(numbers)){
	
	alert ("Invalid Name Correct It Please!");
	document.getElementById("registerUserName").style.borderColor = "red";
	return false;
	
	}
else if (email==""){
	
	alert ("Enter your Email Please!");
	document.getElementById("registerUserName").style.borderColor = "white";
	document.getElementById("registerEmail").style.borderColor = "red";
	return false;
	}
else if(x<1 || (y-x)<=1  || (z-y)<=2 ){
	
	alert("Not Valid Mail!"); 
	document.getElementById("registerUserName").style.borderColor = "white";
	document.getElementById("registerEmail").style.borderColor = "red";
	return false;
}
else if (pass==""){
	document.getElementById("registerUserName").style.borderColor = "white";
	document.getElementById("registerEmail").style.borderColor = "white";
	document.getElementById("registerPasword").style.borderColor = "red";
	alert("please assign a password!"); 
	return false;
}
else if (pass.length<6){
	document.getElementById("registerUserName").style.borderColor = "white";
	document.getElementById("registerEmail").style.borderColor = "white";
	document.getElementById("registerPasword").style.borderColor = "red";
	alert("Your password is very weak!"); 
	return false;
}
else if (rePass==""){
	document.getElementById("registerUserName").style.borderColor = "white";
	document.getElementById("registerEmail").style.borderColor = "white";
	document.getElementById("registerPasword").style.borderColor = "white";
	document.getElementById("registerRePasword").style.borderColor = "red";
	alert("please confirm the password!");
	return false; 
}
else if (pass!=rePass){
	document.getElementById("registerUserName").style.borderColor = "white";
	document.getElementById("registerEmail").style.borderColor = "white";
	document.getElementById("registerPasword").style.borderColor = "red";
	document.getElementById("registerRePasword").style.borderColor = "red";
	alert("the password confirmation is not matching the password you entered!"); 
	return false;
}
	
else if (phone==""){
	
	alert ("Your Phone Number Please!");
	
	document.getElementById("registerUserName").style.borderColor = "white";
	document.getElementById("registerEmail").style.borderColor = "white";
	document.getElementById("registerPasword").style.borderColor = "white";
	document.getElementById("registerRePasword").style.borderColor = "white";
	document.getElementById("registerMobile").style.borderColor = "red";

	
	return false;
	}

 else if(isNaN(phone)||phone.indexOf(" ")!=-1)
 {
	alert("phone Number is not correct!");
	document.getElementById("registerUserName").style.borderColor = "white";
	document.getElementById("registerEmail").style.borderColor = "white";
	document.getElementById("registerPasword").style.borderColor = "white";
	document.getElementById("registerRePasword").style.borderColor = "white";
	document.getElementById("registerMobile").style.borderColor = "red";

	return false; 
 }

else if (phone.charAt(0)!="0" && phone.charAt(1)!="1")
 {
	  alert("phone Number is not correct should start with 01 ");
	  	document.getElementById("registerUserName").style.borderColor = "white";
	document.getElementById("registerEmail").style.borderColor = "white";
	document.getElementById("registerPasword").style.borderColor = "white";
	document.getElementById("registerRePasword").style.borderColor = "white";
	document.getElementById("registerMobile").style.borderColor = "red";

	  return false
 }
	
else if (address==""){
	
	
	alert ("Enter Your address Please!");
	
	  	document.getElementById("registerUserName").style.borderColor = "white";
	document.getElementById("registerEmail").style.borderColor = "white";
	document.getElementById("registerPasword").style.borderColor = "white";
	document.getElementById("registerRePasword").style.borderColor = "white";
	document.getElementById("registerMobile").style.borderColor = "white";
	document.getElementById("registerAddress").style.borderColor = "red";
	return false;
	}
	
	else if (year ==""){
	alert ("Enter your Year of birth Please!");
	
	document.getElementById("registerUserName").style.borderColor = "white";
	document.getElementById("registerEmail").style.borderColor = "white";
	document.getElementById("registerPasword").style.borderColor = "white";
	document.getElementById("registerRePasword").style.borderColor = "white";
	document.getElementById("registerMobile").style.borderColor = "white";
	document.getElementById("registerAddress").style.borderColor = "white";

	document.getElementById("years").style.borderColor = "red";
	
return false;
}

else if (month ==""){
	alert ("Enter your Month of birth Please!");
	
	document.getElementById("registerUserName").style.borderColor = "white";
	document.getElementById("registerEmail").style.borderColor = "white";
	document.getElementById("registerPasword").style.borderColor = "white";
	document.getElementById("registerRePasword").style.borderColor = "white";
	document.getElementById("registerMobile").style.borderColor = "white";
	document.getElementById("registerAddress").style.borderColor = "white";
	document.getElementById("years").style.borderColor = "white";
	document.getElementById("months").style.borderColor = "red";
	
return false;
}


else if (day =="1900"){
	alert ("Enter your Day of birth Please!");
	
	document.getElementById("registerUserName").style.borderColor = "white";
	document.getElementById("registerEmail").style.borderColor = "white";
	document.getElementById("registerPasword").style.borderColor = "white";
	document.getElementById("registerRePasword").style.borderColor = "white";
	document.getElementById("registerMobile").style.borderColor = "white";
	document.getElementById("registerAddress").style.borderColor = "white";
		document.getElementById("days").style.borderColor = "white";
	document.getElementById("months").style.borderColor = "white";
	document.getElementById("days").style.borderColor = "red";


	
return false;
}





else{
	return true;
}
	
}



</script>






<script type="text/javascript">function add_chatinline(){var hccid=44291399;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>


<script src="js/jquery-3.3.1.min.js"> </script>
<script src="js/popper.min.js"> </script>
<script src="js/tether.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
<script src="js/jquery.js"> </script>
<script src="js/js.js"> </script>
</body>

</html>
