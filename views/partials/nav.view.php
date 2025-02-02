<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between w-full">
      <div class="flex items-center w-full">
        <div class="flex w-full justify-between">
          <div class="flex items-baseline space-x-4">
            <a href="." class="rounded-md px-3 py-2 text-sm font-medium text-white transition duration-150 ease-in-out hover:bg-gray-700 hover:text-gray-100">Home</a>
            <a href="todos.php" class="rounded-md px-3 py-2 text-sm font-medium text-white transition duration-150 ease-in-out hover:bg-gray-700 hover:text-gray-100">Todos</a>
          </div>

          <?php if (!isset($_SESSION['user'])):?>
            <div class="flex items-baseline space-x-4">
              <a href="login.php" class="rounded-md px-3 py-2 text-sm font-medium text-white bg-blue-600 transition duration-150 ease-in-out hover:bg-blue-700">Login</a>
              <a href="register.php" class="rounded-md bg-green-600 px-3 py-2 text-sm font-medium text-white hover:bg-green-700 transition duration-150 ease-in-out">Register</a>
            </div>
          <?php else :?>
            <div class="flex items-baseline space-x-4">
              <form action="logout.php" method="POST">
                <button type="submit" class="rounded-md px-3 py-2 text-sm font-medium text-white bg-red-600 transition duration-150 ease-in-out hover:bg-red-700">Logout</button>
              </form>
            </div>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
</nav>
