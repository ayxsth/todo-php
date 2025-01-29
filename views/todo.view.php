<?php
  include_once "views/partials/header.view.php";
  include_once "views/partials/nav.view.php";
  include_once "views/partials/title.view.php";
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold mb-4 <?= $todo['completed'] ? 'line-through' : ''?>"><?= htmlspecialchars($todo["title"]) ?></h1>
    <p class="mb-4 text-justify"><?= htmlspecialchars($todo["description"]) ?></p>
  </div>
</main>

<?php
  include_once "views/partials/footer.view.php";
?>
