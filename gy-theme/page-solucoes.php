<?php

// Template Name: Soluções GY

get_header();
?>

<main class="page--solucoes-gy">

    <section class="solucoes">
        <div class="solucoes__container">
            <h2 class="default__title no-after">Soluções GreenYellow</h2>
            <p class="default__desc">Soluções em energia inteligentes e integradas para transformar o seu ecossistema energético.</p>
        </div>
        <?php get_template_part('components/diagrama', 'solucoes'); ?>

    </section>
    <?php get_template_part('components/newsletter'); ?>

</main>

<?php
get_footer();
