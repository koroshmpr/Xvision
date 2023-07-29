<section class="position-relative">
    <div class="gradient-box-fill position-absolute mt-4 mt-lg-0 start-90 pe-5 top-50 rounded-circle"></div>
    <div class="container py-4">
        <?php
        $i = 1;
        while (have_rows('product_row')):
            the_row(); ?>
            <div class="row justify-content-center gap-lg-3 align-items-lg-end align-items-center py-xl-5"
                 id="product-<?= $i; ?>">
                <div class="col-xl-5 <?= $i % 2 == 0 ? 'order-xl-last' : 'order-xl-first'; ?> py-4 px-md-5 p-xl-0 text-justify"
                    <?= $i % 2 == 0 ? 'data-aos="fade-right"' : 'data-aos="fade-left"'; ?> >
                    <div class="d-flex justify-content-center justify-content-lg-start gap-3 align-items-center">
                        <?php while (have_rows('prodcut_name')):
                            the_row(); ?>
                            <?= get_sub_field('icon'); ?>
                            <span class="fw-bold"><?= get_sub_field('title'); ?></span>
                        <?php
                        endwhile; ?>
                    </div>
                    <p class="fw-bold pt-3 fs-4 text-dark"><?= get_sub_field('title'); ?></p>
                    <p><?= get_sub_field('sub_title'); ?></p>
                    <p class="text-justify"><?= get_sub_field('text'); ?></p>
                    <div class="d-flex justify-content-center">
                        <?php while (have_rows('button')):
                            the_row(); ?>
                            <a href="<?= get_sub_field('url'); ?>" target="_blank"
                               class="btn custom-btn py-3 px-5"><?= get_sub_field('title'); ?></a>
                        <?php
                        endwhile; ?>
                    </div>
                </div>
                <div class="col-xl-5 text-center position-relative" <?= $i % 2 == 0 ? 'data-aos="fade-left"' : 'data-aos="fade-right"'; ?> >
                    <img class="product-img img-fluid"
                         width="<?= get_sub_field('poster')['width']; ?>"
                         height="<?= get_sub_field('poster')['height']; ?>"
                         src="<?= get_sub_field('poster')['url']; ?>"
                         alt="<?= get_sub_field('poster')['title']; ?>"/>
                    <span class="modal-btn position-absolute start-0 bottom-0 pb-3 ps-4 fs-5"
                          data-bs-toggle="modal"
                          data-bs-target="#product-modal-<?= $i ?>">
                        <?php get_template_part('template-parts/svg/play'); ?>
                    </span>
                </div>
            </div>
            <?php
            if ($i == 2) {
                echo '<div class="col-lg-8 pt-1 pt-xl-0 d-flex justify-content-end">
                            <div class="gradient-box-empty rounded-circle"></div>
                      </div>';
            }
            $i++;
        endwhile; ?>
    </div>
</section>
<?php
$i = 1;
while (have_rows('product_row')):
    the_row(); ?>
    <!--modals -->
    <div class="modal fade" id="product-modal-<?= $i ?>" tabindex="-1" aria-labelledby="product-modal-<?= $i ?>-label"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-header border bg-primary bg-opacity-75 border-primary rounded-0 py-2">
                    <p class="fs-6 mb-0 bg-opacity-75 fs-bolder text-white"
                       id="product-modal-<?= $i ?>-label"><?= get_sub_field('title'); ?></p>
                    <button type="button" class="btn-close bg-white rounded-0 text-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <video class="w-100 modal-video border border-primary p-2 img-fluid <?= get_sub_field('video-mobile') ? 'd-none d-lg-inline' : '' ; ?>"
                           src="<?= get_sub_field('video')['url']; ?>"
                           poster="<?= get_sub_field('poster')['url']; ?>"
                           controls>
                    </video>
                    <?php if(get_sub_field('video-mobile')) {?>
                    <video class="w-100 modal-video border border-primary p-2 img-fluid d-lg-none"
                           src="<?= get_sub_field('video-mobile')['url']; ?>"
                           poster="<?= get_sub_field('poster')['url']; ?>"
                           controls>
                    </video>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    $i++;
endwhile; ?>
<!-- modal -->
