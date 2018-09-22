

<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>-->

<!-- Modal -->
<?php 

 include('config.php');


  
if (isset($_POST['submit5'])){
	
	if (!isset($_SESSION)){
		  session_start();
		  }
  
    
    $Email = $_POST['user_email'];
	$Pass = $_POST['user_password'];
	$encryptedPassword=md5($Pass);
	


$sql = "SELECT * FROM users where user_email = '".$Email."' AND user_password = '".$encryptedPassword."'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0){
	
	$_SESSION["EMAIL"]=$_POST['user_email'];
	$_SESSION["PASS"]=$_POST['user_password'];
	$_SESSION["login"] = "OK";
	
	 while($row = $result->fetch_assoc()) {
      
		$_SESSION["NAME"]=$row["user_name"];
		$_SESSION["ID"]=$row["user_id"];
    } 
	header( 'Location:appointment.php' ) ;
	
}
	
else{
	

	?>
    <script> alert ("Wrong Email Or Password");</script>
    	
    <?php
	

	
 
}

}


 ?>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LOG IN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
                    <div class="container">
                
                 <div class="row">
                 <div class="col-9 offset-1">
                <form action="appointment.php" method="post" onSubmit="return validation(); ">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Email :</label>
                   <input type="email" class="form-control" id="email" name="user_email" aria-describedby="emailHelp"                       placeholder="Enter your email">
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password :</label>
                    <input type="password" class="form-control" id="password" name="user_password" placeholder="Password">
                  </div>
                  
                  </div>
                  
                </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 <button type="submit" name="submit5" class="btn btn-primary">SIGN IN</button>
                </form>
                
         </div>
    </div>
  </div>
</div>

<script>
function validation(){
	var email=document.getElementById('email').value;
	x=email.indexOf("@");
	y=email.lastIndexOf(".");
	z=email.length;

	var password=document.getElementById('password').value;
	
	
	
if (email==""){
	
	alert ("Email Please!");
	return false;
	}
else if(x<1 || (y-x)<=1  || (z-y)<=2 ){
	alert("Not Valid Mail!"); 
	return false;
}
else if (password==""){
    alert ("Password Please!");
	return false;
}

else if (password.length<4){
    alert ("Password must be at least 4 characters!");
	return false;
}
else{
	return true;
}
	
  }

</script>