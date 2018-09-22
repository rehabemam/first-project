<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="utf-8">
<title>Career</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<link href="css/style.css" rel="stylesheet" type="text/css">

</head>


<body>
<div id="header-career" >


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
  <a class="navbar-brand" href="index.php"><img src="imgs/logo.png" width="178" height="66" alt="logo"></a>
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
                    <a class="nav-link" href="#">Our Doctors</a>   
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="article.php">Articles</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#">Careers</a>
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
             <h3> Fill the job application form </h3>
                  </div>
                  </div>
                  
              <form  action="career.php" method="post" onSubmit="return validationcareer();"  enctype="multipart/form-data">
             

          <div class="form-group">
           
            <input type="text" class="form-control form-control-lg" id="careerUserName" name="careerUserName" aria-describedby="userName" placeholder="Enter your name">
        
          </div>
          
                  
          <div class="form-group">
        <input type="email" class="form-control form-control-lg" id="CareerEmail1" name="CareerEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
        </div>
        <div class="form-group">
           
            <input type="text" class="form-control form-control-lg" id="CareerMobile" name="CareerMobile" aria-describedby="phone Number" placeholder="Mobile Number ">
        
          </div>
          <div class="form-group">
           
            <input type="text" class="form-control form-control-lg" id="CareerAddress" name="CareerAddress" aria-describedby="Address" placeholder="Address ">
        
          </div>
           <div class="form-group">
           <label> Your Gender: </label>
           <div class="row">
           <div class="col-9 offset-1" >
          <div class="form-check">
            <input class="form-check-input" type="radio" name="careerRadios" id="careerRadios1" value="male" checked>
              <label class="form-check-label" for="careerRadios1">
                Male
              </label>
           </div>
           <div class="form-check">

  <input class="form-check-input" type="radio" name="careerRadios" id="careerRadios2" value="female">
  <label class="form-check-label" for="careerRadios2">
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
          <div class="form-group">
    <label for="careerFile1">Upload your CV ( pdf / word )</label>
       <input type="file" class="form-control-file" id="careerFile1" name="careerFile1">
  </div>
           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          
        </form>
        
</div>
<div class="col-lg-3  d-none d-lg-flex  " id="Show" >
        
         <img  class="careerImg" src="imgs/carrer.png" width="415" height="477"> </div>
      
       </div>
</div>
</div>
</div>
 
        
        <!--end of careerform-->
         </div>
      
       
       	
     </div>
      </div>
    </div>
</div>
</div>
</div>

<script>

function validationcareer(){
	var name=document .getElementById('careerUserName').value;
	var email=document.getElementById('CareerEmail1').value;
	var mobile=document.getElementById('CareerMobile').value;
	var address=document.getElementById('CareerAddress').value;
	var days=document.getElementById('days').value;
	var months=document.getElementById('months').value;
	var years=document.getElementById('years').value;
	x=email.indexOf("@");
	y=email.lastIndexOf(".");
	z=email.length;

	
	  if (name == "") {
        alert("Name must be filled out");
        return false;
		
	  }
		
		
else if  (email==""){
	
	alert ("Email Please!");
	return false;
	}
	
else if(x<1 || (y-x)<=1  || (z-y)<=2 ){
	alert("Not Valid Mail!"); 
	return false;
}

else if (mobile==""){
	
	alert ("Your Mobile Please!");
	return false;
	}

 else if(isNaN(mobile)||mobile.indexOf(" ")!=-1)
 {
	alert("mobile Number is not correct!")
	return false; 
 }

else if (mobile.charAt(0)!="0" && mobile.charAt(1)!="1")
 {
	  alert("Mobile Number is not correct should start with 01 ");
	  return false;
 }


else if (address == ""){
	alert ("Your Address Please!");
	return false;

}


else if (days =="1900"){
	alert ("Enter Day Please!")
	
return false;
}


else if (months ==""){
	alert ("Enter Month Please!")
	
return false;
}



else if (years ==""){
	alert ("Enter year Please!")
	
return false;
}
else {
	return true;
}
	
}

</script>




                  <?php


 include('config.php');


  
if (isset($_POST['submit'])){
	
include('config.php');
	

    $name = $_POST['careerUserName'];
    $Email = $_POST['CareerEmail1'];
    $mob = $_POST['CareerMobile'];
    $address = $_POST['CareerAddress'];
    $Gender = $_POST['careerRadios'];
    $year = $_POST['year'];
	$month = $_POST['month'];
	$day = $_POST['day'];
    $date = date("Y-m-d", mktime(0,0,0,$month, $day, $year));
	
  



$sql = "SELECT * FROM career where app_email = '".$Email."'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	?>
    <script> alert ("This email is already exist");</script>
    <?php
	
}
	
else{
	
	$stmt = $conn->prepare("INSERT INTO career (app_name,app_mobile,app_email,app_address,app_gender,app_bdate) VALUES (?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sissis", $name,$mob,$Email,$address,$Gender,$date);

$stmt->execute();

$stmt->close();


$pdf="application/pdf";
$word="application/vnd.openxmlformats-officedocument.wordprocessingml.document";

	if($_FILES["careerFile1"]["type"]==$pdf||$_FILES["careerFile1"]["type"]==$word){
	move_uploaded_file($_FILES["careerFile1"]["tmp_name"],"upload/".
	$_FILES["careerFile1"]["name"]);
	?>	 <script> alert ("Your Job Application had been sent successfully");</script><?php
	
	}
	else{
		
	?>	 <script> alert ("please uploade PDF or Document File");</script><?php
		
	}
	






	


}

}
?>
                  


<script type="text/javascript">function add_chatinline(){var hccid=44291399;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>

<?php include('templates/footer.php'); ?>


<script src="js/jquery-3.3.1.min.js"> </script>
<script src="js/popper.min.js"> </script>
<script src="js/tether.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
<script src="js/jquery.js"> </script>
<script src="js/career.js"> </script>
<script src="js/js.js"> </script>
</body>

</html>
