<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<title>WECare Clinic</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<link href="css/artcss.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="header1">
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
       
       <nav class="navbar navbar-expand-lg navbar-light ">
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
                    <a class="nav-link" href="#">Articles</a>
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
      
  </div>

</div>

  <div class="container">
  
  
  <div class="row" class="a1">
  
     <div class="col-12 text-center">
     <h2 class="text" style="color:#066; font-family:'Arial Black', Gadget, sans-serif; margin-bottom::50px; margin-top:25px;" > Medical Articles For Your Health.</h2>
     
    </div>
    
    
     <div class="col-12 text-center  ">
     <h5 style="margin-top:20px;"> We care for your health so here are some articles which guide you to a perfect healthy life.</h5>
     
    </div>
    
</div>
    
    
    <!-------------->
    
    <div class="row first">
  
     <div class="col-6 text-center">
      
       <img src="imgs/1-2.jpg" width="450" height="300">
       
    </div>
    
    
     <div class="col-6  top">
     <h3>  why you feel tired all the time?  </h3> 
     
      <p> Do you often ask yourself Why am I so tired all the time?" If so, this article may be the perfect read for you; we have compiled a list of some of the most common reasons for tiredness and what you can do to bounce back ...</p>
      
<button  type="button" class="btn btn-info"   onclick="window.location.href='article1.php'"> read more </button>


    </div>
 

</div>

             <!-------------->
             
             
<div class="row first">
  
     <div class="col-6 text-center">
      
    <img src="imgs/1-4.jpg" width="450" height="300"> </div>
    
    
     <div class="col-6  top">
     <h3>  The state of cancer: Are we close to a cure?  </h3> 
     
      <p> Cancer is the leading cause of death across the globe. For years now, researchers have led meticulous studies focused on how to stop this deadly disease in its tracks. How close are we to finding more effective treatments?..  </p>
      
<button  type="button" class="btn btn-info" onclick="window.location.href='article2.php'"> read more </button>


    </div>
 

</div>

              <!-------------->


<div class="row first">
  
     <div class="col-6 text-center">
      
    <img src="imgs/1-3.jpg" width="450" height="300"> </div>
    
    
     <div class="col-6  top">
     <h3>  Death risk increased with two blood pressure drugs </h3> 
     
      <p> High blood pressure, or hypertension, is a major risk factor for heart disease, the leading cause of death in the United States.But a new study has found that two classes of medication that are commonly used to lower blood ...</p>
      
<button  type="button" class="btn btn-info" onclick="window.location.href='article3.php'" > read more </button>


    </div>
 

</div>

                     <!-------------->




<div class="row first">
  
     <div class="col-6 text-center">
      
    <img src="imgs/1-5.jpg" width="450" height="300"> </div>
    
    
     <div class="col-6  top">
      <h3>  The top 10 mental health apps </h3>
      <p >   Apps are available for everything these days — from shopping to entertainment and travel. Apps that claim to help look after your mental health and well-being are also available. So, we have selected the best  ... </p>
      
<button  type="button" class="btn btn-info" onclick="window.location.href='article4.php'"> read more </button>


    </div>
 

</div>

          <!-------------->
<div class="row first" >
  
     <div class="col-6 text-center">
      
    <img src="imgs/1-6.jpg" width="450" height="300"> </div>
    
    
     <div class="col-6  top">
     <h3>  16:8 fasting diet actually works, study finds  </h3> 
      <p >   A form of intermittent fasting known as the 16:8 diet helps obese individuals to lose weight and lower their blood pressure, according to a new study.
  clock on a plate
  Time-restricted eating may be the key to weight loss... </p>
      
<button  type="button" class="btn btn-info"  onclick="window.location.href='article5.php'"> read more </button>


    </div>
 

</div>


            <!-------------->
            
            
<div class="row first">
  
     <div class="col-6 text-center">
      
    <img src="imgs/1.1.jpg" width="450" height="300"> </div>
    
    
     <div class="col-6  top">
     <h3> What are the best diets for 2018?  </h3>
      <p >    When it comes to New Year's resolutions, eating better is at the top of our list. But which diet plan is the best? A panel of health experts — on behalf of U.S. News & World Report — reveal the top-rated diets for 2018..</p>
      
<button  type="button" class="btn btn-info"onclick="window.location.href='article6.php'" > read more </button>


</div>
</div>

</div>


<script type="text/javascript">function add_chatinline(){var hccid=44291399;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>

<?php include('templates/footer.php'); ?>

<script src="js/jquery-3.3.1.min.js"> </script>
<script src="js/popper.min.js"> </script>
<script src="js/tether.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
<script src="js/js.js"> </script>

</body>
</html>
