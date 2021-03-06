<?php

if ( ! class_exists( 'ohio_widget_socialbar_subscribe' ) ) {

	class ohio_widget_socialbar_subscribe extends WP_Widget {

		function __construct() {
			parent::__construct(
				'ohio_widget_socialbar_subscribe',
				'Ohio: ' . esc_html__( 'Socialbar subscribe', 'ohio-extra' ),
				array( 'description' =>  esc_html__( 'Subscribe social buttons', 'ohio-extra' ) )
			);
		}

		function widget( $args, $instance ) {
			extract( $args );
			$title = $instance['title'];
			
			if ( isset( $instance['facebook'] ) ) {
				$facebook = $instance['facebook'];
			}
			if ( isset( $instance['twitter'] ) ) {
				$twitter = $instance['twitter'];
			}
			if ( isset( $instance['instagram'] ) ) {
				$instagram = $instance['instagram'];
			}
			if ( isset( $instance['pinterest'] ) ) {
				$pinterest = $instance['pinterest'];
			}
			if ( isset( $instance['linkedin'] ) ) {
				$linkedin = $instance['linkedin'];
			}
			if ( isset( $instance['vk'] ) ) {
				$vk = $instance['vk'];
			}
			if ( isset( $instance['dribbble'] ) ) {
				$dribbble = $instance['dribbble'];
			}
			if ( isset( $instance['youtube'] ) ) {
				$youtube = $instance['youtube'];
			}
			if ( isset( $instance['vimeo'] ) ) {
				$vimeo = $instance['vimeo'];
			}
			if ( isset( $instance['tumblr'] ) ) {
				$tumblr = $instance['tumblr'];
			}
			if ( isset( $instance['flickr'] ) ) {
				$flickr = $instance['flickr'];
			}
			if ( isset( $instance['reddit'] ) ) {
				$reddit = $instance['reddit'];
			}
			if ( isset( $instance['snapchat'] ) ) {
				$snapchat = $instance['snapchat'];
			}
			if ( isset( $instance['whatsapp'] ) ) {
				$whatsapp = $instance['whatsapp'];
			}
			if ( isset( $instance['quora'] ) ) {
				$quora = $instance['quora'];
			}
			if ( isset( $instance['vine'] ) ) {
				$vine = $instance['vine'];
			}
			if ( isset( $instance['digg'] ) ) {
				$digg = $instance['digg'];
			}
			if ( isset( $instance['foursquare'] ) ) {
				$foursquare = $instance['foursquare'];
			}
			if ( isset( $instance['tiktok'] ) ) {
				$tiktok = $instance['tiktok'];
			}
			if ( isset( $instance['twitch'] ) ) {
				$twitch = $instance['twitch'];
			}
			if ( isset( $instance['mixer'] ) ) {
				$mixer = $instance['mixer'];
			}

			$allowed_tags = array(
				'section' => array(
					'id' => array(),
					'class' => array()
				),
				'li' => array(
					'id' => array(),
					'class' => array()
				),
				'div' => array(
					'id' => array(),
					'class' => array()
				),
				'h3' => array(
					'class' => array()
				)
			);
			
			echo wp_kses( $before_widget, $allowed_tags );

			if ( ! empty( $title ) ) {
				echo wp_kses( $before_title . esc_html( $title ) . $after_title, $allowed_tags );
			}
			?>
			<div class="socialbar small outline new-tab-links">
				<?php if ( $facebook ) : ?>
					<a href="<?php echo esc_url( $facebook ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-facebook-f"></i>
					</a>
				<?php endif; ?>

				<?php if ( $twitter ) : ?>
					<a href="<?php echo esc_url( $twitter ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-twitter"></i>
					</a>
				<?php endif; ?>

				<?php if ( $instagram ) : ?>
					<a href="<?php echo esc_url( $instagram ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-instagram"></i>
					</a>
				<?php endif; ?>

				<?php if ( $linkedin ) : ?>
					<a href="<?php echo esc_url( $linkedin ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-linkedin"></i>
					</a>
				<?php endif; ?>

				<?php if ( $pinterest ) : ?>
					<a href="<?php echo esc_url( $pinterest ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-pinterest"></i>
					</a>
				<?php endif; ?>

				<?php if ( $vk ) : ?>
					<a href="<?php echo esc_url( $vk ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-vk"></i>
					</a>
				<?php endif; ?>

				<?php if ( $dribbble ) : ?>
					<a href="<?php echo esc_url( $dribbble ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-dribbble"></i>
					</a>
				<?php endif; ?>

				<?php if ( $youtube ) : ?>
					<a href="<?php echo esc_url( $youtube ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-youtube"></i>
					</a>
				<?php endif; ?>

				<?php if ( $vimeo ) : ?>
					<a href="<?php echo esc_url( $vimeo ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-vimeo"></i>
					</a>
				<?php endif; ?>

				<?php if ( $tumblr ) : ?>
					<a href="<?php echo esc_url( $tumblr ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-tumblr"></i>
					</a>
				<?php endif; ?>

				<?php if ( $flickr ) : ?>
					<a href="<?php echo esc_url( $flickr ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-flickr"></i>
					</a>
				<?php endif; ?>

				<?php if ( $reddit ) : ?>
					<a href="<?php echo esc_url( $reddit ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-reddit"></i>
					</a>
				<?php endif; ?>

				<?php if ( $snapchat ) : ?>
					<a href="<?php echo esc_url( $snapchat ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-snapchat"></i>
					</a>
				<?php endif; ?>

				<?php if ( $whatsapp ) : ?>
					<a href="<?php echo esc_url( $whatsapp ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-whatsapp"></i>
					</a>
				<?php endif; ?>

				<?php if ( $quora ) : ?>
					<a href="<?php echo esc_url( $quora ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-quora"></i>
					</a>
				<?php endif; ?>

				<?php if ( $vine ) : ?>
					<a href="<?php echo esc_url( $vine ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-vine"></i>
					</a>
				<?php endif; ?>

				<?php if ( $digg ) : ?>
					<a href="<?php echo esc_url( $digg ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-digg"></i>
					</a>
				<?php endif; ?>


				<?php if ( $foursquare ) : ?>
					<a href="<?php echo esc_url( $foursquare ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-foursquare"></i>
					</a>
				<?php endif; ?>


				<?php if ( $tiktok ) : ?>
					<a href="<?php echo esc_url( $tiktok ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-tiktok"></i>
					</a>
				<?php endif; ?>


				<?php if ( $twitch ) : ?>
					<a href="<?php echo esc_url( $twitch ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-twitch"></i>
					</a>
				<?php endif; ?>


				<?php if ( $mixer ) : ?>
					<a href="<?php echo esc_url( $mixer ); ?>" target="_blank" class="social rounded">
						<i class="fab fa-mixer"></i>
					</a>
				<?php endif; ?>

			</div>
			<?php
			echo wp_kses( $after_widget, $allowed_tags );
		}


		function update( $new, $old){
			$new = wp_parse_args( $new, array(
				'title' => '',
				'facebook' => '',
				'instagram' => '',
				'twitter' => '',
				'pinterest' => '',
				'linkedin' => '',
				'vk' => '',
				'dribbble' => '',
				'youtube' => '',
				'vimeo' => '',
				'tumblr' => '',
				'flickr' => '',
				'reddit' => '',
				'snapchat' => '',
				'whatsapp' => '',
				'quora' => '',
				'vine' => '',
				'digg' => '',
				'foursquare' => '',
				'tiktok' => '',
				'twitch' => '',
				'mixer' => ''
			) );
			return $new;
		}

		function form( $instance ) {
			$instance = wp_parse_args( $instance, array(
				'title' => '',
				'facebook' => '',
				'instagram' => '',
				'twitter' => '',
				'pinterest' => '',
				'linkedin' => '',
				'vk' => '',
				'dribbble' => '',
				'youtube' => '',
				'vimeo' => '',
				'tumblr' => '',
				'flickr' => '',
				'reddit' => '',
				'snapchat' => '',
				'whatsapp' => '',
				'quora' => '',
				'vine' => '',
				'digg' => '',
				'foursquare' => '',
				'tiktok' => '',
				'twitch' => '',
				'mixer' => ''
			) );
	?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php esc_html_e( 'Facebook link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['facebook'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php esc_html_e( 'Twitter link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['twitter'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>"><?php esc_html_e( 'Instagram link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'instagram' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['instagram'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>"><?php esc_html_e( 'Pinterest link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'pinterest' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['pinterest'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>"><?php esc_html_e( 'Linkedin link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'linkedin' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['linkedin'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'vk' ) ); ?>"><?php esc_html_e( 'Vkontakte link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'vk' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'vk' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['vk'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>"><?php esc_html_e( 'Dribbble link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'dribbble' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['dribbble'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>"><?php esc_html_e( 'Youtube link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'youtube' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['youtube'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'vimeo' ) ); ?>"><?php esc_html_e( 'Vimeo link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'vimeo' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'vimeo' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['vimeo'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>"><?php esc_html_e( 'Tumblr link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tumblr' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['tumblr'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'flickr' ) ); ?>"><?php esc_html_e( 'Flickr link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'flickr' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'flickr' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['flickr'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'reddit' ) ); ?>"><?php esc_html_e( 'Reddit link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'reddit' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'reddit' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['reddit'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'snapchat' ) ); ?>"><?php esc_html_e( 'Snapchat link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'snapchat' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'snapchat' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['snapchat'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'whatsapp' ) ); ?>"><?php esc_html_e( 'WhatsApp link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'whatsapp' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'whatsapp' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['whatsapp'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'quora' ) ); ?>"><?php esc_html_e( 'Quora link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'quora' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'quora' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['quora'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'vine' ) ); ?>"><?php esc_html_e( 'Vine link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'vine' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'vine' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['vine'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'digg' ) ); ?>"><?php esc_html_e( 'Digg link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'digg' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'digg' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['digg'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'foursquare' ) ); ?>"><?php esc_html_e( 'Foursquare link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'foursquare' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'foursquare' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['foursquare'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'tiktok' ) ); ?>"><?php esc_html_e( 'TikTok link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'tiktok' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tiktok' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['tiktok'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'twitch' ) ); ?>"><?php esc_html_e( 'Twitch link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitch' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitch' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['twitch'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'mixer' ) ); ?>"><?php esc_html_e( 'Mixer link:', 'ohio-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'mixer' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'mixer' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['mixer'] ); ?>"/>
		</p>


	<?php
		}
	}

	register_widget( 'ohio_widget_socialbar_subscribe' );
}