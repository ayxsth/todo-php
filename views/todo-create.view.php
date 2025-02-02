<?php
  include 'views/partials/header.php';
  include 'views/partials/nav.php';
  include 'views/partials/title.php';
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="w-full flex flex-col">
      <form class="mt-8 w-md space-y-6" method="POST">
        <div>
          <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
          <input type="text" name="title" id="title" class="mt-1 block w-full px-3 py-2 rounded-md border-2 border-gray-300" value="<?= $_POST['title'] ?? ''; ?>">
          <?php if (isset($errors['title'])): ?>
            <p class='text-red-500 text-sm italic'>
              <?= $errors['title']; ?>
            </p>
          <?php endif; ?>
        </div>

        <div>
          <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
          <textarea name="description" id="description" rows="4" class="mt-1 block w-full px-3 py-2 rounded-md border-2 border-gray-300"><?= $_POST['description'] ?? ''; ?></textarea>
          <?php if (isset($errors['description'])): ?>
            <p class='text-red-500 text-sm italic'>
              <?= $errors['description']; ?>
            </p>
          <?php endif; ?>
        </div>

        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">Create</button>
      </form>
    </div>
  </div>
</main>

<?php
  include 'views/partials/footer.php';
?>
