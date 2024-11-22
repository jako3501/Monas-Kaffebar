<?php get_header() ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post() ?>

        <?php
        $hero_image = get_field('hero-image');
        $mona_billede = get_field('mona-billede');
        $product_description = get_field('products_description');
        $custom_design_description = get_field('custom-designs-description');
        ?>

        <main>
            <div class="frontpage-container">
                <section id="hero-section">
                    <div class="background-image">

                        <img src="<?php echo esc_url($hero_image['url']); ?>" alt="">
                    </div>

                    <div class="hero-visuals">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">

                        <svg width="30" height="30" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.3686 3.29753C11.528 3.07473 12.7192 3.07473 13.8786 3.29753C14.0705 3.33923 14.2383 3.4545 14.3461 3.6186C14.4539 3.78271 14.4931 3.98254 14.4552 4.17519C14.4173 4.36785 14.3054 4.53796 14.1434 4.64899C13.9815 4.76002 13.7825 4.80312 13.5891 4.76903C12.6217 4.58031 11.627 4.58031 10.6596 4.76903C10.5612 4.79308 10.459 4.79695 10.359 4.78041C10.2591 4.76388 10.1635 4.72727 10.0781 4.67279C9.99275 4.61832 9.91928 4.54712 9.86215 4.46348C9.80502 4.37983 9.76543 4.28549 9.74576 4.18612C9.72609 4.08676 9.72675 3.98445 9.7477 3.88535C9.76865 3.78625 9.80946 3.69242 9.86766 3.60952C9.92587 3.52662 10.0003 3.45637 10.0863 3.40301C10.1724 3.34964 10.2685 3.31277 10.3686 3.29753ZM16.0836 4.85003C16.1384 4.76815 16.2089 4.69788 16.2909 4.64323C16.3729 4.58859 16.4648 4.55064 16.5615 4.53155C16.6582 4.51247 16.7577 4.51262 16.8543 4.53201C16.9509 4.55139 17.0428 4.58963 17.1246 4.64453C18.107 5.30104 18.9506 6.14458 19.6071 7.12703C19.7074 7.29211 19.7401 7.48952 19.6984 7.67814C19.6568 7.86675 19.544 8.03202 19.3835 8.13952C19.223 8.24702 19.0273 8.28847 18.837 8.25521C18.6467 8.22196 18.4766 8.11658 18.3621 7.96103C17.8143 7.14161 17.1104 6.4382 16.2906 5.89103C16.2087 5.83619 16.1384 5.76576 16.0838 5.68376C16.0291 5.60176 15.9912 5.50979 15.9721 5.41311C15.953 5.31643 15.9532 5.21694 15.9726 5.12033C15.992 5.02371 16.0287 4.93186 16.0836 4.85003ZM8.16509 4.85003C8.21991 4.93195 8.25805 5.02388 8.27732 5.12055C8.29659 5.21723 8.29662 5.31675 8.27739 5.41344C8.25817 5.51012 8.22007 5.60207 8.16528 5.68402C8.11049 5.76597 8.04008 5.83631 7.95809 5.89103C7.13882 6.43836 6.43542 7.14176 5.88809 7.96103C5.77358 8.11658 5.60347 8.22196 5.4132 8.25521C5.22292 8.28847 5.02715 8.24702 4.86668 8.13952C4.7062 8.03202 4.59338 7.86675 4.55173 7.67814C4.51008 7.48952 4.5428 7.29211 4.64309 7.12703C5.29916 6.14473 6.14219 5.30119 7.12409 4.64453C7.20592 4.58963 7.29777 4.55139 7.39439 4.53201C7.491 4.51262 7.5905 4.51247 7.68717 4.53155C7.78385 4.55064 7.87582 4.58859 7.95782 4.64323C8.03982 4.69788 8.11025 4.76815 8.16509 4.85003ZM20.0736 9.78203C20.2687 9.74368 20.4711 9.78439 20.6362 9.89522C20.8013 10.006 20.9157 10.1779 20.9541 10.373C21.1806 11.5321 21.1806 12.724 20.9541 13.883C20.9351 13.9798 20.8973 14.0719 20.8427 14.154C20.7881 14.2361 20.7179 14.3066 20.636 14.3616C20.5541 14.4165 20.4622 14.4548 20.3655 14.4742C20.2689 14.4935 20.1693 14.4937 20.0726 14.4746C19.9759 14.4554 19.8839 14.4174 19.8018 14.3627C19.7198 14.308 19.6494 14.2376 19.5946 14.1556C19.5398 14.0737 19.5017 13.9817 19.4825 13.885C19.4633 13.7883 19.4633 13.6887 19.4826 13.592C19.6711 12.6251 19.6711 11.6309 19.4826 10.664C19.4634 10.5673 19.4634 10.4677 19.4828 10.371C19.5021 10.2743 19.5403 10.1824 19.5952 10.1005C19.6501 10.0185 19.7206 9.94824 19.8027 9.8936C19.8848 9.83896 19.9768 9.80104 20.0736 9.78203ZM4.17809 9.78203C4.27472 9.80121 4.36662 9.83925 4.44854 9.89396C4.53047 9.94868 4.60081 10.019 4.65556 10.1009C4.7103 10.1828 4.74837 10.2747 4.76759 10.3713C4.78681 10.4679 4.78681 10.5674 4.76759 10.664C4.57907 11.6309 4.57907 12.6251 4.76759 13.592C4.79164 13.6904 4.79551 13.7927 4.77898 13.8926C4.76244 13.9925 4.72583 14.0881 4.67136 14.1735C4.61688 14.2589 4.54568 14.3323 4.46204 14.3895C4.37839 14.4466 4.28405 14.4862 4.18468 14.5059C4.08532 14.5255 3.98301 14.5249 3.88391 14.5039C3.78481 14.483 3.69098 14.4422 3.60808 14.3839C3.52518 14.3257 3.45493 14.2514 3.40157 14.1653C3.34821 14.0792 3.31283 13.9832 3.29759 13.883C3.0748 12.7236 3.0748 11.5324 3.29759 10.373C3.33601 10.1779 3.45035 10.006 3.61547 9.89522C3.78059 9.78439 3.98296 9.74368 4.17809 9.78203ZM19.4031 16.088C19.485 16.1429 19.5552 16.2133 19.6099 16.2953C19.6645 16.3773 19.7025 16.4693 19.7216 16.5659C19.7406 16.6626 19.7405 16.7621 19.7211 16.8587C19.7017 16.9553 19.6635 17.0472 19.6086 17.129C18.9521 18.1115 18.1085 18.955 17.1261 19.6115C16.961 19.7118 16.7636 19.7445 16.575 19.7029C16.3864 19.6612 16.2211 19.5484 16.1136 19.3879C16.0061 19.2275 15.9646 19.0317 15.9979 18.8414C16.0311 18.6511 16.1365 18.481 16.2921 18.3665C17.1115 17.8188 17.8149 17.1148 18.3621 16.295C18.4168 16.213 18.4871 16.1426 18.5691 16.0878C18.651 16.033 18.743 15.9949 18.8397 15.9757C18.9364 15.9565 19.0359 15.9565 19.1326 15.9758C19.2292 15.9951 19.3212 16.0332 19.4031 16.088ZM4.84709 16.088C4.92901 16.0332 5.02094 15.9951 5.11761 15.9758C5.21429 15.9565 5.31381 15.9565 5.4105 15.9757C5.50718 15.9949 5.59913 16.033 5.68108 16.0878C5.76303 16.1426 5.83337 16.213 5.88809 16.295C6.43542 17.1143 7.13882 17.8177 7.95809 18.365C8.04181 18.419 8.11395 18.489 8.17031 18.5711C8.22666 18.6532 8.2661 18.7458 8.28632 18.8433C8.30654 18.9408 8.30713 19.0414 8.28807 19.1391C8.269 19.2369 8.23066 19.3298 8.17528 19.4126C8.1199 19.4954 8.04859 19.5663 7.96551 19.6212C7.88243 19.6761 7.78925 19.7139 7.69139 19.7325C7.59354 19.751 7.49298 19.7498 7.39558 19.7291C7.29817 19.7083 7.20588 19.6683 7.12409 19.6115C6.14165 18.955 5.2981 18.1115 4.64159 17.129C4.58669 17.0472 4.54845 16.9553 4.52907 16.8587C4.50969 16.7621 4.50953 16.6626 4.52862 16.5659C4.5477 16.4693 4.58565 16.3773 4.64029 16.2953C4.69494 16.2133 4.76521 16.1429 4.84709 16.088ZM9.77909 20.075C9.79828 19.9784 9.83631 19.8865 9.89103 19.8046C9.94574 19.7226 10.0161 19.6523 10.098 19.5976C10.1799 19.5428 10.2718 19.5047 10.3684 19.4855C10.465 19.4663 10.5645 19.4663 10.6611 19.4855C11.6285 19.6742 12.6232 19.6742 13.5906 19.4855C13.7815 19.4564 13.9764 19.5022 14.1344 19.6132C14.2925 19.7242 14.4017 19.8919 14.4392 20.0813C14.4767 20.2708 14.4397 20.4675 14.3358 20.6303C14.2319 20.7932 14.0692 20.9097 13.8816 20.9555C12.7446 21.1805 11.5071 21.1805 10.3701 20.9555C10.175 20.9171 10.0031 20.8028 9.89228 20.6376C9.78145 20.4725 9.74074 20.2702 9.77909 20.075Z"
                                fill="white" />
                            <path d="M12 7.91666V16.0833M12 16.0833L15 12.5833M12 16.0833L9 12.5833" stroke="white"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </section>


                <section id="products-section">
                    <div class="products-text">
                        <h1>Seneste Produkter</h1>
                        <p><?php echo $product_description ?></p>
                    </div>
                    <!-- <div class="search-field">
                        <label for="">
                            <svg width="25" height="25" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.25 14.25C11.5637 14.25 14.25 11.5637 14.25 8.25C14.25 4.93629 11.5637 2.25 8.25 2.25C4.93629 2.25 2.25 4.93629 2.25 8.25C2.25 11.5637 4.93629 14.25 8.25 14.25Z"
                                    stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15.75 15.75L12.525 12.525" stroke="black" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </label>
                        <input type="search" name="" id="" placeholder="Søg produkt">
                    </div> -->
                    <?php echo do_shortcode('[fibosearch]'); ?>


                    <?php echo do_shortcode('[recent_products per_page="4" columns="4"]'); ?>

                    <button class="all-products-btn">Alle produkter</button>
                </section>


                <section id="about-section">
                    <div class="about-text">
                        <h1>Om Mona´s Kaffebar</h1>
                        <p>Mit navn er Mona. Jeg er en 27 årige influenser og kaffebarista fra Aarhus. Her kan du se og købe
                            mine specialdesignede kaffekopper! </p>
                    </div>

                    <div class="about-image">
                        <img src="<?php echo esc_url($mona_billede['url']); ?>" alt="">
                    </div>

                    <div class="recipes-text">
                        <h3>Vil du vide, hvordan jeg laver min iskaffe?</h3>
                        <p>Tjek mine opskrifter!</p>
                        <button class="recipes-btn">Opskrifter</button>
                    </div>

                    <div class="custom-designs-text">
                        <h1>Custom Designs</h1>
                        <p><?php echo $custom_design_description ?></p>
                        

                        <!-- .. forms for recipes -->
                    </div>

                </section>

            </div>


        </main>

    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>