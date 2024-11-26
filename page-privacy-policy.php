<?php get_header() ?>

    <?php if(have_posts()): ?>

        <?php while(have_posts()): the_post() ?>

            <?php
            $title = get_the_title();
            $privacypolicy = get_field("privacy_policy");
            ?>

            <section class="terms-and-conditions">
                <h1><?php echo $title ?></h1>
                <p><?php echo $privacypolicy ?></p>
            </section>

        <?php endwhile ?>

    <?php endif; ?>

<?php get_footer() ?>