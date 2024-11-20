<?php get_header(); ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post(); ?>

        <?php
        $title = get_the_title();
        $date = get_the_date();
        $author = get_the_author();
        $content = get_the_content();
        ?>

        <section class="container">
            <article>
                <?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
                <h2><?php echo $title; ?></h2>
                <p><?php echo $date; ?> by <?php echo $author; ?></p>
                <p><?php echo $content; ?></p>
            </article>

            <?php if (comments_open() || get_comments_number()): ?>
                <?php comments_template(); ?>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

    </section>
    <?php get_footer(); ?>