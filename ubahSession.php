<?php
    session_start();
?>
<html>
<body>
    <?php
        $_SESSION["makananfav"] = "Nasi Pecel";

        echo "Session makananfav telah diubah";
    ?>
</body>
</html>