<?php require_once base_path('views/partials/head.php') ; ?>
<?php require_once base_path('views/partials/nav.php') ; ?>
<?php require_once base_path('views/partials/banner.php'); ?>
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="notes" class="text-blue-500 underline">Go back...</a>
        </p>
        <p><?= htmlspecialchars($note['body']) ?></p>
        <footer class="mt-6">
            <a href="/laracast/note/edit?id=<?= $note['id'] ?>" class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-gray-400">Edit</a>

          </footer>

        <form class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-400">Delete</button>
        </form>


</div>
  </main>
<?php require_once base_path('views/partials/footer.php'); ?>

  