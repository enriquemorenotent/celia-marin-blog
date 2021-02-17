<!-- home.php -->
<?php get_header() ?>
    <!-- Wrapper -->
        <div id="wrapper">

            <!-- Main -->
                <div id="main">

                    <!-- One -->
                        <section id="about-me">
                            <div class="image main" data-position="center">
                                <a href="/"><?= the_custom_logo(); ?></a>
                            </div>
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

                                <header class="major">
                                    <h2>Read Only</h2>
                                    <p>Just an incredibly simple responsive site<br />
                                    template freebie by <a href="http://html5up.net">HTML5 UP</a>.</p>
                                </header>
                                <p>Faucibus sed lobortis aliquam lorem blandit. Lorem eu nunc metus col. Commodo id in arcu ante lorem ipsum sed accumsan erat praesent faucibus commodo ac mi lacus. Adipiscing mi ac commodo. Vis aliquet tortor ultricies non ante erat nunc integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum.</p>
                            </div>
                        </section>


                    <!-- Three -->
                    <section id="works">
                        <div class="container">
                            <h3>Mis trabajos</h3>
                            <p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>

                            <?php $wpb_all_query = new WP_Query(array('post_type'=>'work', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                            <div class="features works">
                                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                                    <article>

                                        <a href="<?php the_permalink(); ?>" class="image"><?= get_the_post_thumbnail() ?></a>
                                        <div class="inner">

                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
                                        </div>
                                    </article>

                                <?php endwhile; ?>
                            </div>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </section>


                    <!-- Three -->
                    <section id="blog">
                            <div class="container">
                                <h3>Blog</h3>
                                <p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>

                                <?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                                <div class="features">
                                    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                                        <article>

                                            <a href="<?php the_permalink(); ?>" class="image"><?= get_the_post_thumbnail() ?></a>
                                            <div class="inner">

                                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                <p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
                                            </div>
                                        </article>

                                    <?php endwhile; ?>
                                </div>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        </section>



                </div>

<?php get_footer() ?>
