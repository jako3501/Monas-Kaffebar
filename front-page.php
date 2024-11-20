<?php get_header() ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):the_post() ?>

    <main>
        <div class="background-image">
            <img src="" alt="">
        </div>

        <p>Hello world</p>
    </main>

    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>