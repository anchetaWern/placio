<?php
require_once('/php/header.php'); 
?>
	<div id="form_container">
		<form method="post" action="index.php">
			<label for="email">Email</label>
			<input type="email" name="email" class="span3"/>
			
			<label for="password">Password</label>
			<input type="password" name="password" class="span3"/>
			
			<button class="btn btn-primary" id="btn_login">Login</button>
		</form>
	</div>
<?php
if(!empty($_POST)){
	if($utility->has_empty($_POST) == false){
		$email		= $utility->clean($_POST['email']);
		$password	= md5($utility->clean($_POST['password']));
		
		
		$user_details = $db->select_row("SELECT email, user_id FROM tbl_users WHERE email='$email' AND hashed_password='$password'");
		if(!empty($user_details)){//user exists
			$storage->store('email', $email);//create session for user
			$storage->store('user_id', $user_details->user_id);
			header('Location: homy.php');
			
		}else{
			header('Location: index.php');
		}
	}
}
?>		
<?php
require_once('/php/footer.php');
?>