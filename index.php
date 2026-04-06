<?php
$posts = [
 [
   'name' => 'Ваня Денисов',
   'image' => 'images/winter.png',
   'image-icon' => 'images/larch.png',
   'likes' => '❤️ 203',
   'comment-text' => 'Так красиво сегодня на улице! Настоящая зима Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в городк',
   'comment-more-info' => 'еще',
   'comment-time' => '2 часа назад'
   // другие свойства этого поста
 ],
 [
   // свойства второго поста
   'name' => 'Лиза Демина',
   'image' => 'images/fish.png',
   'image-icon' => 'images/liz.png',
   'likes' => '❤️ 504',
   'comment-text' => 'Так красиво сегодня на улице! Настоящая зима Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в городк',
   'comment-more-info' => '&nbsp',
   'comment-time' => '1 день назад'
 ],
];
?>                                         
<?php 
foreach ($posts as $post) {
    include 'post_preview.php';
}
?>

