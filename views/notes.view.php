<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php require "views/partials/banner.php" ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="px-4 py-6 sm:px-0">
                <?php foreach ($notes as $note) : ?>
                    <li>
                        <a href="/note?id=<?= $note['id'] ?>"
                           class="text-blue-500 hover:underline "><?= $note['body'] ?></a>
                    </li>
                <?php endforeach; ?>
            </div>
            <!-- /End replace -->
        </div>
    </main>

<?php require "views/partials/footer.php" ?>