<?php include(__DIR__ . '../../../parts/sections/get-sections.php'); 
if ( get_row_layout () == 'spacer' ) : ?>
        <div class="spacer" style="<?php if ($spacer_height): ?> height:<?php echo $spacer_height; ?>;<?php endif; ?>"></div>
<?php endif; ?>
