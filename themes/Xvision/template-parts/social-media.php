<ul class="d-flex list-unstyled gap-2 my-0 align-items-center justify-content-center pt-4 pb-2">
    <?php
    while (have_rows('social', 'option')):
        the_row(); ?>
        <li><a class="rounded-circle small" href="<?= get_sub_field('link', 'option'); ?>"
               title="<?= get_sub_field('social_name', 'option'); ?>"
               aria-label="<?= get_sub_field('social_name', 'option'); ?>">
                <?= get_sub_field('svg', 'option'); ?></a></li>
    <?php
    endwhile; ?>
</ul>