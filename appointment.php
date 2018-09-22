<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="utf-8">
<title>Appointment</title>



	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap-datepicker3.css">

<link href="css/style.css" rel="stylesheet" type="text/css">

  

</head>
<body>

<?php
if (!isset($_SESSION)){
		  session_start();
		  }
  
include ('config.php');
if(isset($_POST['submit3'])){
	
	

	
    $patientName= $_POST['appName'];
          $email= $_POST['appEmail1'];
         $mobNum= $_POST['appMobile'];
        $address= $_POST['appAddress'];
         $gender= $_POST['careerRadios'];
		 $user_id= $_SESSION["ID"];
          $year = $_POST['year'];
	     $month = $_POST['month'];
    	   $day = $_POST['day'];
          $date = date("Y-m-d", mktime(0,0,0,$month, $day, $year));
    $departments= $_POST['department'];
        $doctors= $_POST['doctors'];
		$appDay=$_POST['datepicker'];
		
        
  
    $stmt = $conn->prepare("INSERT INTO appointment (user_name,user_id,user_email,user_mobile,user_address,user_gender,user_bdate,appoint_dep,appoint_date,appoint_drs) VALUES (?, ?, ?, ?, ?, ?, ? ,? ,? ,?)");

$stmt->bind_param("sisisissss",$patientName,$user_id,$email,$mobNum,$address,$gender,$date,$departments,$appDay, $doctors);

$stmt->execute();

$stmt->close();
     ?>	 <script> alert ("Your appointment request had been sent successfully");</script><?php

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

 include('loginappointment.php'); 
 



?>
  
           
          </div>
	<?php	
    
}
	
else{	
		?>
        
         <div class="col-lg-6 col-xs-12" id="signIn">
        <span>
        
          <?php echo'Welcome '. $_SESSION["NAME"] ; 
          
          $sql = "SELECT * FROM users where user_email = '".$_SESSION["EMAIL"]."'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0){
	
		
	 while($row = $result->fetch_assoc()) {
		$_SESSION["ID"]=$row["user_id"];
    } }
       ?>   
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
       
       <nav class="navbar navbar-expand-lg navbar-light style="z-index:1000" ">
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
       <div class="row ">
       
       <div class="col-lg-4  d-none d-lg-flex " id="Show" >
         <img class="career" src="imgs/doc.png" width="555" height="553"> 
         </div>
         
      
       
       	<div class="col-lg-5 offset-2 col-xs-12 text-center" id="appForm" style="margin-top:200px; padding-top:40px;" >
                
                 <h3 style="font-family:Arial, Helvetica, sans-serif; letter-spacing:2px; color:#fff; margin-bottom:60px;" > 
                 Please Sign in or Register to make an appointment </h3>
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                   data-target="#exampleModal" style="margin-right:20px;" >
  Sign In
</button>
 
 <button type="submit" name="submit" class="btn btn-primary btn-lg" 
 onclick="window.location.href='index.php'">Home Page</button>

<?php include('loginappointment.php');  ?>

                   
      
       </div>
     </div>
      </div>
    </div>
    
    
    
    	
    <?php
			
		}else{
?>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

            
             <div id="content-career">
      <div class="container">
       <div class="row ">
       
       <div class="col-lg-4  d-none d-lg-flex " id="Show" >
         <img class="career" src="imgs/doc.png" width="555" height="553"> 
         </div>
         
      
       
       	<div class="col-lg-5 offset-2 col-xs-12 " id="appForm" >
        
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" onsubmit=" return appvalidate();">
                <div class="row" id="DAF">
                 <div class="col-12 text-center">
                     <h3> Doctor Appointment Form </h3>
                  </div>
                </div>
          <div class="form-group">
           
            <input type="text" class="form-control form-control-lg" id="appName" name="appName" aria-describedby="userName" placeholder="Patient Name">
        
          </div>
          
                  
          <div class="form-group">
        <input type="email" class="form-control form-control-lg" id="appEmail1" name="appEmail1" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group">
           
            <input type="text" class="form-control form-control-lg" id="appMobile" name="appMobile" aria-describedby="phone Number" placeholder="Mobile Number ">
        
          </div>
          <div class="form-group">
           
            <input type="text" class="form-control form-control-lg" id="appAddress" name="appAddress" aria-describedby="Address" placeholder="Address ">
        
          </div>
  <div class="form-group">
           <label> patient Gender: </label>
           <div class="row">
           <div class="col-9 offset-1" >
          <div class="form-check">
            <input class="form-check-input" type="radio" name="careerRadios" id="careerRadios1" value="male" checked>
              <label class="form-check-label" for="careerRadios1">
                Male
              </label>
           </div>
           <div class="form-check">

  <input class="form-check-input" type="radio" name="careerRadios" id="careerRadios2" value="female">
  <label class="form-check-label" for="careerRadios2">
   Female
  </label>
        </div>
        </div>
        </div>
</div>

<div class="form-group">
           <label> Patient Birth Date: </label> 
 

    <select id="years" class="form-control-sm" name="year" onchange="call()">
           <option value="">year</option>
          </select>
       
          <select id="months" class="form-control-sm" name="month" onchange="call()" >
         <option value="">Month</option>
         <option value="1">Jan</option>
         <option value="2">Feb</option>
         <option value="3">Mar</option>
         <option value="4">Apr</option>
         <option value="5">May</option>
         <option value="6">Jun</option>
         <option value="7">Jul</option>
         <option value="8">Aug</option>
         <option value="9">Sep</option>
         <option value="10">Oct</option>
         <option value="11">Nov</option>
         <option value="12">Dec</option>
</select>
 <select id="days" class="form-control-sm" name="day" >
            <option value="">Day</option>
          </select>
          </div>
         <div class="form-group">
           
            <select id="department" class="form-control" name="department">
           <option value=""> Departments</option>
                <option value="1"> kids clinic</option>
                <option value="2"> skin clinic</option>
                <option value="3">optical clinic</option>
                <option value="4">heart clinic</option>
                <option value="5"> dental clinic</option>
			   <option value="6"> X-ray clinic</option>
				
				
          </select>
 
          </div>
		   
          <div class="form-group">
           
            <select id="doctors" class="form-control" name="doctors">
           <option value=""> doctors</option>
				
          </select>
 
          </div>    
           
             
           <div class="form-group">
		                <div class='input-group date' id='datepicker' >
		            <input type='text' class="form-control" id='datepickerinput' name="datepicker" placeholder="Select Appointment Date"/>
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"> <i class="fas fa-calendar-alt"></i></span>
		                    </span>
		                </div>
		            </div>
         
		
           <button type="submit" name="submit3" class="btn btn-primary" >Submit</button>
          
        </form>
      
       </div>
     </div>
      </div>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
	<script >
		
	

	    $(function () {
	        $('#datepicker').datepicker({
	            format: "dd/mm/yyyy",
	            autoclose: true,
	            todayHighlight: true,
		        showOtherMonths: true,
		        selectOtherMonths: true,
		        autoclose: true,
		        changeMonth: true,
		        changeYear: true,
		        orientation: "button"
	        });
	    });
		
            

    function appvalidate(){
           name=document.getElementById("appName").value;
    numbers=/[0-9]/g;
          email=document.getElementById("appEmail1").value;
				x=email.indexOf("@");
			  y=email.lastIndexOf(".");
			  z=email.length;
	   mobphone=document.getElementById("appMobile").value;
            add=document.getElementById("appAddress").value;
            mob= /^[1-9]{1}[0-9]{9}$/;
              D=document.getElementById("days").value;
              M=document.getElementById("months").value;
              Y=document.getElementById("years").value;
    departments=document.getElementById("department").value;
	    doctors=document.getElementById("doctors").value;
           date=document.getElementById("datepickerinput").value;
		  
		   

    
    
    if (name=="")
{
		document.getElementById("appName").style.borderColor = "red";
	alert("please assign a user name!");
	
	return false;

}else if (name.match(numbers))
{  	 document.getElementById("appName").style.borderColor = "white";
		document.getElementById("appName").style.borderColor = "red";
	alert("please assign characters only!");
	return false;

}
    else if (email==""){
	
	 document.getElementById("appName").style.borderColor = "white";
	document.getElementById("appEmail1").style.borderColor = "red";
	alert("please assign your email!"); 
	return false;
}
    else if(x<1 || (y-x)<=1  || (z-y)<=2 ){
	
	 document.getElementById("appName").style.borderColor = "white";
	document.getElementById("appEmail1").style.borderColor= "red";
	alert("Not valid mail!"); 
	return false;
}
    else if(mobphone==""){
			 document.getElementById("appName").style.borderColor = "white";
     document.getElementById("appEmail1").style.borderColor = "white";
    document.getElementById("appMobile").style.borderColor= "red";
    alert("please assign your mobile number!");
    return false;
    
}else if(mobphone.length!=11){
   	 document.getElementById("appName").style.borderColor = "white";
    document.getElementById("appEmail1").style.borderColor= "white";
    document.getElementById("appMobile").style.borderColor= "red";
    alert("the mobile number must be 11 digits!");
    return false;
    
}else if(isNaN(mobphone)){
    	 document.getElementById("appName").style.borderColor = "white";
    document.getElementById("appEmail1").style.borderColor= "white";
    document.getElementById("appMobile").style.borderColor= "red";
   alert("Please enter digit number only");
    return false;
    
}else if((mobphone.charAt(0)!=0)||(mobphone.charAt(1)!=1)){
	 document.getElementById("appName").style.borderColor = "white";
    document.getElementById("appEmail1").style.borderColor= "white";
    document.getElementById("appMobile").style.borderColor= "red";
   alert("Mobile Number Must starts with 01");
    return false;
    
}else if(add==""){
	 document.getElementById("appName").style.borderColor = "white";
    document.getElementById("appEmail1").style.borderColor= "white";
    document.getElementById("appMobile").style.borderColor= "white";
         document.getElementById("appAddress").style.borderColor = "red";
	alert("please assign your address!");
	return false;
         }else if(D=="1900"){
            	 document.getElementById("appName").style.borderColor = "white";
    document.getElementById("appEmail1").style.borderColor= "white";  
        document.getElementById("appAddress").style.borderColor = "white";
       document.getElementById("days").style.borderColor = "red";
             alert("please select day of birth!");
	         return false;

              
         }
    else if(M==""){	 document.getElementById("appName").style.borderColor = "white";
    document.getElementById("appEmail1").style.borderColor= "white";
                     document.getElementById("days").style.borderColor = "white";
                    document.getElementById("months").style.borderColor = "red";
               alert("please select month  of birth!");
	         return false;

            
         }
    else if(Y==""){
             	 document.getElementById("appName").style.borderColor = "white";
    document.getElementById("appEmail1").style.borderColor= "white"; 
	    document.getElementById("days").style.borderColor = "white";
        document.getElementById("months").style.borderColor = "white";
       document.getElementById("years").style.borderColor = "red";
             alert("please select year of birth!");
	         return false;

              
         }else if(departments==""){
            document.getElementById("appName").style.borderColor = "white";
    document.getElementById("appEmail1").style.borderColor= "white"; 
	    document.getElementById("days").style.borderColor = "white";
        document.getElementById("months").style.borderColor = "white";   
        document.getElementById("years").style.borderColor = "white";
       document.getElementById("department").style.borderColor = "red";
             alert("please select the department!");
	         return false;

              
         }
		 else if(doctors==""){
               document.getElementById("appName").style.borderColor = "white";
    document.getElementById("appEmail1").style.borderColor= "white"; 
	    document.getElementById("days").style.borderColor = "white";
        document.getElementById("months").style.borderColor = "white";
		 document.getElementById("years").style.borderColor = "white";
        document.getElementById("department").style.borderColor = "white";
       document.getElementById("doctors").style.borderColor = "red";
             alert("please select a doctor!");
	         return false;

              
         }
		  else if(date==""){
               document.getElementById("appName").style.borderColor = "white";
    document.getElementById("appEmail1").style.borderColor= "white"; 
	    document.getElementById("days").style.borderColor = "white";
        document.getElementById("months").style.borderColor = "white";
		 document.getElementById("years").style.borderColor = "white";
		 document.getElementById("department").style.borderColor = "white";
        document.getElementById("doctors").style.borderColor = "white";
       document.getElementById("datepickerinput").style.borderColor = "red";
             alert("please select the appointment date!");
	         return false;

              
         }
}

		$(document).ready(function() {

     $("#department").change(function() {
        var val = $(this).val();
        if (val == "1") {
            $("#doctors").html("<option value='Dr.makky veil'>Dr.makky veil</option><option value='Dr.Jelena Maksimovic'>Dr.Jelena Maksimovic</option><option value='Dr. Riham Ammar'>Dr. Riham Ammar</option>");
        } else if (val == "2") {
            $("#doctors").html("<option value='Dr.Sergio Mazzei'>Dr.Sergio Mazzei</option><option value='Dr.robert jone'>Dr. robert jone</option><option value='Dr.jone sam'>Dr.jone sam</option>");

        } else if (val == "3") {
            $("#doctors").html("<option value='Dr.hossam el sawy'>Dr.hossam el sawy</option><option value='Dr.Emma Adsuar Gomez'>Dr.Emma Adsuar Gomez</option><option value='Dr.maram saad'>Dr.maram saad</option>");

        }else if (val == "4") {
            $("#doctors").html("<option value='Dr. Samaa Sherif El Abd'>Dr. Samaa Sherif El Abd</option><option value='Dr.Valentina Ghorashi'>Dr.Valentina Ghorashi</option><option value='Dr.Mahmoud Ahmed EL Batawi'>Dr.Mahmoud Ahmed EL Batawi</option>");

        }else if (val == "5") {
            $("#doctors").html("<option value='Dr.sara jack'>Dr.sara jack</option><option value='Dr.jack merrt'>Dr.jack merrt</option><option value='Dr. rooze danial'>Dr. rooze danial</option>");

        }else if (val == "6") {
            $("#doctors").html("<option value='Dr.marina yosef'>Dr.marina yosef</option><option value='Dr.mary nazeef'>Dr.mary nazeef</option><option value='Dr.john mark'>Dr.john mark</option>");

        }
    });


});
    </script>
            
            
       


<?php include('templates/footer.php'); }?>

  <script type="text/javascript">function add_chatinline(){var hccid=44291399;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>


<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js"> </script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/js.js"> </script>



</body>

</html>
