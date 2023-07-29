<?php
get_header();
?>

    <section class="py-5 d-flex flex-column justify-content-center align-items-center vh-100 overflow-hidden">
        <article class="z-top position-relative text-center px-4 px-lg-0">
            <img class="col-8 mb-3 animate__animated animate__backInDown"
                 src="<?= get_field('404_img', 'option')['url']; ?>"
                 alt="<?= get_field('404_img', 'option')['title']; ?>">
            <h1 class="text-404 fw-bolder my-auto animate__animated animate__bounce mb-0">404</h1>
            <p class="fs-5 uppercase">صفحه یافت نشد!</p>
            <p class="fs-5 uppercase">با بازگشت به صفحه اصلی می توانید از بقیه وب سایت استفاده کنید</p>
            <a href="/" class="btn custom-btn rounded-0 animate__animated animate__backInUp animate__delay-1s">بازگشت به صفحه اصلی</a>
        </article>
    </section>
<?php
get_footer();
