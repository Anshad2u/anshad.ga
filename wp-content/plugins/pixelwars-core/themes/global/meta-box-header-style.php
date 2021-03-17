<?php

	function pixelwars_core_meta_box__header_style($post)
	{
		?>
			<div class="admin-inside-box">
				<?php
					wp_nonce_field(
						'pixelwars_core_meta_box__header_style',
						'pixelwars_core_meta_box_nonce__header_style'
					);
				?>
				<p>
					<label for="pixelwars_core_header_style"><?php esc_html_e('Select Header Style:', 'pixelwars-core'); ?></label>
					<br>
					<?php
						$header_style = get_post_meta(get_the_ID(), 'pixelwars_core_header_style', true);
					?>
					<select id="pixelwars_core_header_style" name="pixelwars_core_header_style">
						<option <?php if ($header_style == "")                                                                                                            { echo 'selected="selected"'; } ?> value=""><?php                                                                                                            esc_html_e('Default', 'pixelwars-core'); ?></option>
						<option <?php if ($header_style == 'is-header-float is-header-transparent')                                                                       { echo 'selected="selected"'; } ?> value="is-header-float is-header-transparent"><?php                                                                       esc_html_e('Transparent', 'pixelwars-core'); ?></option>
						<option <?php if ($header_style == 'is-header-float is-header-transparent is-header-float-margin')                                                { echo 'selected="selected"'; } ?> value="is-header-float is-header-transparent is-header-float-margin"><?php                                                esc_html_e('Transparent Margin', 'pixelwars-core'); ?></option>
						<option <?php if ($header_style == 'is-header-float is-header-transparent is-header-half-transparent')                                            { echo 'selected="selected"'; } ?> value="is-header-float is-header-transparent is-header-half-transparent"><?php                                            esc_html_e('Half Transparent', 'pixelwars-core'); ?></option>
						<option <?php if ($header_style == 'is-header-float is-header-transparent is-header-half-transparent is-header-float-box is-header-float-margin') { echo 'selected="selected"'; } ?> value="is-header-float is-header-transparent is-header-half-transparent is-header-float-box is-header-float-margin"><?php esc_html_e('Half Transparent Margin', 'pixelwars-core'); ?></option>
						<option <?php if ($header_style == 'is-header-float is-header-transparent-light')                                                                 { echo 'selected="selected"'; } ?> value="is-header-float is-header-transparent-light"><?php                                                                 esc_html_e('Transparent Light', 'pixelwars-core'); ?></option>
						<option <?php if ($header_style == 'is-header-float is-header-transparent-light is-header-float-margin')                                          { echo 'selected="selected"'; } ?> value="is-header-float is-header-transparent-light is-header-float-margin"><?php                                          esc_html_e('Transparent Light Margin', 'pixelwars-core'); ?></option>
						<option <?php if ($header_style == 'is-header-float is-header-float-box')                                                                         { echo 'selected="selected"'; } ?> value="is-header-float is-header-float-box"><?php                                                                         esc_html_e('Floating Box', 'pixelwars-core'); ?></option>
						<option <?php if ($header_style == 'is-header-float is-header-float-box is-header-float-margin')                                                  { echo 'selected="selected"'; } ?> value="is-header-float is-header-float-box is-header-float-margin"><?php                                                  esc_html_e('Floating Box Margin', 'pixelwars-core'); ?></option>
						<option <?php if ($header_style == 'is-header-float is-header-float-box is-header-float-box-menu')                                                { echo 'selected="selected"'; } ?> value="is-header-float is-header-float-box is-header-float-box-menu"><?php                                                esc_html_e('Floating Box Menu', 'pixelwars-core'); ?></option>
					</select>
				</p>
			</div>
		<?php
	}
	
	
	function pixelwars_core_save_meta_box__header_style($post_id)
	{
		if (! isset($_POST['pixelwars_core_meta_box_nonce__header_style']))
		{
			return $post_id;
		}
		
		$nonce = $_POST['pixelwars_core_meta_box_nonce__header_style'];
		
		if (! wp_verify_nonce($nonce, 'pixelwars_core_meta_box__header_style'))
        {
			return $post_id;
		}
		
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) 
        {
			return $post_id;
		}
		
		if ('page' == $_POST['post_type'])
		{
			if (! current_user_can('edit_page', $post_id))
			{
				return $post_id;
			}
		}
		else
		{
			if (! current_user_can('edit_post', $post_id))
			{
				return $post_id;
			}
		}
		
		update_post_meta($post_id, 'pixelwars_core_header_style', $_POST['pixelwars_core_header_style']);
	}
	
	add_action('save_post', 'pixelwars_core_save_meta_box__header_style');
	
	
	function pixelwars_core_add_meta_boxes__header_style()
	{
		$post_types = get_post_types();
		unset($post_types['attachment']);
		
		add_meta_box(
			'pixelwars_core_add_meta_box__header_style',
			esc_html__('Header Style', 'pixelwars-core'),
			'pixelwars_core_meta_box__header_style',
			$post_types,
			'side',
			'high'
		);
	}
	
	add_action('add_meta_boxes', 'pixelwars_core_add_meta_boxes__header_style');


/* ============================================================================================================================================= */


	function pixelwars_core_header_style()
	{
		$blog_page_id = get_option('page_for_posts');
		
		if (is_home() && $blog_page_id)
		{
			return get_post_meta($blog_page_id, 'pixelwars_core_header_style', true);
		}
		else
		{
			if (is_singular())
			{
				return get_post_meta(get_the_ID(), 'pixelwars_core_header_style', true);
			}
		}
	}

?>