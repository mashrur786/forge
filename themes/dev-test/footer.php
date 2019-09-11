    <!-- Footer-->
    <footer>
        <div class="container content">
            <div class="row">
                <!-- Contact info-->
                <div class="col-md-2">
                    <p>P <?php the_field('tel', 'option'); ?>
                        <br>F (+44) 0 123 456 78
                        <br>M <?php the_field('tel', 'option'); ?>
                    </p>
                </div>
                <div class="col-md-2">
                    <p><?php the_field('address', 'option'); ?></p>
                </div>
                <div class="col-md-8 text-right">
                    <!-- Social links-->
                    <?php if( have_rows('social_icons', 'option') ): ?>
                    <?php while( have_rows('social_icons', 'option') ): the_row();  ?>
                    <ul class="social">
                        <?php while( have_rows('social_icon') ): the_row();  ?>
                         <li>
                             <a href="<?php echo get_sub_field('link') ?>"
                                class="<?php echo get_sub_field('icon_class')?>"></a>
                         </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- Copyright message-->
                    <div class="copyright"><?php echo date('Y'); ?>. Forge UK. Developer Test.</div>
                </div>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>

</body>
</html>