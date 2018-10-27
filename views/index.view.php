<?php require('partials/head.php'); ?>
<header>
  <h1>Home</h1>
</header>
<?php foreach ($tasks as $task) : ?>
  <li>
    <?php if ($task->completed) : ?>
      <strike><?= $task->description; ?></strike>
    <?php else : ?>
      <?= $task->description; ?>
    <?php endif; ?>
  </li>
<?php endforeach; ?>
<?php require('partials/footer.php'); ?>