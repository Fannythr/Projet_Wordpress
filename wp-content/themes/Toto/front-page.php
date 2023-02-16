<?php get_header() ?>

<main id="<?php the_ID(); ?> main" <?php post_class(); ?>>

    <?php if (have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <section class="container mt-5 pt-5">
        <h2><?php the_field('article_title'); ?></h2>
        <p class="text-muted"><?php the_field('article_description'); ?></p>

        <div class="row">

            <?php if( have_rows('article_articles') ): ?>
                <?php while( have_rows('article_articles') ): the_row(); ?>

                    <div class="col-lg-4">
                        <?php $article = get_sub_field('article'); ?>
                        <div class="card">
                            <h3><?= $article->post_title ?></h3>
                            <a href=" <?= get_attachment_link($article->ID); ?>">Voir</a>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </section>
    <br><br><br><br><br>




</main>

<?php get_footer() ?>
