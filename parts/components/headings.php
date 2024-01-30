<?php
 include(__DIR__ . '../../../parts/sections/get-sections.php');

// Get fields here
 $heading_tag = get_sub_field('heading_tag'); 
 $set_url = get_sub_field('set_url');
?>

<?php if ( get_row_layout () == 'heading' ) : ?>

        <?php

        if(!empty($set_url)){
        echo ('<a href="');
        echo $set_url;
        echo ('">');  
        }
        ?> 
        <<?php echo $heading_tag; ?> class="<?php echo $text_align;?> <?php echo $text_class; ?>"
        style="<?php include(__DIR__ . '../../../parts/sections/style-var.php');?>">
        <?php the_sub_field( 'headings' ); ?>
        </<?php echo $heading_tag; ?>>
<?php 
    echo ('</a>');
    endif; 
?>


