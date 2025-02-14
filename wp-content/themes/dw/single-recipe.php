<?php get_header(); ?>

<style>

</style>

<?php
// On ouvre "La boucle" (The Loop), la structure de contrôle
// de contenu propre a WordPress :
if (have_posts()): while (have_posts()): the_post(); ?>

    <h2><?= get_the_title(); ?></h2>
    <div class="recipe">
        <aside class="recipe_ingredients">
            <h3>Ingrédients</h3>
            <p>À compléter</p>
        </aside>
        <section class="recipe_steps">
            <h3>Étapes</h3>
            <div><?= get_the_content() ?></div>
        </section>
    </div>

<?php
    // On ferme "La boucle" (The Loop) :
endwhile;
else: ?>
    <p>Cette recette n'existe pas.</p>
<?php endif; ?>

<?php get_footer(); ?>
