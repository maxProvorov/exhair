<?php
get_header();
?>

<main id="primary" class="site-main">
    <?php
    get_template_part('template-parts/main_template');
    get_template_part('template-parts/about_template');
    get_template_part('template-parts/form_template');
    get_template_part('template-parts/service_template');
    get_template_part('template-parts/slider_template');
    get_template_part('template-parts/contacts_template');

    ?>

</main><!-- #main -->

<?php
get_footer();