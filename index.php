<?php
$posts = [
 [
   'name' => 'Ваня Денисов',
   'image' => '',
   'image-icon' => '',
   'likes' => '',
   'comment-text' => ''
   // другие свойства этого поста
 ],
 [
   // свойства второго поста
   'name' => 'Ваня Денисов',
   'image' => '',
   'image-icon' => '',
   'likes' => '',
   'comment-text' => ''
 ],
];
?>
                                    
<?php 
foreach ($posts as $post) {
  include 'post_preview.php';
}
?>

