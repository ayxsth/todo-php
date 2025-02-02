<?php
  include_once "views/partials/header.view.php";
  include_once "views/partials/nav.view.php";
  include_once "views/partials/title.view.php";
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="w-full flex flex-col">
      <form class="mt-8 w-md space-y-6" method="POST">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" id="email" class="mt-1 block w-full px-3 py-2 rounded-md border-2 border-gray-300" value="<?= $_POST['email'] ?? ''; ?>">
          <?php if (isset($errors['email'])): ?>
            <p class="text-red-500 text-xs mt-1"><?= $errors['email']; ?></p>
          <?php endif; ?>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" name="password" id="password" class="mt-1 block w-full px-3 py-2 rounded-md border-2 border-gray-300" value="<?= $_POST['password'] ?? ''; ?>">
          <?php if (isset($errors['password'])): ?>
            <p class="text-red-500 text-xs mt-1"><?= $errors['password']; ?></p>
          <?php endif; ?>

          <?php if (isset($errors['credentials'])): ?>
            <p class="text-red-500 text-xs mt-1"><?= $errors['credentials']; ?></p>
          <?php endif; ?>
        </div>

        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">Login</button>
      </form>
    </div>
  </div>
</main>

<?php
  include_once "views/partials/footer.view.php";
?>
