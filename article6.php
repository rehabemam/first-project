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
     
     
   <div>  <h1 style="color:#42635d; margin-bottom:30px; text-align:center; ">What are the best diets for 2018?</h1> </div>
   
   
    <div id="img1" style="margin-bottom:30px; text-align:center;"> <img src="imgs/1.1.jpg" width="550" height="400"></div>
    
    
<p style="font-size:18px; text-align:left;"><h1 style="color:#4dcdc3;">When it comes to New Year's resolutions</h1> eating better is at the top of our list. But which diet plan is the best? A panel of health experts — on behalf of U.S. News & World Report — reveal the top-rated diets for 2018.
Apples with 2018 engraved
U.S. News & World Report reveal the best diets for 2018.
It is estimated that around 45 million people in the United States go on a diet each year, with weight loss being the primary goal.

<br>
However, whether you're dieting to lose weight or simply to improve overall health, sticking to a specific eating plan can be challenging. With so many diets to choose from, how can you tell which one will work for you?

U.S. News & World Report put together a panel of health experts every year to evaluate the most popular diets in the U.S.This year, the experts assessed 40 diets, ranking them from lowest to highest in seven categories, including the best diets for weight loss, diabetes, and heart health. So, we take a look at some of the key results.

 
The best diets for weight loss
For the majority of dieters, weight loss is the ultimate goal, but losing weight and keeping it off is far from easy.


<br>
  
Research suggests that approximately 30–35 percent of weight lost from dieting is regained within 1 year. But it is possible to maintain weight loss. It's just a matter of finding the right eating plan.

The U.S. News & World Report panel of experts evaluated 40 popular diets for their effects on both short- and long-term weight loss, noting that some people want to lose weight quickly, while others want to maintain their weight loss for years to come.

The health experts rated Weight Watchers as the best diet on both accounts, scoring 4 out of 5 for short-term weight loss, and 3.5 out of 5 for long-term weight loss.

A high-fat diet without the weight gain? Study says it's possible
A high-fat diet without the weight gain? Study says it's possible
Researchers say that there could be a way to avoid weight gain due to a high-fat diet.
READ NOW
One of the longest-running, well-known commercial diets, Weight Watchers incorporates a points system, wherein foods and beverages are assigned points based on their nutritional values, and dieters are assigned a daily points allowance.

According to U.S. News & World Report, the expert panel "appreciated the program's support system, which helps dieters keep the pounds off."

The Volumetrics Diet came in at second place for best weight loss diet, scoring 3.8 out of 5 for short-term weight loss and 3.3 out of 5 for long-term weight loss.

Designed by Barbara Rolls, who is a professor of nutrition working at Pennsylvania State University in Centre County, the Volumetrics Diet focuses on putting foods with low-energy density, such as low-fat milk, grains, and non-starchy fruits and vegetables, at the forefront of one's diet, as well as limiting foods with high-energy density.

 
The best diets for heart health
Heart disease is the leading cause of death for men and women in the U.S., killing around 610,000 people in the country every year.

A poor diet can increase the risk of heart disease, because eating food high in fat can lead to high blood pressure, high cholesterol levels, and obesity, which are major risk factors for the condition.

But which eating plan is best for a healthy heart? For this category, the health experts analyzed each of the 40 diets and gave them average heart-health ratings.

The Dietary Approaches to Stop Hypertension (DASH) diet took first place in this category.

Developed by the National Heart, Lung, and Blood Institute — a part of the National Institutes of Health (NIH) — the DASH diet is high in fruits, vegetables, whole grains, fish, poultry, and low-fat dairy, but it limits foods high in sugar and saturated and trans fats.

The DASH diet was also ranked the best overall diet.

The Mediterranean diet — which emphasizes consuming fish and seafood at least twice weekly, alongside regular consumption of fruits, vegetables, legumes, and whole grains — took joint second place for best heart-healthy diet, alongside the Ornish diet.

With the Ornish diet, fat is limited to 10 percent of daily calories, and foods are divided into five groups, from the least to most healthful.

 
The best diets for diabetes
The Mediterranean diet not only ranked highly for one of the best heart-healthy diets, but it also took the crown for the best diabetes diet, scoring 3.7 out of 5.

It is estimated that around 30.3 million people in the U.S. are living with diabetes, wherein blood glucose levels become too high due to the body's inability to produce or effectively use insulin.

Although eating a healthful diet is important for all of us, people with diabetes need to be extra cautious; skipping meals or eating the wrong foods may lead to problematic highs and lows in blood glucose levels.

According to the panel, "The Mediterranean diet is a great option for preventing or controlling diabetes. [...] Some research has shown that diabetics on a Mediterranean diet may improve their levels of hemoglobin A1C, a measure of blood sugar over time."

The DASH diet makes yet another appearance here, ranking second in the best diabetes diet category, with the experts noting that "its menu looks a lot like widely accepted nutritional guidelines for those with the condition."

Whichever eating plan that you decide is best for you, it's important to note that physical activity is just as important as the foods you eat.

Current guidelines recommend that adults should engage in at least 150 minutes of moderate-intensity or 75 minutes of vigorous-intensity aerobic activity every week.


</p>
     
     
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