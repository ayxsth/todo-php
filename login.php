<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo App</title>

  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="h-full">
  <div class="min-h-full">
    <nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between w-full">
          <div class="flex items-center w-full">
            <div class="flex w-full justify-between">
              <div class="flex items-baseline space-x-4">
                <a href="." class="rounded-md px-3 py-2 text-sm font-medium text-white transition duration-150 ease-in-out hover:bg-gray-700 hover:text-gray-100">Home</a>
                <a href="todos.php" class="rounded-md px-3 py-2 text-sm font-medium text-white transition duration-150 ease-in-out hover:bg-gray-700 hover:text-gray-100">Todos</a>
              </div>

              <div class="flex items-baseline space-x-4">
                <a href="login.php" class="rounded-md px-3 py-2 text-sm font-medium text-white bg-blue-600 transition duration-150 ease-in-out hover:bg-blue-700">Login</a>
                <a href="register.php" class="rounded-md bg-green-600 px-3 py-2 text-sm font-medium text-white hover:bg-green-700 transition duration-150 ease-in-out">Register</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <header class="bg-white shadow-sm">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Login</h1>
      </div>
    </header>

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
  </div>
</body>

</html>
