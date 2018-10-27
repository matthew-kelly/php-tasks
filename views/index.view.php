<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
      }
    </style>
  </head>
  <body>
  <header>
    <h1>Home</h1>
  </header>
  <nav>
    <ul>
      <li><a href="/about">About Us</a></li>
      <li><a href="/contact">Contact Us</a></li>
    </ul>
  </nav>
    <?php foreach ($tasks as $task) : ?>
      <li>
        <?php if ($task->completed) : ?>
          <strike><?= $task->description; ?></strike>
        <?php else : ?>
          <?= $task->description; ?>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </body>
</html>