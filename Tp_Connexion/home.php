<?php
session_start();
if(empty($_SESSION['login_user']))
{
header('Location: index.php');
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Home - Login Box Shake Effect</title>
<link rel="stylesheet" href="V/css/style.css"/>
</head>
<body>
<div id="main">
<h1>Yo !</h1>

<a href="logout.php">Déconnexion</a>
</div>
</body>
</html>