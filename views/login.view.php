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
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" id="email" required class="mt-1 block w-full px-3 py-2 rounded-md border-2 border-gray-300">
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" name="password" id="password" required class="mt-1 block w-full px-3 py-2 rounded-md border-2 border-gray-300">
        </div>

        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">Login</button>
      </form>
    </div>
  </div>
</main>

<?php
  include 'views/partials/footer.php';
?>
