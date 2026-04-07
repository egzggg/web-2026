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
       <?php 
       include 'header.php'
       ?>
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