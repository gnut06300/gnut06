<?php require_once '_partials/_header.php'; ?>

<body>
    <header>
        <?php require_once '_partials/_nav.php' ?>
    </header>
    <main role="main" class="container bg-warning-subtle text-emphasis-warning py-5 fs-5">

        <?= $contenu;  ?>

    </main>

    <?php require_once '_partials/_footer.php'; ?>
    <?php require_once '_partials/_scripts.php'; ?>
</body>

</html>