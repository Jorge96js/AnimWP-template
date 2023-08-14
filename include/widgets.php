<?php

if(!defined('ABSPATH')) die();

class AnimWP_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'animwp_widget',
			esc_html__( 'Animwp', 'animwp' ), 
			array( 'description' => esc_html__( 'Agrega las Clases como Widget', 'animwp' ), )
		);
	}

	public function widget( $args, $instance ) {
        ?>
			<ul class="sidebar_class">
				<h4 class="text-white">Capitulos de hoy:</h4>
				<?php
					$args = array(
						'post_type' => 'animwp_capitulos',
						'post_per_page' => $instance['entradas']
                    );

                    $entradas = new WP_Query($args);
					while($entradas->have_posts(  )): $entradas->the_post();
						?>
							<li>
								<div class="card-entrada">
									<div class="imagen_sidebar">
										<?php the_post_thumbnail('thumbnail');?>
									</div>
									<h5 class="text-white"><?php the_title();?></h5>
								</div>
							</li>
						<?php
					endwhile;
					wp_reset_postdata();
				?>
			</ul>
		<?php
	}

    public function form( $instance ) {
		$entradas = !empty($instance['entradas']) ? $instance['entradas'] : esc_html("¿Cuantas entradas quieres mostrar?");
		?>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('entradas'))?>">
					<?php echo esc_html_e("¿Cuantas entradas quieres mostrar?");?>
				</label>
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id('entradas'))?>" name="<?php echo esc_attr($this->get_field_name('entradas'))?>" type="number" value="<?php echo esc_attr($entradas)?>">
			</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['entradas'] = (!empty($new_instance['entradas'])) ? sanitize_text_field($new_instance['entradas']) : '';
		return $instance;
	}
} 

function animwp_registrar_widget() {
    register_widget( 'AnimWP_Widget' );
}
add_action( 'widgets_init', 'animwp_registrar_widget' );