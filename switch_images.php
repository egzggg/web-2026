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