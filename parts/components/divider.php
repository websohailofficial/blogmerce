<?php include __DIR__ . '../../../parts/sections/get-sections.php';if (get_row_layout() == 'divider'): ?>
<hr class="<?php echo $divider_alignment; ?>" style="<?php if ($divider_width): ?> width:<?php echo $divider_width; ?>%;<?php endif;?><?php if ($divider_color): ?> color:<?php echo $divider_color; ?>;<?php endif;?><?php if ($divider_height): ?> height:<?php echo $divider_height; ?>;<?php endif;?>">
<?php endif;?>