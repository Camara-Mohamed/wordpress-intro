<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
</head>
<body>
<header>
    <h1><?= get_bloginfo('name') ?></h1>
    <p><?= get_bloginfo('description') ?></p>
</header>
<main>
    <?php
    // On ouvre "La boucle" (The Loop), la structure de contrôle
    // de contenu propre a WordPress :
    if (have_posts()): while (have_posts()): the_post(); ?>

        <h2><?= get_the_title(); ?></h2>
        <div><?= get_the_content() ?></div>

    <?php
        // On ferme "La boucle" (The Loop) :
    endwhile;
    else: ?>
        <p>La page est vide.</p>
    <?php endif; ?>
</main>
</body>
</html>