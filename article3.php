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
     
     
   <div>  <h1 style="color:#42635d; margin-bottom:30px; text-align:center; ">Death risk increased with two blood pressure drugs</h1> </div>
   
   
    <div id="img1" style="margin-bottom:30px; text-align:center;"> <img src="imgs/1-3.jpg" width="550" height="400"></div>
    
    
<p style="font-size:18px; text-align:left;"><h1 style="color:#4dcdc3;">Blood pressure is the force of blood that pushes against the wall of the arteries." </h1>High blood pressure, or hypertension, is a major risk factor for heart disease, the leading cause of death in the United States. But a new study has found that two classes of medication that are commonly used to lower blood pressure could present a death risk all on their own.<br>
  woman yawning at her computer
  There are many reasons for tiredness, including a lack of sleep, poor diet, a sedentary lifestyle, stress, and medical conditions.<br>
Now, a person is considered to have hypertension if their systolic blood pressure (the top number) is 130 millimeters of mercury (mmHg) or higher, and their diastolic blood pressure (the bottom number) is 80 mmHg or higher.

Systolic blood pressure is the force of blood against the artery walls when the heart is beating, while diastolic blood pressure is the force of blood when the heart is at rest, or between heartbeats.
<br>
  
The updated guidelines mean that almost half of adults in the United States have high blood pressure, which puts them at greater risk of heart attack, stroke, and heart disease, among other health problems.

Of course, when it comes to treating hypertension, the goal is to lower blood pressure. This may be achieved through lifestyle changes — such as adopting a healthful diet and increasing physical activity — medication, or both.<br>
  
Previous research, however, has discovered that consistency is key for blood pressure levels. A study published in The BMJ in 2016, for example, associated higher variability of systolic blood pressure with a 15 percent increase in all-cause mortality.

According to the new study from Dr. Clements and colleagues, certain types of medication that are used to lower blood pressure may be contributing to this mortality risk.<br>
 
Two medications 'should be avoided'
For their study, the researchers analyzed the data of over 10,500 adults with high blood pressure.

The participants had their blood pressure measured at least seven times between January 2007 and December 2011, and the type of blood pressure medication they were using was monitored.<br>
  
  Often, you can put your finger on the reason you're not feeling your best, but what about those times when you can't pinpoint the cause of your tiredness? What makes you feel tired then?<br>
  
  Medical News Today have researched the possible explanations for why you could be feeling so drained and the steps that you can take to feel re-energized.<br>
  
 <h1>Common blood pressure drug raises skin cancer risk</h1>
The team used these data to assess whether certain classes of blood pressure medication were associated with variability in blood pressure levels.

The study revealed two classes of blood pressure medication that were linked to higher blood pressure variability in subjects: alpha blockers and alpha-2 agonists.<br>
  
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
  
  
  To improve your health and get all the nutrients you need  as well as eliminate fatigue it is vital to choose a healthful mix of food from the five food groups, which are: fruits, vegetables, grains, protein, and dairy.<br>
  
 
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