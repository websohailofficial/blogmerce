<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BlogMerce
 */

get_header();
?>


<?php if(has_flexible('main')): ?>
	<main>
		<?php the_flexible('main'); ?>
			<?php if ( have_rows( 'main' ) ): ?>
				<?php while ( have_rows( 'main' ) ) : the_row(); ?>

					<?php if ( get_row_layout() == 'section' ) : ?>
						<section>
							<div class="<?php the_sub_field('container_layout'); ?>" style="<?php require get_template_directory() . '/parts/sections/builder-style.php'; ?>">
								<?php if ( have_rows( 'row' ) ): ?>
										<div class="row">
											<?php while ( have_rows( 'row' ) ) : the_row(); ?>
												<?php if ( get_row_layout() == 'column' ) : ?>
													<div class="col-<?php echo get_layout_col(); ?>" style="<?php require get_template_directory() . '/parts/sections/builder-style.php'; ?>">
													<?php if ( have_rows( 'web_components' ) ): ?>	
														<?php while ( have_rows( 'web_components' ) ) : the_row(); ?>
															<?php															
																get_template_part( 'parts/components/headings' );
																get_template_part( 'parts/components/paragraph' );
																get_template_part( 'parts/components/image' );
																get_template_part( 'parts/components/buttons' );
																get_template_part( 'parts/components/spacer' );
																get_template_part( 'parts/components/divider' );
																get_template_part( 'parts/components/accordin' );
																get_template_part('parts/components/embeds');
																get_template_part('parts/components/code_editor');
																get_template_part('parts/components/icons');
																													
															?>
														<?php endwhile; ?>
														<?php else: ?>
														<?php // No layouts found ?>
													<?php endif; ?>
													</div>
												<?php endif; ?>
											<?php endwhile; ?>
										</div>
								<?php else: ?>
							</div>
					
								<?php // No layouts found ?>
								<?php endif; ?>
						</section>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php else: ?>
			<?php // No layouts found ?>
			<?php endif; ?>
	</main>
<?php endif; ?>

<?php get_footer();?>














