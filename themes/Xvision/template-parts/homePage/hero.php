<section class="container-fluid px-0 swiper hero-swiper">
    <div class="swiper-wrapper" data-aos="fade-down">
        <?php while (have_rows('slider_image')):
            the_row(); ?>
            <div class="swiper-slide">
                <img class="img-slider w-100 h-auto <?= get_sub_field('image-mobile') ? 'd-none d-lg-inline' : '' ; ?>"
                     width="<?= get_sub_field('image')['width']; ?>"
                     height="<?= get_sub_field('image')['height']; ?>"
                     src="<?= get_sub_field('image')['url']; ?>"
                     alt="<?= get_sub_field('image')['title']; ?>">
                <?php if(get_sub_field('image-mobile')) {?>
                <img class="img-slider w-100 h-auto d-lg-none"
                     width="<?= get_sub_field('image-mobile')['width']; ?>"
                     height="<?= get_sub_field('image-mobile')['height']; ?>"
                     src="<?= get_sub_field('image-mobile')['url']; ?>"
                     alt="<?= get_sub_field('image-mobile')['title']; ?>">
                <?php } ?>
            </div>
        <?php
        endwhile; ?>
    </div>
</section>