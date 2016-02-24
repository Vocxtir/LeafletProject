<?php
session_start();
if (!empty($_SESSION['login_user'])) {
    header('Location: home.php');
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Connexion avec Ajax</title>
        <link rel="stylesheet" href="V/css/style.css"/>
        <script src="V/js/jquery.js"></script>
        <script src="V/js/jquery.ui.shake.js"></script>
        <script src="V/js/connect.js"></script>

    </head>

    <body>
        <div id="main">
            <h1>Ajax Login Page with Shake Effect</h1>

            <div id="box">
                <form action="" method="post">
                    <label>Username</label> 
                    <input type="text" name="username" class="input" autocomplete="off" id="username"/>
                    <label>Password </label>
                    <input type="password" name="password" class="input" autocomplete="off" id="password"/><br/>
                    <input type="submit" class="button button-primary" value="Log In" id="login"/> 
                    <span class='msg'></span> 

                    <div id="error">

                    </div>	

            </div>
        </form>	
    </div>

</div>
</body>
</html>