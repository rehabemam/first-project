<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<title>WECare Clinic</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/Departmentsstyle.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body>
<div id="header-dental">
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
   <div id="clinic-info">
	  <div class="container">
		  <h1></h1>
		<div class="row">
          <div class="info-l  col-xs-12 col-md-8 ">
			   <h2><span>welcome </span> to the dental Clinic  </h2>
			   <p> 
                   A dentist examines patients' teeth and mouth tissue in order to first diagnose and then treat any problems he or she finds. Treatment may include removing tooth decay, filling cavities, repairing damaged teeth and removing teeth when necessary. Most dentists are general practitioners, but some are specialists.
			  </p> 
		 </div>
           
     <div class="info-r col-md-4 d-none d-md-flex">
         <img src="imgs/dentail/Smart-Smile-Dental-Dentist-Deer-Park-Girl-Nurse-315x450.png" width="340px" height="380px">
            </div>
	    </div>
	  </div>
	</div>
                         <!-- #######################################################################################################-->
                         <!-- staff div-->
 <?php include('config.php');?> 
   <section id="clinic-doctors">
		<div class="container">
		  <h3 class="head"><span> our </span> professional team  </h3>
		     <div class="row">
             <?php 
    $sql = "SELECT * FROM doctors where dep_id=5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
		
		
      
		?>
			 <div  id="doctors" class="col-4 offset-4 offset-lg-0 col-lg-4">
                 <div class="contain text-center">
				      <img src="imgs/<?php echo $row["dr_img"];?>" class="image">
                      <div class="lay">
                     <div class="tex">
                            <ul>
                           <li><a href="#"><i class="fab fa-twitter-square fa-2x"></i></a></li>
                             <li><a href="#"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                             <li><a href="#"><i class="fab fa-google-plus-square fa-2x"></i></a></li>
                         </ul>
                         
                         
                         
                       </div>
                     </div>
                 </div>
                  <div class="details text-center">
                      <h6><?php echo $row["dr_name"];  ?> </h6>
                      
                      <p><?php echo $row["dr_title"];  ?></p>
                                
                  </div>
            </div>
            <?php
		
    }
} else {
    echo "no result";
}
$conn->close();
  
  ?>     
			
    
          </div>
        </div>
		
	</section>
		<!-------------------------------------- end eye-doctors----------------------------------------->
    
    
    
      <section id="serv-eye">     <!-- starting services -div--> 
                                <div class="container">
                                      <h2> <span> Our </span> Services </h2>
                                           <div class="row">
                                                  
                                               
                                              <div class=" col-12 col-sm-6 col-lg-3">
                                                  <div class="servic-opt" >                                       
                                                              <!-- starting services one -->
                                                        <img src="imgs/dentail/icone.png" width="80" height="80">
                                                        <h3>teeth whitening</h3>
                                                         <p>
                                                           whitening is among the most popular dental procedures
                                                           because it can greatly improve how your teeth look. 
                                                         </p>

                                                    </div>
                                               </div>
                                               <!-- end services one -->
                                                    <div class=" col-12 col-sm-6 col-lg-3">
                                                  <div class="servic-opt" > 
                                                                <!-- starting services two -->
                                                         <img src="imgs/dentail/icone2.png" width="80" height="80">
                                                         <h3>teeth cleaning</h3>
                                                         <p>
                                                            teeth cleaning is part of oral hygiene and involves the removal 
                                                            of dental plaque from teeth<br> (dental caries).
                                                         </p>


                                                        </div>                          <!-- end services two -->
                                               </div>
                                                <div class=" col-12 col-sm-6 col-lg-3">
                                                  <div class="servic-opt" > 
                                                                <!-- starting services three -->
                                                          <img src="imgs/dentail/icone3.png" width="80" height="80">
                                                         <h3>quality brackets</h3>
                                                         <p>
                                                            orthodontics is the branch of dentistry that corrects teeth and 
                                                            jaws that are positioned improperty.
                                                         </p>

                                                 
                                                  </div>
                                                        </div>
                                                    <div class=" col-12 col-sm-6 col-lg-3">
                                                  <div class="servic-opt" > <!-- end services three -->
                                                                     <!-- starting services four -->
                                                         <img src="imgs/dentail/icone4.png" width="80" height="80">
                                                      <h3>mod - anesthetic</h3>
                                                         <p>
                                                            dental anesthesia is a field of anesthesia that includes not only 
                                                            local but sedation and general anesthesia.                                                         </p>



                             <!-- end services four -->
                                                   </div> 
                                                        </div>
                                       </div>
                                    </div>
                                </section>
                                  <!-- end services -div-->
  
    
    
    
    
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
