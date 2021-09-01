<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 logo">
                    <img src="<?= get_field('footer_logo', 'option'); ?>" alt="">
                </div>
                <div class="col-lg-4 contacts d-flex">
                    <h5><?= get_field('contacts_title', 'option'); ?></h5>
                    <div class="d-flex">
                        <div class="left d-flex">
                            <img src="<?= get_field('contacts_icon', 'option'); ?>" alt="">
                            <p><?= get_field('contacts_address', 'option'); ?></p>
                        </div>
                        <div class="right">
                            <?php if(have_rows('contacts_repeater', 'option')) : ?>
                                <?php while(have_rows('contacts_repeater', 'option')): the_row(); ?>
                                    <div>
                                        <img src="<?= get_sub_field('icon')?>" alt=""> <?= get_sub_field('link')?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 social">
                    <h5><?= get_field('social_title', 'option'); ?></h5>
                    <div class="icons d-flex">
                        <?php if(have_rows('social_repeater', 'option')) : ?>
                        <?php while(have_rows('social_repeater', 'option')): the_row(); ?>
                                <a href="<?= get_sub_field('link'); ?>">
                                    <img src="<?= get_sub_field('icon')?>" alt="">
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
