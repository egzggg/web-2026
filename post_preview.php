<div class="user-feed__post">
    <div class="user-feed__icon">
        <img class="user-feed__icon-image" src="<?= htmlspecialchars($post['image_icon'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8') ?>">
        <h3 class="user-feed__name"><?= htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8') ?></h3>
        <img class="user-feed__icon-edit" src="images/pencil.png" alt="<?= htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8') ?>">
    </div>
    <div id="post-<?= $postIndex ?>" class="user-feed__image-container">
        
       <?php
        $user_post_id = $_POST['post_id'] ?? 0;
        $user_index = $_POST['index'] ?? 0;
        if (isset($user_post_id) && (int)$user_post_id == $postIndex) {
            $index = (int)($user_index ?? 0);
        }

        if ($index >= count($post['image'])) {
            $index = 0;
        }
?>

        <?php if (count($post['image']) > 1){?>
            <form method="POST" action="#post-<?= $postIndex ?>">
                <input type="hidden" name="index" value="<?= $index + 1 ?>">
                <input type="hidden" name="post_id" value="<?= $postIndex ?>">
                <button class="user-feed__image-button">→</button>   
                
            </form>
        <?php } ?>

    
        <img class="user-feed__image" 
            src="<?= htmlspecialchars($post['image'][$index], ENT_QUOTES, 'UTF-8') ?>" 
            alt="<?= htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8') ?>"
        >
    </div>
    <div class="user-feed__comment">
        <button class="user-feed__comment-button"><?= htmlspecialchars($post['likes'], ENT_QUOTES, 'UTF-8')?></button>
        <p class="user-feed__comment-massage"><?= htmlspecialchars($post['comment_text'], ENT_QUOTES, 'UTF-8') ?></p>
        <p class="user-feed__comment-more-info"><?= htmlspecialchars($post['comment_more_info'], ENT_QUOTES, 'UTF-8')?></p>
        <p class="user-feed__comment-time"><?= htmlspecialchars($post['comment_time'], ENT_QUOTES, 'UTF-8')?></p>
    </div>
</div>