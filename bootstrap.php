<?php
/**
 * @package snow-monkey-design-skin-hakuji
 * @author inc2734
 * @license GPL-2.0+
 */

add_filter(
	'theme_mod_archive-page-layout',
	function( $option ) {
		return 'one-column';
	}
);

add_filter(
	'theme_mod_singular-post-layout',
	function( $option ) {
		return 'one-column-slim';
	}
);

add_filter(
	'theme_mod_container-max-width',
	function( $option ) {
		return 1140;
	}
);

add_filter(
	'theme_mod_base-font',
	function( $option ) {
		return 'noto-serif-jp';
	}
);

add_filter(
	'theme_mod_header-layout',
	function( $option ) {
		return '1row';
	}
);

add_filter(
	'theme_mod_header-position',
	function( $option ) {
		return 'sticky';
	}
);

add_filter(
	'theme_mod_header-position-only-mobile',
	function( $option ) {
		return true;
	}
);

add_filter(
	'theme_mod_breadcrumbs-position',
	function( $option ) {
		return 'bottom-content-width';
	}
);

add_filter(
	'theme_mod_default-page-header-image',
	function( $option ) {
		return false;
	}
);

foreach ( [ 'post-eyecatch', 'page-eyecatch' ] as $hook ) {
	add_filter(
		'theme_mod_' . $hook,
		function( $option ) {
			return 'content-top';
		}
	);
}

add_filter(
	'theme_mod_infobar-content',
	function( $option ) {
		return false;
	}
);

add_filter(
	'option_mwt-share-buttons-display-position',
	function( $option ) {
		return 'bottom';
	}
);

add_filter(
	'mimizuku_related_posts_args',
	function( $args ) {
		return [
			'post_type'      => 'NO_EXIST_POST_TYPE',
			'posts_per_page' => 1,
		];
	}
);

add_filter(
	'is_active_sidebar',
	function( $is_active_sidebar, $index ) {
		if ( 'title-top-widget-area' === $index ) {
			return false;
		}
		if ( 'contents-bottom-widget-area' === $index ) {
			return false;
		}
		return $is_active_sidebar;
	},
	10,
	2
);

add_filter(
	'has_nav_menu',
	function( $has_nav_menu, $location ) {
		if ( 'header-sub-nav' === $location ) {
			return false;
		}
		if ( 'footer-sub-nav' === $location ) {
			return false;
		}
		return $has_nav_menu;
	},
	10,
	2
);
