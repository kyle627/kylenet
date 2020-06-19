<?php
require "header.php";
?>

<main>
    <div class="device-login">
        <form action="includes/login.inc.php" method="post" id="loginform" class="loginform">
            <input type="text" name="mailuid" placeholder="Username/E-mail..." class="textbox"><br>
            <input type="password" name="pwd" placeholder="Password..." class="textbox"><br>
            <button type="submit" class="button" name="login-submit" >Login</button>
        </form>
    </div>
</main>

<?php
    require "footer.php";
?>