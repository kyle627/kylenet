
<link rel="stylesheet" type="text/css" href="style.css">

<?php
    require "header.php";
?>
        <main>
            <center>
                <div>
                    <?php
                        if (isset($_SESSION['userId'])) {
                        echo "You are logged in.<br>";
                        echo "<a href=\"photo_index.html\" class=\"button\">Upload Photos</a>";

                        } 
                    ?>
                </div>
            </center>
        </main>
<?php
    require "footer.php";
?>