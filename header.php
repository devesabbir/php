<?php
$menus = [
  [
    "label" => "menu-1",
    "url" => "/menu-1",
  ],
  [
    "label" => "menu-2",
    "url" => "/menu-2",
  ],
  [
    "label" => "menu-3",
    "url" => "/menu-3",
  ],
  [
    "label" => "menu-4",
    "url" => "/menu-4",
  ]
]
  ?>

<style>
  <?php
  include 'header.css';
  ?>
</style>
<header>
  <nav>
    <ul style="display:flex; list-style:none; gap:10px;">
      <?php foreach ($menus as $menu): ?>
        <li> <a href="<?= $menu["url"] ?>"><?= $menu["label"]; ?></a></li>
      <?php endforeach; ?>
    </ul>
  </nav>
</header>