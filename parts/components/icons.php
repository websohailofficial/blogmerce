<?php if (get_row_layout() == 'icon_type'): ?>
<?php $select_icon_type = get_sub_field('select_icon_type');?>
<div class="icon-type <?php echo esc_attr($select_icon_type); ?>">
    <?php if ($select_icon_type === 'icon-with-text'): ?>
    <div class="icon-text">
        <h3><?php the_sub_field('title');?></h3>
        <p><?php the_sub_field('subtitle');?></p>
    </div>
    <?php endif;?>
    <?php $icon_image = get_sub_field('icon_image');?>
    <?php if ($icon_image): ?>
    <a href="<?php the_sub_field('link_url');?>">
        <img src="<?php echo esc_url($icon_image['url']); ?>" alt="<?php echo esc_attr($icon_image['alt']); ?>" />
    </a>
    <?php endif;?>
</div> 
<?php endif;?>



