<?php
require "header.php";
?>

    <main>
        <div align="center">
            <h1>Signup</h1>
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p>Fill in all fields!</p>';
                    }
                    else if ($_GET['error'] == "invaliduidmail") {
                        echo '<p>Invalid username and e-mail!</p>';
                    }
                    else if ($_GET['error'] == "invalidmail") {
                        echo '<p>Invalid e-mail!</p>';
                    }
                    else if ($_GET['error'] == "invaliduid") {
                        echo '<p>Invalid username!</p>';
                    }
                    else if ($_GET['error'] == "passwordcheck") {
                        echo '<p>Your passwords do not match!</p>';
                    }
                    else if ($_GET['error'] == "usertaken") {
                        echo '<p>Username is already taken</p>';
                    }
                	else if ($_GET['signup'] == "success") {
                    	header("Location:  ../kylenet/index.php");
                    	echo "You have made an account!";
                    }
                }
            ?>
                <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username" class="textbox"><br><br>
                <input type="text" name="mail" placeholder="E-mail" class="textbox"><br><br>
                <input type="password" name="pwd" placeholder="Password" class="textbox"><br><br>
                <input type="password" name="pwd-repeat" placeholder="Repeat Password" class="textbox"><br><br>
                <button type="submit" name="signup-submit" class="button">Signup</button>
            </form>
        </div>
    </main>

<?php
    require "footer.php";
?>