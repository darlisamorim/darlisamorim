<?php require ('parts/header.php'); ?>


    <main class="main container__flex">

        <section class="content__flex bio">

            <article class="description">
                <strong class="tag">
                    Full Stack
                </strong>

                <h1><?= WEBSITE["name"] ?></h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, dignissimos, nam? Delectus fugit iusto quasi.
                </p>

                <div class="itens__btn">
                    <button type="button">Click Me!</button>
                    <button type="button">Click Me!</button>
                </div>

            </article>
            <!--  -->

            <figure class="avatar">
                <img src="<?= assetTheme("images/avatar.png"); ?>" alt="<?= WEBSITE["name"] ?> | <?= WEBSITE["description"] ?>">
            </figure>
            <!--  -->

        </section>
        <!--  -->

    </main>
    <!-- Fim Main.Content__Flex -->

<?php require('parts/footer.php');