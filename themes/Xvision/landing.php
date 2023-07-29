<?php /* Template Name: landing */

get_header();
?>
    <section class="h-100 w-100 position-relative overflow-y-hidden overflow-x-hidden" style="direction:ltr!important">
        <div class="container">
            <div class="row px-0 min-vh-100 justify-content-center align-items-center ">
                <div class="col-lg-10 d-flex flex-column align-items-center justify-content-center gap-4 py-3 px-3 z-top">
                    <h1>مسابقه بزرگ محله</h1>
                    <div id="notice-contest"
                         class=" btn btn-warning fs-5 lh-base border-warning border pt-2 pb-1 rounded-0"></div>

                    <form class="text-center">
                        <fieldset name='number-code' data-number-code-form>
                            <legend>Number Code</legend>
                            <input type="number" min='0' max='9' name='number-code-0' class="pt-3"
                                   data-number-code-input='0'
                                   required/>
                            <input type="number" min='0' max='9' name='number-code-1' class="pt-3"
                                   data-number-code-input='1'
                                   required/>
                            <input type="number" min='0' max='9' name='number-code-2' class="pt-3"
                                   data-number-code-input='2'
                                   required/>
                            <input type="number" min='0' max='9' name='number-code-3' class="pt-3"
                                   data-number-code-input='3'
                                   required/>
                        </fieldset>
                    </form>

                    <button type="button" class="btn btn-warning fs-5 lh-base border-warning border pt-2 pb-1 rounded-0"
                            data-fetch-button>
                        انتخاب برنده
                    </button>

                    <div class="w-100 d-flex justify-content-center align-items-center">
                        <h1 class="jumbo" id="myTargetElement"></h1>
                        <!--                        <span>*</span>-->
                        <!--                        <span>*</span>-->
                        <!--                        <span>*</span>-->
                        <!--                        <div class="odometer last-four-digits"></div>-->

                    </div>

                </div>
            </div>
        </div>
    </section>


<?php get_footer();