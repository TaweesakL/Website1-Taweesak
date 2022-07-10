<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <script src="./js/poopper.js"> </script>
    <script src="./js/bootstrap.js"> </script>
    </head>
<body>
    <?php
    include "./navbar.php";
    echo "ยินดีต้อนรับสู่เว็ปไซด์";
    echo " $_SESSION[username]";

    ?>
</body>
</html>