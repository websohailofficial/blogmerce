<?php  include(__DIR__ . '../../../parts/sections/get-sections.php'); ?>

<?php if ( get_row_layout () == 'image' ) : ?>
        <img class ="img-fluid" src="<?php the_sub_field( 'set_image' ); ?>" />
<?php endif; ?>


