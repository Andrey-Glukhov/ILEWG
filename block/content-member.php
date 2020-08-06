<?php
/**
 * Block Name: Member
 *
 * This is the template that displays the member block.
 */

// get image field (array)
$avatar = get_field('portrait');

// create id attribute for specific styling
$id = 'member-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<blockquote id="<?php echo $id; ?>" class="member <?php echo $align_class; ?>">
    <p><?php the_field('member_name'); ?></p>
    <cite>
    	<img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" />
    	<span><?php the_field('member_affiliation'); ?></span>
    </cite>
</blockquote>
<style type="text/css">
	#<?php echo $id; ?> {
		background: <?php the_field('background_color'); ?>;
		color: <?php the_field('text_color'); ?>;
	}
</style>
