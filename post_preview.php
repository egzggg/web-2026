<div class="user-feed__post">
    <div class="user-feed__icon">
        <img class="user-feed__icon-image" src="<?= $post['image-icon'] ?>" alt="<?= $post['name'] ?>">
        <h3 class="user-feed__name"><?= $post['name'] ?></h3>
        <img class="user-feed__icon-edit" src="images/pencil.png" alt="<?= $post['name'] ?>">
    </div>
    <a title='<?= $post['name'] ?>' href="post.php?id=<?= $post['id'] ?>">
        <img class="user-feed__image" src="<?= $post['image'] ?>" alt="<?= $post['name'] ?>">
    </a>
    <div class="user-feed__comment">
        <button class="user-feed__comment-button"><?= $post['likes']?></button>
        <p class="user-feed__comment-massage"><?= $post['comment-text'] ?></p>
        <p class="user-feed__comment-more-info"><?= $post['comment-more-info']?></p>
        <p class="user-feed__comment-time"><?= $post['comment-time']?></p>
    </div>
</div>