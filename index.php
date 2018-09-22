<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<title>WECare Clinic</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  </head>

<body>
<div id="header">
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
	


$sql = "SELECT * FROM users where user_email = '".$Email."' AND user_password = '".$encryptedPassword."'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0){
	
	$_SESSION["EMAIL"]=$_POST['user_email'];
	$_SESSION["PASS"]=$_POST['user_password'];
	$_SESSION["login"] = "OK";
	
	 while($row = $result->fetch_assoc()) {
      
		$_SESSION["NAME"]=$row["user_name"];
		$_SESSION["ID"]=$row["user_id"];  //appointment/
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
       
       <nav class="navbar navbar-expand-lg navbar-light" style="z-index:1000">
  <a class="navbar-brand" href="#"><img src="imgs/logo.png" width="178" height="66" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse"  id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto nav">
      <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#reviews">Reviews</a>
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
  
  <!--end of nav-->
  <div id="header-content">
      <div class="container">
      
      <div class="row ">
       	<div class="col-xl-5 col-md-12   col-xs-12 text-center" id="contentShow">
         <h1 id="contentShowh1">MEDICAL SERVICE</h1>
         <h3 id="contentShowh3">that you can trust </h3>
        <div id="appoint"> <a href="appointment.php"> Appointment </a> </div>
         <div id="consultant"> <a href="consultant.php"> Consultant </a> </div>
         
        </div>
        
        <div class="col-xl-7 col-xs-12 im " id="doctorShow">
          <img src="imgs/4doctors.png" width="640" height="395">
        </div>
        <div class="col-xl-5 col-xs-12 im" id="girlShow">
             <img src="imgs/girl.png"  width="297" height="395">
        </div>
        
     

       <!--<div class="row">
       	<div class="col-lg-5 col-xs-12 text-center" id="contentShow">
         <h1 id="contentShowh1">MEDICAL SERVICE</h1>
         <h3 id="contentShowh3">that you can trust </h3>
        <div id="appoint"> <a href="appointment.php"> Appointment </a> </div>
         <div id="consultant"> <a href="consultant.php"> Consultant </a> </div>
        </div>
         <div class="row d-none d-xl-block">
        <div class="col-lg-7 col-xs-12 " id="doctorShow">
   	     <img src="imgs/4doctors.png" width="640" height="395">
        </div>
        <div class="col-lg-3 col-xs-12" id="girlShow">
               <img src="imgs/girl.png"  width="297" height="395">
         </div>
         </div>-->
         <!--<div class="row d-lg-none d-xs-block">
           <div class="col-12 ">
           <img src="imgs/4doctorsold.png" width="400" height="200"> 
           </div>
         </div>-->
       </div>
       
      </div>
      
     </div>
     
  </div>
</div>

<div id="departmentSection">
	 <div class="container">
       <div class="row ourDep ">
      	<div class="col-12 text-center">
        	<h4> OUR <span> DEPARTMENTS</span>  </h4>
        </div>
       </div>
       <div class="row depIcons ">
          <div class="col-4 text-center">
             <a href="dental.php"><img src="imgs/dental.png" width="53" height="68" class="image"  ></a>
             <h6> DENTAL CLINIC</h6> 
          </div>
          <div class="col-4 text-center">
            <a href="kids.php"> <img src="imgs/child.png" width="53" height="68" class="image" ></a> 
             <h6> CHILD CLINIC</h6>
          </div>
          <div class="col-4 text-center">
            <a href="heartcare.php"> <img src="imgs/heart.png" width="68" height="65" class="image" ></a>
             <h6> HEART DISEASE CLINIC</h6>

           </div>
       </div>
       <div class="row depIcons ">
          <div class="col-4 text-center">
            <a href="x-ray.php"> <img src="imgs/xRay.png" width="58" height="83" class="image" ></a>
             <h6> X-RAY CLINIC</h6>

              
          </div>
          <div class="col-4 text-center">
            <a href="optical.php"> <img class=" image eyesImage" src="imgs/eyes.png" ></a>
             <h6> EYES DISEASE CLINIC</h6>

          </div>
          <div class="col-4 text-center">
           <a href="skincare.php"> <img class=" image skinImage" src="imgs/skin.png" width="63" height="73" ></a>
            <h6> SKIN CARE CLINIC</h6>

           </div>
       </div>
	</div>
</div>
<div id="aboutUs">
	<div class="container">
       <div class="row">
      	<div class="col-lg-4 col-xs-12 text-center">
         <h2>WELCOME TO <div class="space"> OUR CLINIC </div></h2>
         <div class="row d-none d-lg-block">
         <img src="imgs/signal.png" width="216" height="65">
         </div>
         </div>
        <div class="col-lg-8 col-xs-12 text-center">
          <p>
            The mission of WeCare Medical Clinic is to promote health and wellbeing of all our patients by providing accessible,            high-quality medical care for people of all ages. WeCare Clinic is committed to providing services that will            exceed the expectations of our patients.
          </p>
        </div>
       </div>
     </div>  
</div>
<div id="reviews">
	<div class="container">
         
         
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <h3 class="d-block w-100" ></h3>
      <div class="carousel-caption ">
      <div class="row d-none d-md-block">
    <h3>More than happy with my experience at the clinic. Very helpful and quick response. </h3>
    </div>
    <div class="row d-md-none d-xs-block">
    <h5>More than happy with my experience at the clinic. Very helpful and quick response. </h5>
    </div>
    
  </div>
    </div>
    <div class="carousel-item">
       <h3 class="d-block w-100" > </h3>
       <div class="carousel-caption ">
     <div class="row d-none d-md-block">  
    <h3>An amazing service.Dr's are understanding and good listeners.</h3>
    </div>
     <div class="row d-md-none d-xs-block">
     <h5>An amazing service.Dr's are understanding and good listeners.</h5>
     </div>
  
  </div>
         </div>
    <div class="carousel-item">
      <h3 class="d-block w-100" ></h3>
      <div class="carousel-caption ">
      <div class="row d-none d-md-block"> 
    <h3>Very fast, efficient and professional service. Highly recommend.</h3>
    </div>
    <div class="row d-md-none d-xs-block">
    <h5>Very fast, efficient and professional service. Highly recommend.</h5>
    </div>
    
    
  </div>
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
        
        <!--end of container-->
    </div>
	
</div>
<div id="map">
    	
       <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="389" id="gmap_canvas" src=        
       "https://maps.google.com/maps?q=Nasr%20City%2Cwecare&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling=
       "no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{text-align:
       right;height:389px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:389px;width:100%;}
       </style>
       </div>
</div>

<?php include('templates/footer.php'); ?>


<script type="text/javascript">function add_chatinline(){var hccid=44291399;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>

<!--https://www.mylivechat.com/webconsole/?from=subsite  engmarwa53@yahoo.com    1:9-->


<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js"> </script>
  <script src="js/js.js"> </script>

</body>
</html>
