<?php
//session_start();
if (!empty($_SESSION['login_user'])) {
    header('Location: home.php');
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title> RMW !</title>
        <link rel="stylesheet" href="./view/css/style.css"/>
        <script src="./view/js/jquery.js"></script>
        <script src="./view/js/jquery.ui.shake.js"></script>
        <script src="./view/js/connect.js"></script>
		
		  
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
		<!-- HelloGit -->
    </head>

    <body>
        <div id="main">
            <h1>Role Map World !</h1>

            <div id="box">
                <form action="" method="POST">
                    <label>Username</label> 
                    <input type="text" name="username" class="input" autocomplete="off" id="username"
					title="Enter your Username"/>
                    <label>Password </label>
                    <input type="password" name="password" class="input" autocomplete="off" id="password"
					title = "Enter your Password"/><br/>
                    <input type="submit" class="button button-primary" value="Log In" id="login"/> 
					
                    <span class='msg'></span> 

                    <div id="error">

                    </div>	
				</form>	
				<button id="create-user">Create an account</button>

            </div>


			<div id="dialog-form" title="Create new user">
			  <p class="validateTips">All form fields are required.</p>
			 
			  
				<form id="formRegister">
					<fieldset>
						<label for="name">Name</label>
						<input type="text" name="name" id="username" value="" class="text ui-widget-content ui-corner-all"
											title="Enter your Username">
											  
						<label for="password">Password</label>
						<input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all"
											title = "Enter your Password">
										 
						<!-- Allow form submission with keyboard without duplicating the dialog button -->
						<input type="submit" tabindex="-1" style="position:absolute; top:-1000px" >
					</fieldset>
				</form>
			</div>
		  
		</div>		

</body>
</html>