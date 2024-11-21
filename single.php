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

        <section class="blog-post">
            <article>
                <div class="image-box">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
                </div>
                <h2><?php echo $title; ?></h2>
                <p><?php echo $date; ?> by <?php echo $author; ?></p>
                <p><?php echo $content; ?></p>
            </article>
        </section>

        <section class="comments-section">
            <?php if (comments_open() || get_comments_number()): ?>
                <?php comments_template(); ?>
            <?php endif; ?>
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>