<?php get_header(); ?>

<aside>
    <h2>Bienvenue sur mon site&nbsp;</h2>
</aside>
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

<?php get_footer(); ?>
