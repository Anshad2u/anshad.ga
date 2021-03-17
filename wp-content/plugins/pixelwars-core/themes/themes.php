<?php

	$pixelwars_core_template = get_option('template');
	
	switch ($pixelwars_core_template)
	{
		case 'consultify':
		
			include_once($pixelwars_core_ABSPATH . 'themes/consultify/widget-main-slider.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/pre-get-posts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/posts-columns.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/enqueue-styles-scripts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/image-sizes.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/fonts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/post-type-portfolio.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/meta-box-header-style.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/meta-box-post-style.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/meta-box-title-visibility.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/meta-box-featured-media.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/meta-box-gallery-type.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/share-links.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/related-posts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-social-media-icon.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-about-me.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-link-box.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-intro.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-button.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-icon-box.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-animated-search.php');
		
		break;
		
		case 'efor':
		
			include_once($pixelwars_core_ABSPATH . 'themes/efor/widget-main-slider.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/pre-get-posts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/posts-columns.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/enqueue-styles-scripts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/image-sizes.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/fonts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/post-type-portfolio.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/meta-box-header-style.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/meta-box-featured-media.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/share-links.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/related-posts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/shortcodes.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/shortcode-generator/shortcode-generator.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-social-media-icon.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-about-me.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-link-box.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-intro.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-button.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-icon-box.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-animated-search.php');
		
		break;
		
		case 'lahanna':
		
			include_once($pixelwars_core_ABSPATH . 'themes/lahanna/widget-main-slider.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/pre-get-posts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/posts-columns.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/post-type-portfolio.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/share-links.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/related-posts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/shortcodes.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-intro.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-about-me.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-link-box.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/enqueue-styles-scripts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/image-sizes.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/fonts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-social-media-icon.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/meta-box-header-style.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/meta-box-featured-media.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-button.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-icon-box.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-animated-search.php');
		
		break;
		
		case 'theblogger':
		
			include_once($pixelwars_core_ABSPATH . 'themes/global/pre-get-posts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/posts-columns.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/enqueue-styles-scripts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/image-sizes.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/fonts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/meta-box-header-style.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/share-links.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/related-posts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-button.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-icon-box.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global/widget-animated-search.php');
		
		break;
		
		case 'life':
		
			include_once($pixelwars_core_ABSPATH . 'themes/global/share-links-2.php');
			include_once($pixelwars_core_ABSPATH . 'themes/life/meta-box-featured-media.php');
			include_once($pixelwars_core_ABSPATH . 'themes/life/widget-social-media-icon.php');
			include_once($pixelwars_core_ABSPATH . 'themes/life/widget-social-media-feed.php');
			include_once($pixelwars_core_ABSPATH . 'themes/life/widget-link-box.php');
			include_once($pixelwars_core_ABSPATH . 'themes/life/widget-about-me.php');
			include_once($pixelwars_core_ABSPATH . 'themes/life/widget-intro.php');
			include_once($pixelwars_core_ABSPATH . 'themes/life/widget-main-slider.php');
		
		break;
		
		case 'ikonik':
		
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/enqueue-styles-scripts.php');
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/post-type-portfolio.php');
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/meta-box-portfolio-details.php');
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/meta-box-featured-media.php');
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/browser-detection.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global-vcard/widget-social-media-icon.php');
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/widget-homepage-menu-item.php');
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/widget-contact-form.php');
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/widget-section-title.php');
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/widget-testimonial.php');
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/widget-fun-fact.php');
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/widget-client.php');
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/widget-process.php');
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/widget-progress-bar.php');
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/widget-service.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global-vcard/widget-timeline-title.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global-vcard/widget-timeline-event.php');
			include_once($pixelwars_core_ABSPATH . 'themes/ikonik/widget-button.php');
		
		break;
		
		case 'unrovr':
		
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/post-type-portfolio.php');
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/meta-box-portfolio-details.php');
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/meta-box-featured-media.php');
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/shortcodes.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global-vcard/widget-social-media-icon.php');
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/widget-homepage-menu-item.php');
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/widget-contact-form.php');
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/widget-section-title.php');
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/widget-map.php');
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/widget-testimonial.php');
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/widget-fun-fact.php');
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/widget-client.php');
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/widget-process.php');
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/widget-progress-bar.php');
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/widget-service.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global-vcard/widget-timeline-title.php');
			include_once($pixelwars_core_ABSPATH . 'themes/global-vcard/widget-timeline-event.php');
			include_once($pixelwars_core_ABSPATH . 'themes/unrovr/widget-button.php');
		
		break;
	}

?>