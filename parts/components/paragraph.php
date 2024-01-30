<?php  include(__DIR__ . '../../../parts/sections/get-sections.php'); ?>

<?php if ( get_row_layout () == 'paragraph' ) : ?>
         
        <p class="<?php echo $text_align;?> <?php echo $text_class; ?>"
        style="<?php include(__DIR__ . '../../../parts/sections/style-var.php');?>">
        <?php the_sub_field( 'paragraph_area' ); ?>
        </p>

<?php endif; ?>


