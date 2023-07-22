<!-- sante.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Santé</title>
</head>
<body>
    <h1>Santé</h1>

    <?php if (!empty($articles)) : ?>
        <?php foreach ($articles as $article) : ?>
            <h2><?php echo $article['titre']; ?></h2>
            <p><?php echo $article['contenu']; ?></p>
            <hr>
        <?php endforeach; ?>
    <?php else : ?>
        <p>Aucun article trouvé dans la catégorie 'Santé'.</p>
    <?php endif; ?>

    <a href="index.php?action=home">Retour à l'accueil</a>
</body>
</html>
