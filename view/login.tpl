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
                <form action="" method="POST" name="loginForm" id="loginForm">
                    <label>Username</label> 
                    <input type="text" name="username" class="input" autocomplete="off" id="username"/>
                    <label>Password </label>
                    <input type="password" name="password" class="input" autocomplete="off" id="password"/><br/>
                    <input type="submit" class="button button-primary" value="Log In" id="login"/>
                    <input type="hidden" id="action" value="login" /> 
                    
                </form>
                <div id="signIn" onclick="signIn(this);" ><button class="button button-primary"><span id='buttonSign'>Sign in </button></div>
                <span class='msg'></span> 
                <div id="error">
                </div>	
            </div>
            <div id="box" class="boxHidden">
                <form action="" method="post" name="signinForm" id="signinForm"> 
                </form>
                <div id="error1">
                </div>
            </div>
            <div 
                
            </div>

        </div>

    </div>
</body>
</html>