<?php
  include_once "views/partials/header.view.php";
  include_once "views/partials/nav.view.php";
  include_once "views/partials/title.view.php";
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold mb-4">Hello <?= $_SESSION['user']['name'] ?? 'Guest'?>. Welcome to Todo App</h1>
    <p class="mb-4 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum obcaecati laboriosam quas. Voluptatibus nisi amet dolore sequi enim, voluptatem consectetur omnis laboriosam molestiae officia a reiciendis consequuntur eos? Nihil, doloremque.
    Adipisci voluptatem tenetur dolorum unde iure iusto laudantium hic magnam eaque minus. Excepturi illum officiis quam ut enim blanditiis quo molestias esse? Totam recusandae nam perferendis quia fugit inventore tempore!
    Nemo ipsum exercitationem saepe commodi iste quisquam fuga qui voluptatum eaque itaque, quae corporis necessitatibus reiciendis? Ratione porro quasi cupiditate quaerat dicta cumque, debitis, voluptatibus voluptatem quidem rerum, ea provident.
    Molestias soluta eligendi ex reiciendis quibusdam ratione. Earum eius harum voluptatibus, obcaecati iure, aut temporibus alias numquam ea iusto id officia qui, accusamus repudiandae dolore hic rerum molestias officiis dolor.
    Praesentium autem qui eaque rerum officiis optio. Fugiat atque nostrum ea distinctio est quos esse et facere nulla necessitatibus veritatis corrupti porro perferendis eos ipsa id excepturi, iure nesciunt exercitationem.</p>
  </div>
</main>

<?php
  include_once "views/partials/footer.view.php";
?>
