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
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Todos</h1>
      </div>
    </header>

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-right">
        <a href="todo-create.php" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          Create Todo
        </a>

        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-left">
          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <a href="todo.php" class="bg-white overflow-hidden rounded-lg cursor-pointer hover:shadow-lg transition duration-300 ease-in-out">
              <div class="p-5">
                <div class="flex items-center">
                  <div class="w-0 flex-1">
                    <h3 class="text-lg font-medium text-gray-900">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h3>
                    <p class="mt-1 text-sm text-gray-500 whitespace-nowrap overflow-hidden overflow-ellipsis">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ea laboriosam, voluptatibus ad labore nam tempore, cum repellat at saepe dolorum porro eos optio vitae dolorem consequuntur harum repellendus fugit.
                    </p>
                  </div>
                </div>
              </div>
            </a>

            <a href="todo.php" class="bg-white overflow-hidden rounded-lg cursor-pointer hover:shadow-lg transition duration-300 ease-in-out">
              <div class="p-5">
                <div class="flex items-center">
                  <div class="w-0 flex-1">
                    <h3 class="text-lg font-medium text-gray-900">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h3>
                    <p class="mt-1 text-sm text-gray-500 whitespace-nowrap overflow-hidden overflow-ellipsis">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ea laboriosam, voluptatibus ad labore nam tempore, cum repellat at saepe dolorum porro eos optio vitae dolorem consequuntur harum repellendus fugit.
                    </p>
                  </div>
                </div>
              </div>
            </a>

            <a href="todo.php" class="bg-white overflow-hidden rounded-lg cursor-pointer hover:shadow-lg transition duration-300 ease-in-out">
              <div class="p-5">
                <div class="flex items-center">
                  <div class="w-0 flex-1">
                    <h3 class="text-lg font-medium text-gray-900">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h3>
                    <p class="mt-1 text-sm text-gray-500 whitespace-nowrap overflow-hidden overflow-ellipsis">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ea laboriosam, voluptatibus ad labore nam tempore, cum repellat at saepe dolorum porro eos optio vitae dolorem consequuntur harum repellendus fugit.
                    </p>
                  </div>
                </div>
              </div>
            </a>

            <a href="todo.php" class="bg-white overflow-hidden rounded-lg cursor-pointer hover:shadow-lg transition duration-300 ease-in-out">
              <div class="p-5">
                <div class="flex items-center">
                  <div class="w-0 flex-1">
                    <h3 class="text-lg font-medium text-gray-900">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h3>
                    <p class="mt-1 text-sm text-gray-500 whitespace-nowrap overflow-hidden overflow-ellipsis">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ea laboriosam, voluptatibus ad labore nam tempore, cum repellat at saepe dolorum porro eos optio vitae dolorem consequuntur harum repellendus fugit.
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>

</html>
