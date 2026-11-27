<?php
/**
 * Title: Éco-citoyen — Accueil : introduction
 * Slug: eco-citoyen/accueil-introduction
 * Categories: featured
 * Description: Introduction de l’accueil avec texte, bouton et photo de mobilité à Bruxelles.
 * Keywords: eco, accueil, introduction, impact
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","className":"eco-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignwide eco-hero">
<!-- wp:columns {"className":"eco-hero-columns"} -->
<div class="wp-block-columns eco-hero-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"className":"eco-hero-copy","layout":{"type":"default"}} -->
<div class="wp-block-group eco-hero-copy">
<!-- wp:paragraph {"className":"eco-hero-eyebrow"} -->
<p class="eco-hero-eyebrow">TES HABITUDES, QUEL IMPACT ?</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Chaque geste compte.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eco-hero-intro"} -->
<p class="eco-hero-intro">Découvre l’impact de tes habitudes et trouve des actions adaptées à ton quotidien.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/impact/' ) ); ?>">Découvrir mon impact</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"eco-hero-note"} -->
<p class="eco-hero-note">Crée ton compte pour commencer.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/accueil-velo.jpg' ); ?>" alt="Deux personnes à vélo dans une rue de Bruxelles, à côté d’un tram."/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
