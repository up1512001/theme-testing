<?php get_header(); ?>

<main id="main" class="site-main">
    <section id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <?php if (have_posts()) : ?>

                <header class="page-header">
                    <h1 class="page-title"><?php printf(__('Category Archives: %s', 'your-theme-textdomain'), single_cat_title('', false)); ?></h1>

                    <?php if (category_description()) : // Show an optional category description 
                    ?>
                        <div class="archive-meta"><?php echo category_description(); ?></div>
                    <?php endif; ?>
                </header>

            <?php
                // Start the Loop.
                while (have_posts()) : the_post();

                    // Include the template for the content.
                    get_template_part('content', get_post_format());

                endwhile;

                // Previous/next page navigation.
                // your_theme_pagination();

            else :
                // If no content, include the "No posts found" template.
                get_template_part('content', 'none');

            endif;
            ?>

        </div>
    </section>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>