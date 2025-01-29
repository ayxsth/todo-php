<?php
  include_once "views/partials/header.view.php";
  include_once "views/partials/nav.view.php";
  include_once "views/partials/title.view.php";
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-right">
    <a href="todo-create.php" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
      Create Todo
    </a>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 text-left">
      <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <?php foreach ($todos as $todo) : ?>
          <a href="todo.php?id=<?= $todo['id'] ?>" class="bg-white overflow-hidden rounded-lg cursor-pointer hover:shadow-lg transition duration-300 ease-in-out">
            <div class="p-5">
              <div class="flex items-center">
                <div class="w-0 flex-1">
                  <h3 class="text-lg font-medium text-gray-900 <?= $todo['completed'] ? 'line-through' : ''?>">
                    <?= htmlspecialchars($todo['title']) ?>
                  </h3>
                  <p class="mt-1 text-sm text-gray-500 whitespace-nowrap overflow-hidden overflow-ellipsis">
                    <?= htmlspecialchars($todo['description']) ?>
                  </p>
                </div>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</main>


<?php
  include_once "views/partials/footer.view.php";
?>
