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
     
     
   <div>  <h1 style="color:#42635d; margin-bottom:30px; text-align:center; "> The top 10 mental health apps</h1> </div>
   
   
    <div id="img1" style="margin-bottom:30px; text-align:center;"> <img src="imgs/1-5.jpg" width="550" height="400"></div>
    
    
<p style="font-size:18px; text-align:left;"> <h1 style="color:#4dcdc3;">Apps are available for everything</h1> these days — from shopping to entertainment and travel. Apps that claim to help look after your mental health and well-being are also available. So, we have selected the best apps for mental health.
a man using a smartphone
Mental health apps may help with conditions such as anxiety and depression, as well as enhance psychological well-being.
Approximately 48.3 million adults in the United States are faced with a mental health condition each year, and 9.8 million of those are serious conditions that limit the activities of everyday life.

Among U.S. adults aged 18–44, mood disorders such as depression and bipolar disorder are now the third most common reason for hospitalizations.

Furthermore, those who live with severe mental illness are more likely to face chronic medical conditions and die around 25 years earlier.

Exercising regularly and eating a healthful diet can boost mental health and well-being significantly, help to reduce symptoms of depression, anxiety, and stress, and increase endorphins responsible for happiness.

Apps focus on protecting or improving mental health using methods including meditation, hypnosis, cognitive behavioral therapy (CBT), and providing a valuable support network.

Medical News Today have put together a list of the top 10 apps that can help to enhance your well-being and look after your mental health.
<br>
Calm
Android: Free

iPhone: Free

Calm logo
Calm was branded as Apple's "App of the Year" in 2017. The app is designed to reduce anxiety, improve sleep, and help you to feel happier.

Calm focuses on the four key areas of meditation, breathing, sleep, and relaxation, with the aim of bringing joy, clarity, and peace to your daily life.

The app delivers meditations that can help you to destress, as well as breathing programs, music, and sounds from nature to relax your mind and body and promote better sleep.

Calm is the perfect app if you are new to meditation, but it also offers programs for more advanced users. Meditation sessions are available in lengths of 3–25 minutes, to fit in with your schedule.

Headspace
Android: Free

iPhone: Free

Headspace logo
Headspace uses mindfulness and meditation to help you perform at your best each day. The app's mission is to provide you with the essential tools to achieve a happier, healthier life.

Whether you need to build healthier relationships, find a place of calm, keep your mind fit, or reduce stress, Headspace has hundreds of themed mindfulness and meditation sessions to support you.

The app reports that meditation reduces daily stress and improves focus and attention. What is more, using Headspace is suggested to enhance compassionate behavior toward others in just 3 weeks.

Moodnotes
iPhone: $3.99

Moodnotes logo
Moodnotes is a thought journal and mood diary. The app can be used to capture your feelings and improve your thinking habits through the implementation of CBT and positive psychology.

Track your mood and increase self-awareness of what influences it. Learn to recognize "traps" in your thinking and ways to rethink the situation.

If you happen to enter a "thinking trap," Moodnotes will provide suggestions and useful perspectives to reduce stress and enhance well-being. Progress is viewable in the helpful "Insights" dashboard.

<br>
  
Moodpath logo
Moodpath is your pocket-sized mental health companion. Whether you are facing a rough patch or have concerns about your mental health, the app's goal is to support you through the difficult times and guide you out the other side.

Moodpath asks daily questions in order to assess your well-being and screen for symptoms of depression. The screening progress aims to increase your awareness of your thoughts, emotions, and feelings.

After a period of 2 weeks, the app generates an electronic document that you can discuss with a healthcare professional. More than 150 videos and psychological exercises are available to help you understand your mood and strengthen your mental health.

Pacifica
Android: Free

iPhone: Free

Pacifica logo
Pacifica is an app with anxiety and stress in mind. It provides a toolbox to deal with daily anxiety and stress, along with a highly supportive community of like-minded individuals.

Pacifica helps you to break cycles of unhelpful thoughts, feelings, and behaviors through methods such as CBT, mindfulness meditation, mood tracking, and relaxation.

The app houses audio lessons and activities that help you to cope with stress and depression, and it sets daily challenges to help you tackle anxiety one day at a time and reach your long-term goals.<br>
  
SuperBetter
Android: Free

iPhone: Free

SuperBetter logo
SuperBetter is a game focusing on increasing resilience and the ability to remain strong, optimistic, and motivated when presented with challenging obstacles in life.

A study by the University of Pennsylvania in Philadelphia found that when people played SuperBetter for 30 days, their mood improved, symptoms of anxiety and depression decreased, and self-belief to achieve goals increased.

The app will help you to adopt new habits, improve your skills, strengthen relationships, complete meaningful projects, and achieve lifelong dreams. SuperBetter also has the potential to help you beat depression and anxiety, cope with chronic illness, and recover from post-traumatic stress disorder (PTSD).

7 Cups
Android: Free

iPhone: Free

7 Cups logo
If you are feeling lonely, sad, stressed, or worried, 7 Cups could be the perfect app for you. It provides online therapy and emotional support for anxiety and depression.

There are more than 160,000 trained listeners and licensed therapists who are available to anonymously speak with 24/7. Speak your mind and confide in listeners without the fear of being judged.

These listeners can be searched for based on their experience or their specialties, such as bullying, panic attacks, eating disorders, relationship breakups, and many more. Affordable therapy with an online therapist can commence one-to-one in a confidential setting.<br>
 
Anxiety Relief Hypnosis
Android: Free

iPhone: Free

Anxiety Relief Hypnosis logo
Anxiety Relief Hypnosis is an app suggested to help improve relaxation and reduce anxiety within just 1–3 weeks of use.

The app's developers say that hypnosis can decrease anxious thoughts and enhance your response to relaxation, which, in turn, resets your behavior and enables an improved response to stress.

The app provides an audio session read by a certified hypnotherapist together with calming music and sounds from nature to aid relaxation. The "awaken at end" feature can be disabled to allow you to fall into restful sleep at bedtime.
<br>
  
Happify
Android: Free

iPhone: Free

Happify logo
Happify is a space to overcome negative thoughts and stress and build resilience. Whether you are feeling stressed, anxious, or sad, Happify helps you to regain control of your thoughts and feelings.

In fact, 86 percent of the app's users report feeling better about their lives after 2 months of using it.

Happify employs techniques and evidence-based interventions in the areas of CBT, positive psychology, and mindfulness to help you break old and unhealthful patterns and form new, healthful habits.

The app offers activities and games to improve your life satisfaction and ability to fight negativity. Your emotional well-being is calculated as a happiness score that you can improve upon each week.<br>
  Talkspace logo
Talkspace is a counseling and therapy app that connects users with a convenient, affordable, and confidential way to deal with anxiety, stress, depression, relationship issues, and chronic illness.

A free consultation is provided with a Matching Agent to identify the ideal therapist for your needs based on several factors. More than 1,000 licensed therapists are available, who specialize in anxiety, phobia, depression, domestic violence, PTSD, and more.

After upgrading and becoming a member, access is given to a secure chat room wherein you can raise and discuss your worries with your private counselor. The app's pricing plans are described as being approximately 80 percent lower than traditional office-based appointments.


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