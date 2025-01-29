<?php
  include 'views/partials/header.php';
  include 'views/partials/nav.php';
  include 'views/partials/title.php';
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold mb-4">
      <?php echo $todo['title']; ?>
    </h1>
    <p class="mb-4 text-justify">
      <?php echo $todo['description']; ?>
    </p>
  </div>
</main>

<?php
  include 'views/partials/footer.php';
?>
