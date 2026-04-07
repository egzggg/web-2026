<?php 
include 'storageMenu.php'
?>
<ul class="header__menu">
    <?php foreach ($allMenu as $menu) { ?>
        <li>
            <img class="header__menu-image" src="<?= $menu['image'] ?>" alt="<?= $menu['name'] ?>">
        </li>
    <?php } ?>
</ul>