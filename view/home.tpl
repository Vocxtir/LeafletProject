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
		<!-- HelloGit -->
    </head>

    <body>
        <div id="main">
            <h1>Role Map World !</h1>

            <div id="box">
                <form action="" method="POST">
                    <label>Username</label> 
                    <input type="text" name="username" class="input" autocomplete="off" id="username"/>
                    <label>Password </label>
                    <input type="password" name="password" class="input" autocomplete="off" id="password"/><br/>
                    <input type="submit" class="button button-primary" value="Log In" id="login"/> 
                    <span class='msg'></span> 

                    <div id="error">

                    </div>	
					
					<a> Create an account </a>

            </div>
        </form>	
    </div>

</div>
</body>
</html>