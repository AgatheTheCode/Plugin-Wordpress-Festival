<?php
global $wp_query;
global $wpdb;
$wpdb->show_errors();

?>
<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <article class="festival">
            <header class="entry-header">
                <!-- HEADER CONTENT -->
                <?php include_once dirname(__FILE__) . '/templates/bloc-header.php'; ?>
            </header>
            <div class="entry-content">
                <!-- HEADS CONTENT -->
                <section class="head-container">
                    <?php include_once dirname(__FILE__) . '/templates/bloc-head.php'; ?>
                </section>
                <!-- CARDS CONTENT -->
                <section class="cards-container">
                    <?php include_once dirname(__FILE__) . '/templates/bloc-cards.php'; ?>
                </section>
            </div>
            <!-- CTA CONTENT -->
            <section class="cta-container">
                <?php include_once dirname(__FILE__) . '/templates/bloc-cta.php'; ?>
            </section>
        </article>
    </main>
</div>
<footer class="entry-footer">
    <!-- volé tellement fort que je sais pas ce que ça fait mdr -->
    <?php //twentysixteen_entry_meta();
    edit_post_link(
        sprintf(
            __('Edit<span class="screen-reader-text"> "%s"</span>', 'oci'),
            get_the_title()
        ),
        '<span class="edit-link">',
        '</span>'
    );
    ?>
</footer>
</article>
</main>
</div>
<?php get_footer(); ?>