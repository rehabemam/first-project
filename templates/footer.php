 <!--
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>WECare Clinic</title>

<link href="../style/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../style/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body>
--> <?php


 include('config.php');


  
if (isset($_POST['submit2'])){
	
	
   


    $name = $_POST['contact_name'];
    $mobile = $_POST['contact_mobile'];
	$message = $_POST['contact_msg'];
   

	
$stmt = $conn->prepare("INSERT INTO contact (contact_name,contact_mobile,contact_msg) VALUES (?, ?, ?)");

$stmt->bind_param("sis",$name,$mobile,$message);

$stmt->execute();

$stmt->close();

	
?><script> alert ("Your message sent successfully");</script><?php

}


?>
<div id="footer">
  
  <div class="container">
  
       <div class="row">
            <div class="col-12">  <h3> PROFESSIONAL HEALTH CARE</h3></div>
            <div class="col-12">  <h2> CONTACT US</h2></div>
       </div>
  	  
        <div class="row d-none d-lg-flex" id="footer-buttons">
            
             <div class="col-3 offset-3" id="contact-info"> <button type="button" id="cont" class="btn btn-primary btn-lg" onClick="footerChange1()" 
            >CONTACT INFO</button>            </div>
            <div class="col-6" id="contact-form-btn"> <button type="button" id="inqu" class="btn btn-primary btn-lg" onClick="footerChange2()">SERVICE INQUIRY</button>
            </div>
 
        </div>
        <div class="row d-none d-lg-none d-md-flex " id="footer-buttons">
            
            <div class="col-3 offset-1" id="contact-info"> <button type="button" id="cont" class="btn btn-primary btn-lg" onClick="footerChange1()" 
            >CONTACT INFO</button>            </div>
            <div class="col-3 offset-2 " id="contact-form-btn"> <button type="button" id="inqu" class="btn btn-primary btn-lg" onClick="footerChange2()">SERVICE INQUIRY</button>
            </div>
 
        </div>
        <div class="row d-md-none d-xs-block " id="footer-buttons">
            
            <div class="col-3 offset-1" id="contact-info"> <button type="button" id="cont" class="btn btn-primary btn-sm" onClick="footerChange1()" 
            >CONTACT INFO</button>            </div>
            <div class="col-3 offset-2 " id="contact-form-btn"> <button type="button" id="inqu" class="btn btn-primary btn-sm" onClick="footerChange2()">SERVICE INQUIRY</button>
            </div>
 
        </div>
         
      
       <div class="row" id="contact-form">
        <div class="col-md-9 offset-md-3 ">
          <form  action="index.php" method="post" onSubmit="return validationf();">
                    <div class="row">
                      <div class="col-md-4 col-xs-12">
                        <input id="name" name="contact_name" type="text" class="form-control" placeholder="Your name...">
                      </div>
                      <div class="col-md-4 col-xs-12">
                        <input type="text"  id="phone" name="contact_mobile" class="form-control" placeholder=" Your Phone Number...">
                      </div>
                    </div>
                    
                     <div class="row">
                      <div class="col-8">
                          <textarea class="form-control" id="message" name="contact_msg"  placeholder="Your message..."
                          rows="3"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2 offset-3">
                        <button type="submit" name="submit2" class="btn btn-primary mb-2" >Send message</button>
                      </div>
                     </div> 
            </form> 
 

                   </div> 
       </div>
        <div class="row" id="icons">
           
            <div class="col-12">
            
               <div class="row">
                  <div class="col-4"> 
                  			<div class="round ho"> <i class="fas fa-home"> </i> </div> 
                            <h5> ADDRESS</h5>
                            <p> Nasr City,Mostafa El Nahas St</p>

                  </div>
                  <div class="col-4"> 
                  		  <div class="round ph"> <i class="fas fa-phone footer-phone"></i> </div>
                          <h5> PHONES</h5>
                          <p> 01007744177-01007744178</p>

                  </div>
                  <div class="col-4">
                  		<div class="round ma"> <i class="far fa-envelope"></i> </div> 
                         <h5> E-MAIL</h5>
                         <p> weCareClinic@Gmail.com</p>

                  </div>
                </div>
            </div>
           
       </div>
       <div class="row" id="social" >
            <div class="col-12">
            <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/"> <i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/"> <i class="fab fa-youtube"></i> </a>
            <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> </a>
            <a href="https://plus.google.com"><i class="fab fa-google-plus-g"></i> </a>
            </div>
        </div>

 </div>
 
</div>  


<script>


 
function validationf(){
	

var name=document.getElementById('name').value;
var phone=document.getElementById('phone').value;
var message=document.getElementById('message').value;
 var numbers = /[0-9]/g;

if (name==""){
	
	alert ("please Enter Your Name!");
	return false;
	
	}
else if (name.match(numbers)){
	
	alert ("Invalid Name Correct It Please!");
	return false;
	
	}	
else if (phone==""){
	
	alert ("Your Phone Number Please!");
	return false;
	}

 else if(isNaN(phone)||phone.indexOf(" ")!=-1)
 {
	alert("phone Number is not correct!")
	return false; 
 }

else if (phone.charAt(0)!="0" && phone.charAt(1)!="1")
 {
	  alert("phone Number is not correct should start with 01 ");
	  return false
 }
	
else if (message==""){
	
	alert ("Enter Your Message Please!");
	return false;
	}

else if (message.length<20){
    alert ("Message Must Be At Least 20 Characters!");
	return false;
}

else{
	return true;
}
	
}


</script>


<!--
 </body><script src="../js/jquery-3.3.1.min.js"> </script>
<script src="../js/popper.min.js"> </script>
<script src="../js/tether.min.js"> </script>
<script src="../js/bootstrap.min.js"> </script>
<script src="../js/js.js"> </script>
</body>
</html>
-->