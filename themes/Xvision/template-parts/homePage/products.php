<section class="position-relative">
    <div class="position-absolute d-flex flex-column justify-content-center row-gap-4 start-0 ps-1 ps-xl-5 top-50">
        <?php if (get_field('product-svg')) ;
        { ?>
            <img class="product-svg" width="80" height="185" src="<?= get_field('product-svg')['url']; ?>"
                 alt="<?= get_field('product-svg')['title']; ?>">
        <?php }; ?>
        <div class="gradient-box-empty rounded-circle"></div>
    </div>
    <div class="container">
        <div class="row row-cols-sm-3 row-cols-1 mx-5 justify-content-center align-content-center">
            <?php
            $i = 1;
            while (have_rows('products')):
                the_row(); ?>
                <a class="px-lg-4 p-1" href="#product-<?= $i; ?>" data-aos="fade-down">
                    <div class="p-lg-3 px-1 py-3 row justify-content-center rounded-1 product-card">
                        <?= get_sub_field('icon'); ?>
                        <span class="pt-lg-5 pt-2 text-center fs-3"><?= get_sub_field('title'); ?></span>
                    </div>
                </a>
                <?php
                $i++;
            endwhile; ?>
        </div>
    </div>
</section>