<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        $posts = [
            [
                'title' => 'The Road Ahead',
                'subtitle' => '',
                'img_modifier' => '',
                'author' => '',
                // другие свойства этого поста
            ],
            [
                // свойства второго поста
            ],
        ];
        ?>
    </div>
    <div>
        <?php 
        foreach ($posts as $post) {
        include 'post_preview.php';
        }
        ?>
    </div>
    
</body>
</html>