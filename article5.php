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
     
     
   <div>  <h1 style="color:#42635d; margin-bottom:30px; text-align:center; "> 16:8 fasting diet actually works, study finds</h1> </div>
   
   
    <div id="img1" style="margin-bottom:30px; text-align:center;"> <img src="imgs/1-6.jpg" width="550" height="400"></div>
    
    
<p style="font-size:18px; text-align:left;"><h1 style="color:#4dcdc3;">A form of intermittent fasting</h1> known as the 16:8 diet helps obese individuals to lose weight and lower their blood pressure, according to a new study.
clock on a plate
Time-restricted eating may be the key to weight loss.
More and more people now turn to intermittent fasting as a fast and effective way to lose weight.

There are different form of this diet, depending on the time intervals of "fasting" and "feasting."

The so-called 5:2 diet, for instance, consists of eating normally for 5 days every week and fasting for 2 days.

In the fasting days, the dieter restricts their calorie intake to 500 or 600 per day.

In daily fasting, or the 16:8 diet, people eat whatever they like for 8 hours and fast for the remaining 16.

A new study evaluates the benefits of this 16:8 pattern for obese individuals and finds that not only does the diet work, but also that it helps to lower blood pressure.

<br>
As many as 93.3 million adults have obesity in the United States, according to the latest data from the Centers for Disease Control and Prevention (CDC). That's almost 40 percent of the country's entire population.

This research was led by corresponding author Krista Varady, an associate professor of kinesiology and nutrition at the University of Illinois at Chicago, and the findings were published in the journal Nutrition and Healthy Aging.

 
Losing weight without counting calories
Varady and colleagues recruited 23 obese study participants who were aged 45 years, on average, with an average body mass index (BMI) of 35.

Between 10 a.m. and 6 p.m., the participants could eat whatever and however much they liked, but they were only allowed to drink water and calorie-free drinks for the remaining 16 hours.


<br>
  
Intermittent fasting may have 'profound health benefits'
Intermittent fasting may have 'profound health benefits'
Some researchers say that this type of diet can also slow down aging and stave off disease.
READ NOW
All the study participants were followed for a period of 12 weeks, and their dieting outcomes were compared with those of a previous weight loss trial of another type of intermittent fasting called "alternate day fasting."

In alternate day fasting, they can eat whatever they like for one day and fast for the following day.

On average, when compared with the control trial, those on the 16:8 diet consumed 350 fewer calories, lost 3 percent of their weight, and had lower blood pressure.

 
More specifically, the systolic blood pressure of those who fasted daily dropped by an average of 7 millimeters of mercury. However, insulin resistance, cholesterol, and fat mass remained the same between the two compared groups.

As Varady and her colleagues conclude, "These preliminary data offer promise for the use of time-restricted feeding as a weight loss technique in obese adults, but longer-term, large-scale randomized controlled trials [are required]."

The study's corresponding author also comments on the significance of the findings, saying, "The results we saw in this study are similar to the results we've seen in other studies on alternate day fasting."

"[B]ut," she adds, "one of the benefits of the 16:8 diet may be that it is easier for people to maintain. We observed that fewer participants dropped out of this study when compared to studies on other fasting diets."

"The take-home message from this study is that there are options for weight loss that do not include calorie counting or eliminating certain foods."
Krista Varady
"The 16:8 diet is another tool for weight loss that we now have preliminary scientific evidence to support," Varady concludes. "When it comes to weight loss, people need to find what works for them because even small amounts of success can lead to improvements in metabolic health."


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