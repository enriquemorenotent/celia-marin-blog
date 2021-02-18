<!-- index.php -->
<?php get_header() ?>
    <!-- Wrapper -->
        <div id="wrapper">

            <!-- Main -->
                <div id="main">

                    <!-- One -->
                        <section id="sobre-mi">
                            <div class="image main" data-position="center">
                                <a href="/"><?= the_custom_logo(); ?></a>
                            </div>
                            <div class="container">

                            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                                <article>

                                    <a href="<?php the_permalink(); ?>" class="image"><?= get_the_post_thumbnail() ?></a>
                                    <div class="inner">
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <?= get_the_excerpt( ) ?>
                                    </div>
                                </article>
                            <?php endwhile; ?>


                                <?php if ( have_posts() ) : ?>
                                    <?php while ( have_posts() ) : ?>
                                        <?php the_post(); ?>

                                        <header>
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        </header>

                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </section>
                </div>

<?php get_footer() ?>
