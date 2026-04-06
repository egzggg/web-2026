<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
<?php 
include 'storage.php';

$postId = $_GET['id'];


foreach ($posts as $post) {
    if ($post['id'] == $postId) {
        $foundPost = $post;
        break;
    }
}
?>


<div>
    <h3><?= $foundPost['id'] ?></h3>
    <h3><?= $foundPost['name'] ?></h3>
    <p><?= $foundPost['comment-text'] ?></p>
    <span><?= $foundPost['comment-time'] ?></span>
</div>


</body>
</html>