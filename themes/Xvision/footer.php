</main>
<?php
global $template;
if (basename($template) === 'landing.php') { ?>
<footer>

</footer>
<?php }
else { ?>
    <footer class="row justify-content-center">
    <?php
    get_template_part('template-parts/social-media');
    ?>
</footer>
<?php  } ?>
<?php wp_footer(); ?>
</body>
</html>
