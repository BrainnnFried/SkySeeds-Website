<?php
    require_once 'classes/header.php';
    require_once 'classes/footer.php';

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/home.css">
    <title>Document</title>
</head>
<body>
    <?php
        $header = new Header();
        $header->createHeader();
    ?>

    <?php
        $footer = new Footer();
        $footer->createFooter();
    ?>

</body>
</html>