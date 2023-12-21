<h1>Articles</h1>

<?php foreach ($articles as $article) { ?>

        <div>
            <h2><?= $article['titre'] ?></h2>
            <p><?php echo $article['contenu']; ?></p>
        </div>


<?php } ?>
