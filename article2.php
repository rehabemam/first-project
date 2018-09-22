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
 include('config.php');


  
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
</div>
</div>
<!---------------------------->



  <div class="container">
  
  
  <div class="row first" >
  
     <div class="col-12 ">
     
     
   <div>  <h1 style="color:#42635d; margin-bottom:30px; text-align:center; ">The state of cancer: Are we close to a cure?</h1> </div>
   
   
    <div id="img1" style="margin-bottom:30px; text-align:center;"> <img src="imgs/1-4.jpg" width="550" height="400"></div>
    
    
<p style="font-size:18px; text-align:left;"><h1 style="color:#4dcdc3;">Cancer is the leading cause of death across the globe </h1>. For years now, researchers have led meticulous studies focused on how to stop this deadly disease in its tracks. How close are we to finding more effective treatments?
researchers in the lab
How far has cancer research come?
The World Health Organization (WHO) note that, worldwide, nearly 1 in 6 deaths are down to cancer.

In the United States alone, the National Cancer Institute (NCI) estimated 1,688,780 new cancer cases and 600,920 cancer-related deaths in 2017.
<br>
  According to the Centers for Disease Control and Prevention (CDC), around 15.3 percent of women and 10.1 percent of men regularly feel very tired or exhausted in the United States.<br>
  
  Tiredness can cause an array of problems. For example, around 1 in 25 adult drivers report falling asleep at the wheel each month.<br>
  
  About 72,000 crashes and 44,000 injuries each year are a result of drowsy driving, and that's not to mention the estimated 6,000 fatal crashes caused by drowsy drivers.<br>
  
  Everyone feels tired at some point in their lives  whether it's due to a late night out, staying up to watch your favorite TV show, or putting in some extra hours at work.<br>
  
  Often, you can put your finger on the reason you're not feeling your best, but what about those times when you can't pinpoint the cause of your tiredness? What makes you feel tired then?<br>
  
  Medical News Today have researched the possible explanations for why you could be feeling so drained and the steps that you can take to feel re-energized.<br>
  
 <h1> Therapeutic viruses and innovative 'vaccines' </h1>
A surprising weapon in the fight against cancer could be therapeutic viruses, as revealed by a team from the United Kingdom earlier this year. In their experiments, they managed to use a reovirus to attack brain cancer cells while leaving healthy cells alone.

"This is the first time it has been shown that a therapeutic virus is able to pass through the brain-blood barrier," explained the study authors, which "opens up the possibility [that] this type of immunotherapy could be used to treat more people with aggressive brain cancers."
.<br>
  
  man falling asleep in a car
  Tiredness increases the risk of accidents, obesity, high blood pressure, depression, and heart disease.
  People aged between 18 and 60 years need 7 or more hours of sleep every day to promote optimal health, according to The American Academy of Sleep Medicine and the Sleep Research Society.<br>
  
  Getting under the recommended hours of sleep each night is not only associated with fatigue, impaired performance, and a greater risk of accidents, but it also has adverse health outcomes.<br>
  
  These include obesity, high blood pressure, depression, heart disease, stroke, and an increased risk of death.<br>
  
  If you struggle to fit in 7 hours of sleep, here are some tips to help you achieve a full dose of much-needed slumber:<br><br>
  
  Maintain a consistent sleep routine. Try to go to bed at the same time every night and get up at the same time each morning  even on the weekends.<br>
  
  Avoid naps. We need a certain amount of sleep within a 24-hour period and no more than that. Napping reduces the amount of sleep that we require the following night, which might lead to difficulty getting to sleep and fragmented sleep.<br>
  
  Limit time awake in bed to 5-10 minutes. If you find that you are lying awake in bed worrying or with your mind racing, get out of bed and sit in the dark until you are feeling sleepy, then go back to bed.<br>
  
  Ensure that your bedroom is quiet, dark, and a comfortable temperature. Any light that enters your room could disturb your sleep. Ensure that your room is dark and that light emitted from digital devices is out of sight. Cooler room temperatures are considered better to promote sleep than warmer temperatures.<br>
  
  Limit caffeinated drinks. Try not to consume caffeinated beverages after noon. The stimulating effects of caffeine can last for many hours after intake and cause issues with initiating sleep.<br>
  
  Avoid tobacco and alcohol before bed. Smoking cigarettes and drinking alcohol before going to bed may cause fragmented sleep.<br>
  
  If you practice all the sleeping habits listed above and still wake up tired, it might be a good idea to contact your healthcare provider and discuss whether you have a sleep-related medical problem such as insomnia, obstructive sleep apnea, or restless legs syndrome.
  <br>
  
 
 
Tumor 'starvation' strategies </h4>
  
Another type of strategy that researchers have been investigating of late is that of "starving" tumors of the nutrients they need to grow and spread. This, scientists point out, could be a saving grace in the case of aggressive, resilient cancers that cannot effectively be eradicated otherwise.

illustration of microscope and syringes
One novel method of 'attacking' cancer is by 'starving' cancer cells to death.
Three different studies — whose results were all published in January this year — looked at ways of cutting off cancers' nutritional supplies.<br>
  Ensure whole grains make up half the grains you consume.<br> Examples of whole grains include brown rice, oatmeal, whole cornmeal, bulgur, and whole-wheat flour.<br>
  Shift to low-fat and fat-free dairy to help limit your calories from saturated fats.<br>
  Vary your protein routine. Try to choose lean poultry and meat, limit processed meats, choose unsalted nuts and seeds, and select some omega-3-rich seafood.<br>
  Cut down on sugar. Sugar can give you a quick rush of energy, but it wears off fast and might make you feel more tired. Avoid foods and drinks that have lots of added sugar.<br>
  Never skip breakfast. Regularly skipping breakfast can lead to you missing out on key nutrients and the energy that you need to kick-start your day.<br>
  Eat at regular intervals.<br> Sustain your energy levels by eating three meals per day and limiting unhealthful snacks.<br>
Still, that doesn't mean we should lose all hope. Some researchers explain that these efforts should make us optimistic; while we may not be at the stage where we can claim that cancer can easily be eradicated, our furthered knowledge and ever more precise tools keep us ahead of the game and improve our odds in the fight against this disease.<br>

</p>
     
     
     </div>
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