<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="/home.css">
</head>
<body class="body">
    <header class="header">
        <ul class="header__menu">
            <li><img class="header__menu-image" src="images/Menu_Item1.png" alt="home"></li>
            <li><img class="header__menu-image" src="images/Menu_Item3.png" alt="personal-home"></li>
            <li><img class="header__menu-image" src="images/Menu_Item2.png" alt="add-photo"></li>
        </ul>
    </header>
    <main class="main">
        <h1 class="main__head"></h1>
        <div class="user-feed">
            <?php
            include 'index.php';
            ?>
        </div>
    </main>
</body>
</html>