<?php get_header() ?>

<main>
    
        <div class="blog-header">
            <h1>Opskrifter</h1>
        </div>
        <section class="blog-container ">

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
                    <a href="<?php echo $url; ?>">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'medium-large'); ?>
                    <h2><?php echo $title; ?></h2>
                    <p class="excerpt"><?php echo $excerpt; ?></p>
                    <p class="date"><?php echo $date; ?> </p>
                    <p class="auther"><?php echo $author; ?></p>
                    </a>


                </article>
            <?php endwhile; ?>
        <?php endif; ?>

    </section>
</main>

<?php get_footer() ?>