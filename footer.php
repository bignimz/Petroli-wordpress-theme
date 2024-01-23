<?php wp_footer(); ?>
<?php
$footer_layout = "3,3,3,3";
$columns = explode(',', $footer_layout);
$footer_bg = 'dark';
?>
<footer class="site-footer">
    <div class="container">
        <div class="site-footer_wrapper">
            <?php foreach ($columns as $i => $column) { ?>
                <div class="site-footer-col">
                    <?php if (is_active_sidebar('footer-sidebar-' . ($i + 1))) : ?>
                        <?php dynamic_sidebar('footer-sidebar-' . ($i + 1)); ?>
                    <?php endif; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</footer>
<div class="site-copyright">
    <div class="container">
        <p>Copyright <?php echo date('Y'); ?> Petroli By <a href="http://nimrod.emerginghost.co.ke" target="_blank" title="Nimrod Musungu: Professional WordPress Theme Developer">Nimrod Musungu</a>. All rights reserved</p>
    </div>
</div>
</body>
</html>
