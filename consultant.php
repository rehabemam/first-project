<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="utf-8">
<title>Consultation</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body>

<?php

include ('config.php');
    
if (isset($_POST['submit']))

{  
    $sUser     =  $_POST['ConsUserName'];
    $sEmail    =  $_POST['ConsEmail'];
    $sMobile   =  $_POST['ConsMobile'];
    $sGender   =  $_POST['ConsGender']; 
    $mon     =  $_POST['month'];
    $da        =  $_POST['day'] ;
	$ye       =  $_POST['year'];
    $dai= $ye."-".$mon."-".$da;
    
  //  $sBirthDate = date("Y-m-d",mktime(10,5,15,$mon, $da, $ye));                //$sBirthDate = echo $'Y-m-d h:i:s'); $sBirthDate=strtotime(sBirthDate);
	$sMilitary =  $_POST['military'];
    if (isset($_POST['HBP'])){
	$sHighB    =  $_POST['HBP'];
    
    }
    else{
        $sHighB    =  0;
        
    }
        if (isset($_POST['HDisease'])){
	$sHDisease    =  $_POST['HDisease'];
        }
    
    else{
	$sHDisease    =  0;
        }
            
          if (isset($_POST['Hcholest'])){
	$sHcholest    =  $_POST['Hcholest'];
        }  
    else{
        $sHcholest    = 0;
    
    }
            
        if (isset($_POST['Diabetes'])){
	$sDiabetes    =  $_POST['Diabetes'];
        }   
    else{
        $sDiabetes    = 0;
        
    }
    
	 if (isset($_POST['Allergy'])){
	$sAllergy    =  $_POST['Allergy'];
        }   
    else{
    $sAllergy    = 0;
    }
	
    

	$sSymptoms =  $_POST['consMessage'];

 $stmt = $conn->prepare( "INSERT INTO consultant ( user_name,user_email,user_mobile,user_gender,user_staus,user_bdate,user_symptoms ,HBP,HD, HC ,diabets , allergy )
     VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");  

   $stmt->bind_param("ssssssssssss" ,$sUser ,$sEmail , $sMobile,$sGender, $sMilitary,$dai,$sSymptoms,$sHighB,$sHDisease,$sHcholest,$sDiabetes,$sAllergy);
   
	 $stmt->execute();
     $stmt->close();
    
    move_uploaded_file($_FILES["analysisFile"]["tmp_name"],"upload_consultant/".
	$_FILES["analysisFile"]["name"]);
    
    
    ?>	 <script> alert ("Your consultant form had been sent successfully");</script><?php
    
	
	}
    

?> 

<!--END OF PHP CODE -->
<div id="header-appointment" >

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


 include('loginConsultant.php');


  

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
  
            
      <?php
        if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
			?>
    <div id="content-career">
      <div class="container">
       <div class="row">
       
       <div class="col-lg-4 d-none d-lg-flex " id="Show" >
         <img src="imgs/doctor-img2.png" width="487" height="544">
         
         
          </div>
      
       
       	<div class="col-lg-6 offset-2 col-xs-12  text-center" id="appForm" style="margin-top:200px; padding-top:40px;" >
        
                <h3 style="font-family:Arial, Helvetica, sans-serif; letter-spacing:2px; color:#fff; margin-bottom:60px;" > 
                 Please Sign in or Register to send a counsultation </h3>
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal" style="margin-right:20px;" >
  Sign In
</button>
 
 <button type="submit" name="submit" class="btn btn-primary btn-lg" onclick="window.location.href='index.php'">Home Page</button>

<?php include('loginappointment.php');  ?>
      
       </div>
     </div>
      </div>
    </div>
    	
    <?php
			
		}else{
?>      
            
             <div id="content-career">
      <div class="container">
       <div class="row">
       
       <div class="col-lg-4 d-none d-lg-flex " id="Show" >
         <img src="imgs/doctor-img2.png" width="487" height="544">
         
         
          </div>
      
       
       	<div class="col-lg-6 offset-2 col-xs-12 " id="appForm" >
        
 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"  enctype="multipart/form-data" id="formCons" onSubmit="return validCons();"> <!--staring form validation-->

 <div class="row" id="DAF">
                 <div class="col-12 text-center">
             <h3> Online medical consultation </h3>
             <p>Need to consult a doctor, but no time for office visit? Take an advantage of the free online remote consultation.                <br>
             Just fill in the form and our doctors will answer you as soon as possible.</p>
                  </div>
                  </div>
          <div class="form-group">
           
 <input type="text" class="form-control form-control-lg" id="ConsUserName" name="ConsUserName" aria-describedby="userName" placeholder="Patient Name * ">
        
          </div>                    
          <div class="form-group">
          
 <input type="email" class="form-control form-control-lg" id="ConsEmail" name="ConsEmail" aria-describedby="emailHelp" placeholder="Enter an email to recieve our consultant *">
        </div>
        
         <div class="form-group">
           
 <input type="text" class="form-control form-control-lg" id="ConsMobile" name="ConsMobile" aria-describedby="ConsMobile" placeholder="Enter your mobile * ">
        
          </div>
     
           <div class="form-group">
           <label> Your Gender: </label>
           <div class="row">
           <div class="col-9 offset-1" >
          <div class="form-check">
            <input class="form-check-input" type="radio" name="ConsGender" id="ConsGender" value="0" checked>
              <label class="form-check-label" for="Gender">
                Male
              </label>
           </div>
           <div class="form-check">

  <input class="form-check-input" type="radio" name="ConsGender" id="ConsGender" value="1">
  <label class="form-check-label" for="Gender">
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
         <option value="01">Jan</option>
         <option value="02">Feb</option>
         <option value="03">Mar</option>
         <option value="04">Apr</option>
         <option value="05">May</option>
         <option value="06">Jun</option>
         <option value="07">Jul</option>
         <option value="08">Aug</option>
         <option value="09">Sep</option>
         <option value="10">Oct</option>
         <option value="11">Nov</option>
         <option value="12">Dec</option>
</select>
 
<select id="days" class="form-control-sm" name="day" >
            <option value="">Day</option>
          </select>
          

          </div>
<div class="form-group">
           <label> Marital Status: </label>
           <div class="row">
           <div class="col-9 offset-1" >
          <div class="form-check">
            <input class="form-check-input" type="radio" name="military" id="military" value="0" checked>
              <label class="form-check-label" for="military">
                Married
              </label>
           </div>
           <div class="form-check">

  <input class="form-check-input" type="radio" name="military" id="military" value="1">
  <label class="form-check-label" for="military">
   Single
  </label>
        </div>
        </div>
        </div>
</div>
<div class="form-group">

<label> Do you have any of the following illnesses ? </label>
<div class="row">
           <div class="col-9 offset-1" >
           <div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" id="Check1" name="HBP">
  <label class="form-check-label" for="defaultCheck1">
    High blood pressure 
  </label>
  </div>
  
  
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" id="Check2" name="HDisease">
  <label class="form-check-label" for="Check2">
    Heart disease
  </label>
  </div>
  
  
  
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" id="Check3" name="Hcholest">
  <label class="form-check-label" for="Check3">
    High Cholesterol
  </label>
  </div>
  
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" id="Check5" name="Allergy">
  <label class="form-check-label" for="Check5">
    Allergy
  </label>
  </div>
               
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" id="Check4" name="Diabetes">
  <label class="form-check-label" for="Check4">
    Diabetes
  </label>
  </div>
  
  
  
  
  </div>
  </div>

     </div>
<div class="form-group">
       <label for="message">Symptoms with duration:</label>
       <textarea type="text" id="consMessage" name="consMessage" rows="4" class="form-control md-textarea"></textarea>
       
                         
</div>

  <div class="form-group">
    <label for="AnalysisFile"> Upload your Analysis or Radiation if it exist : </label>
    <input type="file" class="form-control-file" id="analysisFile" name="analysisFile">
  </div>
           <button type="submit" name="submit" class="btn btn-primary" value="upload">Submit</button>
        </form>
      
       </div>
     </div>
      </div>
    </div>
</div>

            
       <script>
           
           function validCons(){
    
 username = document.getElementById("ConsUserName").value;
 email    =  document.getElementById("ConsEmail").value;
    x=email.indexOf("@");
	q=email.lastIndexOf(".");
	z=email.length;
 Symptoms =  document.getElementById("consMessage").value;     
 D= document.getElementById("days").value;  
 M= document.getElementById("months").value;
 Y= document.getElementById("years").value;
    numbers=/[0-9]/g;                           // this pattern to check validation on nums
 
 mobile = document.getElementById("ConsMobile").value;  // validation mobile 
    mob = /^[1-9]{1}[0-9]{9}$/;
    
    
 if (username == "")
     
  {	
    document.getElementById("ConsUserName").style.borderColor = "red";
	alert("please assign a user name!");
	return false;
  }
        
 if (username.match(numbers))
     
  {	
    document.getElementById("ConsUserName").style.borderColor = "red";
	alert("user name must be characters only!");
	return false;
  }
    
    
    
 else if (email == "") 
     {
            document.getElementById("ConsUserName").style.borderColor = "white";
            document.getElementById("ConsEmail").style.borderColor ="red" ;
            alert("please assign your email!");
	        return false;
     }
     else if( x<1 || (q-x)<=1  || (z-q)<=2 )
  {
	
	document.getElementById("ConsUserName").style.borderColor = "white";
	document.getElementById("ConsEmail").style.borderColor = "red";
	alert("Not valid mail!"); 
	return false;
  }
    
	
    else if(mobile =="")
	{
    document.getElementById("ConsUserName").style.borderColor = "white";
     document.getElementById("ConsEmail").style.borderColor = "white";
     document.getElementById("ConsMobile").style.borderColor= "red";
     alert("please assign your mobile number!");
     return false;
	}
	else if (mobile.length !=11)
	
	{
     document.getElementById("ConsUserName").style.borderColor = "white";
     document.getElementById("ConsEmail").style.borderColor= "white";
     document.getElementById("ConsMobile").style.borderColor= "red";
     alert("the mobile number must be 11 digits!");
     return false;
	}
	else if (isNaN(mobile))
	{   
	    document.getElementById("ConsUserName").style.borderColor = "white";
        document.getElementById("ConsEmail").style.borderColor= "white";
        document.getElementById("ConsMobile").style.borderColor= "red";
        alert("Please enter mobile digit number only");
        return false;
	}
	
	else if((mobile.charAt(0)!=0)||(mobile.charAt(1)!=1))
	
	{    
	     document.getElementById("ConsUserName").style.borderColor = "white";
         document.getElementById("ConsEmail").style.borderColor= "white";
	     document.getElementById("ConsMobile").style.borderColor= "red";
		 alert("Mobile Number Must starts with 01");
		 return false;
	}
	
    else if (D=="1900")
        {     
		
	        document.getElementById("ConsUserName").style.borderColor = "white";
            document.getElementById("ConsEmail").style.borderColor= "white"; 
            document.getElementById("ConsMobile").style.borderColor = "white";
            document.getElementById("days").style.borderColor ="red";
            alert("please select your day of birthdate !");
            return false;

 
        }
     else if (M=="")
        {   
		     
		    document.getElementById("ConsUserName").style.borderColor = "white";
            document.getElementById("ConsEmail").style.borderColor= "white"; 
            document.getElementById("ConsMobile").style.borderColor = "white";
            document.getElementById("days").style.borderColor = "white";
            document.getElementById("months").style.borderColor ="red";
            alert("please select your month of birthdate !");
            return false;

 
        }
     else if (Y=="")
        {   
		
		
		    document.getElementById("ConsUserName").style.borderColor = "white";
            document.getElementById("ConsEmail").style.borderColor= "white"; 
            document.getElementById("ConsMobile").style.borderColor = "white";
			document.getElementById("days").style.borderColor = "white";
            document.getElementById("months").style.borderColor = "white";
            document.getElementById("years").style.borderColor ="red";
            alert("please select your year of birthdate !");
            return false;

 
        }
    
    else if (Symptoms=="")
        {   
		
		    document.getElementById("ConsUserName").style.borderColor = "white";
            document.getElementById("ConsEmail").style.borderColor= "white"; 
            document.getElementById("ConsMobile").style.borderColor = "white";
			document.getElementById("days").style.borderColor = "white";
            document.getElementById("months").style.borderColor = "white";
            document.getElementById("years").style.borderColor = "white";
            document.getElementById("consMessage").style.borderColor ="red";
            alert("please assign your Symptoms ,then Upload your Analysis or Radiation if it exist  !");
            return false;

 
        }
	

	
	else
	
	{
	
	return true;
    }
    
}
           
           
    </script>
          
            
            
         

<script type="text/javascript">function add_chatinline(){var hccid=44291399;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>

<?php include('templates/footer.php'); }?>
<script src="js/jquery-3.3.1.min.js"> </script>
<script src="js/popper.min.js"> </script>
<script src="js/tether.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
<script src="js/jquery.js"> </script>
<script src="js/js.js"> </script>
<script src="js/consultnt.js"></script>

</body>

</html>
