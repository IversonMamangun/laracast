<?php require_once base_path('views/partials/head.php'); ?>
<?php require_once base_path('views/partials/nav.php'); ?>
  
 <main>
    <div class="mx-auto max-w-screen-sm text-center text-gray-100">
            <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-gray-900 dark:text-primary-500">403</h1>
            <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl">You are not unauthorized to view this page.</p>
            <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Sorry, we can't find that page. You'll find lots to explore on the home page. </p>
            <a href="./"  class="<?= urlIs('/') ?>  inline-flex text-white-500 bg-gray-400 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4">Back to Homepage</a>
        </div>   
  </main>
<?php require_once base_path('views/partials/footer.php'); ?>

  