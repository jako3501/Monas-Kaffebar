<?php get_header() ?>

<main>
    <section class="blog-container ">
        <div class="blog-header">
            <h1>Recipies</h1>
        </div>


        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post() ?>
                <article class="blog-content">


                    <?php
                    $url = get_permalink();
                    $title = get_the_title();
                    $date = get_the_date();
                    $author = get_the_author();
                    $excerpt = get_the_excerpt();

                    ?>

                    <?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
                    <h2><a href="<?php echo $url; ?>"><?php echo $title; ?></a></h2>
                    <p class="excerpt"><?php echo $excerpt; ?></p>
                    <p><?php echo $date; ?> by <?php echo $author; ?></p>


                </article>
            <?php endwhile; ?>
        <?php endif; ?>

    </section>
</main>

<?php get_footer() ?>