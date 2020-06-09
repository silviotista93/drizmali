<?php

/**
* WPBakery Page Builder Ohio Team Members Group Inner shortcode view
*/

?>
<div id="<?php echo esc_attr( $team_member_uniqid ); ?>" 
	class="cover-content<?php echo $css_class; ?>" 
	data-item="true">

	<div class="center-aligned">
		<div class="team-member_wrap">
			<h5 class="team-member_title"><?php echo $name; ?></h5>
			<p class="team-member_subtitle"><?php echo $position; ?></p>
			<p class="team-member_description"><?php echo $description; ?></p>

			<?php if ( $social_bar ) : ?>
			<div class="socialbar small outline">
				<?php if ( $facebook_link ) : ?>
					<a href="<?php echo esc_url( $facebook_link ); ?>" class="facebook"><i class="fab fa-facebook-f"></i></a>
				<?php endif; ?>
				<?php if ( $twitter_link ) : ?>
					<a href="<?php echo esc_url( $twitter_link ); ?>" class="twitter"><i class="fab fa-twitter"></i></a>
				<?php endif; ?>
				<?php if ( $dribbble_link ) : ?>
					<a href="<?php echo esc_url( $dribbble_link ); ?>" class="dribbble"><i class="fab fa-dribbble"></i></a>
				<?php endif; ?>
				<?php if ( $pinterest_link ) : ?>
					<a href="<?php echo esc_url( $pinterest_link ); ?>" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
				<?php endif; ?>
				<?php if ( $github_link ) : ?>
					<a href="<?php echo esc_url( $github_link ); ?>" class="github"><i class="fab fa-github"></i></a>
				<?php endif; ?>
				<?php if ( $instagram_link ) : ?>
					<a href="<?php echo esc_url( $instagram_link ); ?>" class="instagram"><i class="fab fa-instagram"></i></a>
				<?php endif; ?>
				<?php if ( $linkedin_link ) : ?>
					<a href="<?php echo esc_url( $linkedin_link ); ?>" class="linkedin"><i class="fab fa-linkedin"></i></a>
				<?php endif; ?>
				<?php if ( $vk_link ) : ?>
					<a href="<?php echo esc_url( $vk_link ); ?>" class="vk"><i class="fab fa-vk"></i></a>
				<?php endif; ?>	
			</div>
			<?php endif; ?>
		</div>
	</div>

</div>

<div class="team-member_image vc_col-sm-3" data-trigger="true">
	<div class="vc_row">
		<?php if ( $photo ) : ?>
		<img src="<?php echo $photo; ?>" alt="<?php echo esc_attr( $name ); ?>">
		<?php endif; ?>
	</div>
</div>