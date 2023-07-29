<section class="container py-5">
    <div class="row justify-content-center">
<!--        <h1 class="fw-bolder fs-2 text-center text-info pb-1 lh-lg bg-white z-2"-->
<!--            data-aos="fade-left" id="header_title">-->
<!--           --><?php ////= get_field('form-title'); ?>
<!--        </h1>-->
<!--        <p class="text-center fs-2 text-dark custom-opacity" data-aos="zoom-in" data-aos-duration="300"-->
<!--           id="header_subtitle">--><?php //= get_field('form-subtitle'); ?><!--</p>-->
        <div class="col-lg-7 z-2" data-aos="fade-right">
            <?= do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]'); ?>
        </div>
    </div>
</section>