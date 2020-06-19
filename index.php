<?php
    require "header.php";
?>
    <main>
        <div>
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<p>You are logged in!</p>';
                } 
                else {
                    echo '<p>You are not logged in!</p>';
                }
            ?>
        </div>
    </main>


<?php
    require "footer.php";
?>