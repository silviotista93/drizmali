<?php

/**
* WPBakery Page Builder Ohio Team Member shortcode view
*/

?>
<div class="ohio-team-member-sc team-member<?php echo $css_class; ?>"
	id="<?php echo esc_attr( $team_member_uniqid ); ?>"
	<?php if ( $appearance_effect != 'none' ) { echo ' data-aos="' . esc_attr( $appearance_effect ) . '"'; } ?>
	<?php if ( $appearance_duration ) { echo ' data-aos-duration="' . esc_attr( $appearance_duration ) . '"'; } ?>
	<?php if ( $appearance_delay ) echo ' data-aos-delay="' . $appearance_delay . '"'; ?>>
	<div class="team-member_image image-wrap hover-scale-img" data-cursor-class="cursor-link">
		<?php if ($member_link): ?>
			<a href="<?php echo $member_link ?>" class="team-member-link">
		<?php endif; ?>

			<?php if ( $photo ) : ?>
				<img src="<?php echo esc_url( $photo ); ?>" alt="<?php echo esc_attr( $name ); ?>">
			<?php endif; ?>

		<?php if ($member_link): ?>
			</a>
		<?php endif; ?>

		<div class="wrap team-member_wrap">
			<?php if ( $block_type_layout == 'inner' ) : ?>
				<h5 class="team-member_title"><?php echo $name; ?></h5>
				<p class="team-member_subtitle"><?php echo $position; ?></p>
			<?php endif; ?>

			<div class="team-member_description_wrap">
				<?php if ($description != ''): ?>
					<p class="team-member_description"><?php echo $description; ?></p>
				<?php endif; ?>
				<div class="socialbar small outline inverse">
					<?php if ( $facebook_link ) : ?>
						<a href="<?php echo $facebook_link; ?>" class="facebook"><i class="fab fa-facebook-f"></i></a>
					<?php endif; ?>
					<?php if ( $twitter_link ) : ?>
						<a href="<?php echo $twitter_link; ?>" class="twitter"><i class="fab fa-twitter"></i></a>
					<?php endif; ?>
					<?php if ( $dribbble_link ) : ?>
						<a href="<?php echo $dribbble_link; ?>" class="dribbble"><i class="fab fa-dribbble"></i></a>
					<?php endif; ?>
					<?php if ( $pinterest_link ) : ?>
						<a href="<?php echo $pinterest_link; ?>" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
					<?php endif; ?>
					<?php if ( $github_link ) : ?>
						<a href="<?php echo $github_link; ?>" class="github"><i class="fab fa-github"></i></a>
					<?php endif; ?>
					<?php if ( $instagram_link ) : ?>
						<a href="<?php echo $instagram_link; ?>" class="instagram"><i class="fab fa-instagram"></i></a>
					<?php endif; ?>
					<?php if ( $linkedin_link ) : ?>
						<a href="<?php echo $linkedin_link; ?>" class="linkedin"><i class="fab fa-linkedin"></i></a>
					<?php endif; ?>
					<?php if ( $vk_link ) : ?>
						<a href="<?php echo $vk_link; ?>" class="vk"><i class="fab fa-vk"></i></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<?php if ( $block_type_layout != 'inner' ) : ?>
		<h5 class="team-member_title"><?php echo $name; ?></h5>
		<p class="team-member_subtitle"><?php echo $position; ?></p>
	<?php endif; ?>
</div>