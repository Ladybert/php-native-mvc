<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../layout/head.html'; ?>
<body>
<?php include __DIR__ .  "/../layout/header.html"; ?>

    <main>
        <section class="grid grid-cols-4 gap-4 mx-12 my-6">
            <article>
                <h1>Hello World Home</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate doloribus, molestiae dolore odio dignissimos corporis illo quod pariatur, nobis sunt eius illum itaque. Autem sapiente facilis nemo fugit vitae laboriosam!</p>
            </article>
            <article>
                <h1>Hello World Home</h1>
                <p>Hlo guys nama gwe <?= $data['name']; ?></p>
            </article>
            <img src="<?= BASEURL; ?>/img/rashad3x4.png" width="100px" alt="png">
        </section>
    </main>

<?php include __DIR__ . "/../layout/footer.html"; ?>
</body>
</html>