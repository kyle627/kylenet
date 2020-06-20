<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>kylenet login</title>
</head>
<body>
    <center><h1>KyleNet Login :3</h1></center>
    <header>
        <div>
            <?php
                if (isset($_SESSION['userId'])) {
                    echo'<center>
                            <form action="includes/logout.inc.php" method="post" id="logoutform" class="logoutform">
                                 <button type="submit" class="button" name="logout-submit" id="logout-button">Logout</button>
                            </form>
                        </center';

                } 
                else {
                    echo '<center>
                            <form action="includes/login.inc.php" method="post" id="loginform">
                                <input type="text" name="mailuid" placeholder="Username/E-mail">
                                <input type="password" name="pwd" placeholder="Password..." class="textbox">
                                <button type="submit" class="button" name="login-submit" >Login</button>
                            </form>
                            <a href="signup.php" class="button" id="signup-button">Signup</a>
                         </center>';
                    }
            ?>
        </div>
    </header>