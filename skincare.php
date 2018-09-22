<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<title>skin-Clinic</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/Departmentsstyle.css" rel="stylesheet" type="text/css"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body>
	
<div id="header-skin">
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
  
	<!------------------------------------------skin-info----------------------------------------->
  
	<div id="clinic-info">
	  <div class="container">
		  <h1></h1>
		<div class="row">
          <div class="info-l  offset-2 col-xs-12 col-md-7 ">
			   <h2><span>looking</span> for beauty</h2>
			   <p>Nimue Skin Technology is a derma-cosmeceutical brand that was developed by leading skincare scientists aimed at the medical market for pre- and post-operative application.Since then, Nimue has evolved into a globally recognised professional skincare brand, renowned for an expert understanding of the skin, innovative formulations, cutting edge technology and effective combination, concentration and strength of active ingredients.
			  </p> 
		 </div>
           
             <div class="info-r col-sm-3 d-none d-md-flex">
                 <img src="imgs/skin/g2.png" width="380px" height="380px">
            </div>
	    </div>
	  </div>
	</div>

		<!------------------------------------------ end skin-info----------------------------------------->
       	<!----------------------------------- start skin-doctors----------------------------------------->

	   <?php include('config.php');?> 

	<section id="clinic-doctors">
		<div class="container">
		  <h3 class="head"><span>Meet</span> Our Doctors </h3>
		     <div class="row">
              <?php 
					$sql = "SELECT * FROM doctors where dep_id=2";
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
		 		
<!--<div  id="doctors" class="col-4 offset-4 offset-lg-0 col-lg-4">
    <div class="contain">
				      <img src="imgs/skin/Ophthalmologist-3-263x319.jpg" class="image">
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
                     <h6 >Dr. robert jone </h6>
                         <p>Specialist in Plastic Surgery</p>
                        
  
  
                </div>
            </div>-->
      <!--<div  id="doctors" class="col-4 offset-4 offset-lg-0 col-lg-4">     
                 <div class="contain">
				     <img src="imgs/skin/chief-doctors.jpg" class="image">
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
                     <h6 >Dr. jone sam </h6>
                         <p>Consultant Dermatologist</p>
                        
  
  
                </div>
            </div>-->
               
               
               
    
          </div>
        </div>
		
	</section>
		<!-------------------------------------- end skin-doctors----------------------------------------->

    
    
    
	
		<!-------------------------------------- start skin-services----------------------------------------->

	            <section id="serv-eye">     <!-- starting services -div--> 
                                <div class="container">
                                      <h2> <span> Our </span> Services </h2>
                                           <div class="row">
                                                  
                                              <div class=" col-12 col-sm-6 col-lg-3">
                                                  <div class="servic-opt" > 
                                                              <!-- starting services one -->
                                                        <img src="imgs/skin/leaf.png">
                                                         <h3>RevitalifeDrip</h3>
                                                         <p>
                                                            Rich in vitamin C and glutathione Detoxifies the skin Helps skin
                                                             recover from daily damage and combats the visible signs of ageing
                                                         </p>

                                                    </div>
                                               </div>
                                               <!-- end services one -->
                                                     <div class=" col-12 col-sm-6 col-lg-3">
                                                  <div class="servic-opt" > 
                                                                <!-- starting services two -->
                                                       <img src="imgs/skin/inject.png">
                                                         <h3> Botox</h3>
                                                         <p>
                                                             Botox is the brand name for botulinum toxin, a protein produced by
                                                             the bacterium Clostridium botulinum, and it is frequently used for 
                                                             medical . 
                                                         </p>

                                                         </div>
                                                                             <!-- end services two -->
                                               </div>
                                              <div class=" col-12 col-sm-6 col-lg-3">
                                                  <div class="servic-opt" > 
                                                                <!-- starting services three -->
                                                         <img src="imgs/skin/plate.png">
                                                         <h3> Hair Treatment</h3>
                                                         <p>
                                                            hair loss is a medical condition that can affect both
                                                             scalp and the entire body. Hair grows on each part of the body except on the
                                                             palms of our hands and soles of our feet. 
                                                         </p>


                                                 
                                                  </div>
                                               </div>
                                                 <div class=" col-12 col-sm-6 col-lg-3">
                                                  <div class="servic-opt" > <!-- end services three -->
                                                                     <!-- starting services four -->
                                                         <img src="imgs/skin/cap.png">
                                                         <h3>HA-ACID</h3>
                                                         <p>
                                                           Hyaluronic Acid (HA) is a substance naturally found in all mammals.
                                                             It is mainly present in connective tissue of the skin, 
                                                             but it is also contained in neural .
                                                        </p>

                             <!-- end services four -->
                                                   </div>    
                                               </div>
                                       </div>
                                    </div>
                                </section>
                                  <!-- end services -div-->
		
    
		<!-------------------------------------- end skin-services----------------------------------------->
 
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