<?php get_header() ?>
    <!-- Wrapper -->
        <div id="wrapper">

            <!-- Main -->
                <div id="main">
                <section id="about-me">
                    <div class="image main" data-position="center">
                        <a href="/"><?= the_custom_logo(); ?></a>
                    </div>
                </section>

                <section>
                    <div class="container">
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : ?>
                                <?php the_post(); ?>

                                <header class="major">
                                    <h2><?php the_title(); ?></h2>
                                </header>

                                <?php the_content(); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </section>




                </div>

<?php get_footer() ?>