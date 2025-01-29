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
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Todo</h1>
      </div>
    </header>

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
        <p class="mb-4 text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eos quis nostrum, earum culpa, animi explicabo hic quibusdam odio dignissimos ratione numquam quos neque assumenda ab. Labore perspiciatis quasi quibusdam!</p>
      </div>
    </main>
  </div>
</body>

</html>
