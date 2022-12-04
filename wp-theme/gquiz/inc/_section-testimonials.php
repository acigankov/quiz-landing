<section class="testimonials">
    <div class="container">
        <div class="section-padding section-white">
            <div class="testimonials-bordered section-gray">

                <div class="testimonials-description">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/stars-testimonials.webp" alt="rating" class="testimonials-description__stars">
                    <p class="testimonials-description__text">
                        Мы провели более 100 квизов на самые разные темы, от сериала «Секс в большом городе» для
                        девушек с коктейлями Космополитан, до отраслевой игры на тему «Нефтепереработка» для суровых
                        сибирских нефтяников, и к каждому квизу подходили с максимальным вниманием и ответственностью.
                        Нам всегда приятно, когда игры вызывают живые эмоции и восторг участников. Будем рады видеть и Ваш
                        отзыв в этом списке:
                    </p><!-- /.testimonials-description__text -->
                </div><!-- /.testimonials-description -->

                <?php //собираем посты по типу
                    $thisPostId = get_the_ID();
                    $posts = get_posts(array(
                        'numberposts' => 100,
                        'post_type' => 'testimonials',
                        'orderby' => 'id',
                        'order' => 'ASC',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ));
                ?>

                <div class="tesimonials-slider swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->

                        <?php foreach ($posts as $post) { setup_postdata($post); ?>

                            <div class="swiper-slide">
                                <div class="testimonials-slide">
                                    <img src="<?= the_field('testimonial-image')?>" alt="<?= the_title() ?>" class="testimonials-slide__photo">
                                    <p class="testimonials-slide__description">
                                        <?= the_field('testimonial-text')?>
                                    </p>
                                </div><!-- /.testimonials-slide -->
                            </div><!-- /.swiper-slide -->

                        <?php } wp_reset_postdata(); // сброс постов ?>

                    </div>
                        <!-- If we need navigation buttons -->
                        <div class="testimonials-slider__prev"></div>
                        <div class="testimonials-slider__next"></div>
                </div><!-- /.tesimonials-slider -->

            </div><!-- /.testimonials-bordered -->
        </div>
    </div>
</section>