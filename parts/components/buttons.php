<?php include __DIR__ . '../../../parts/sections/get-sections.php';?>


<?php
$btn_background = get_sub_field('background_colors');
$border_color   = get_sub_field('border_color');
$border_radius  = get_sub_field('border_radius');
$border_width   = get_sub_field('border_width');
$btn_color      = get_sub_field('color');

?>

<?php if (get_row_layout() == 'button'): ?>
	<?php if ($button): ?>
		<button style="<?php include __DIR__ . '../../../parts/sections/style-var.php';?><?php if ($btn_background): ?> background-color:<?php echo $btn_background ?>;<?php endif;?><?php if ($border_width): ?> border:<?php echo $border_width ?> solid;<?php endif;?><?php if ($border_color): ?> border-color:<?php echo $border_color ?>;<?php endif;?><?php if ($border_radius): ?> border-radius:<?php echo $border_radius ?>;<?php endif;?>">
			<a href="<?php echo esc_url($button); ?>" style="<?php if ($btn_color): ?> color:<?php echo $btn_color ?>;<?php endif;?>"><?php echo $btn_text; ?></a>
		</button>
	<?php endif;?>
<?php endif;?>