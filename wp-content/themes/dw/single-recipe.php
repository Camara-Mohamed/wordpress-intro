<?php get_header(); ?>

<style>
.recipe {
    display: none;
    flex-direction: row-reverse;
    justify-content: space-between;
}

.recipe_ingredients {
    width: 320px;
    padding: 20px;
    background: #0a4b78;
    display: flex;
    padding-top: 100%;
}
.recipe_img {
    display: block;
}
</style>

<?php
// On ouvre "La boucle" (The Loop), la structure de contrôle
// de contenu propre a WordPress :
if (have_posts()): while (have_posts()): the_post(); ?>

    <h2><?= get_the_title(); ?></h2>

    <p><?= get_the_excerpt(); ?></p>

    <div class="recipe">
        <aside class="recipe_ingredients">
            <div>
                <h3>Ingrédients</h3>
                <p>À compléter</p>
            </div>
            <figure class="recipe_figure">
                <?= get_post_thumbnail_id(size: 'medium', attr: ['recipe_img']); ?>
            </figure>
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
