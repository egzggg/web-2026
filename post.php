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

$id = $_GET['id'];

$foundPost = null;

foreach ($posts as $post) {
    if ($post['id'] == $id) {
        $foundPost = $post;
        break;
    }
}
?>

<?php if ($foundPost): ?>
    <div>
        <h3><?= $foundPost['id'] ?></h3>
        <h3><?= $foundPost['name'] ?></h3>
        <p><?= $foundPost['comment-text'] ?></p>
        <span><?= $foundPost['comment-time'] ?></span>
    </div>
<?php else: ?>
    <p>Пост не найден</p>
<?php endif; ?>

</body>
</html>