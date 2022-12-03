<section class="section-gallery">
    <div class="container">
        <div class="section-white">

            <div class="black-heading">
                <h1 class="black-heading__title">
                    Наши квизы - это всегда яркое и незабываемое событие.</br>
                    Просто посмотрите фотографии с наших мероприятий:
                </h1>
            </div>

            <?php
            $thisPostId = get_the_ID();
            $posts = get_posts(array(
                'numberposts' => 100,
                'post_type' => 'gallery',
                'orderby' => 'id',
                'order' => 'ASC',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));
            ?>


            <!-- Slider main container -->
            <div class="swiper gallery-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->

                    <?php foreach ($posts as $post) { setup_postdata($post); ?>

                        <div class="swiper-slide">
                            <img src="<?= the_field('slide-image');?>" alt="<?= the_field('slide-caption');?>">
                            <div class="swiper-slide-description">
                                <div class="swiper-slide-description__item">
                                <span>
                                    <?= the_field('slide-caption');?>
                                </span>
                                </div>
                            </div><!-- / .swiper-slide-description -->
                        </div><!-- / .swiper-slide -->

                    <?php } wp_reset_postdata(); // сброс постов ?>

                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            
            </div>
        </div><!-- / .section-white -->
    </div><!-- / .container -->
    
    <div class="image-full__wrapper">
        <div class="image-full__close">
            <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="30px"><path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"/></svg>
        </div>
        <div class="image-full__image">
            <img src="<?= get_template_directory_uri() ?>/assets/img/gallery/7.webp" alt="slide">
            <div class="swiper-slide-description">
                <div class="swiper-slide-description__item">
                    <span>
                        Гвоздатый квиз по Гарри-Поттеру
                    </span>
                </div>
            </div><!-- / .swiper-slide-description -->
        </div>
    </div><!-- /.full-image -->

</section><!-- /.section-gallery -->