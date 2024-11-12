<?php
/**
 * @package snow-monkey-design-skin-hakuji
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * アーカイブページのレイアウトを1カラムに
 *
 * @return string
 */
add_filter(
	'theme_mod_archive-post-layout',
	function () {
		return 'one-column';
	}
);

/**
 * 詳細ページのレイアウトを1カラム（スリム）に
 *
 * @return string
 */
add_filter(
	'theme_mod_post-layout',
	function () {
		return 'one-column-slim';
	}
);

/**
 * container の最大幅を 1140px に
 *
 * @return int
 */
add_filter(
	'theme_mod_container-max-width',
	function () {
		return 1140;
	}
);

/**
 * 基本フォントを Noto Serif JP に
 *
 * @return string
 */
add_filter(
	'theme_mod_base-font',
	function () {
		return 'noto-serif-jp';
	}
);

/**
 * ヘッダーを1行レイアウトに
 *
 * @return string
 */
add_filter(
	'theme_mod_header-layout',
	function () {
		return '1row';
	}
);

/**
 * ヘッダー位置を sticky に
 *
 * @return string
 */
add_filter(
	'theme_mod_header-position',
	function () {
		return 'sticky';
	}
);

/**
 * パンくずの表示位置は記事下に
 *
 * @return string
 */
add_filter(
	'theme_mod_breadcrumbs-position',
	function () {
		return 'bottom-content-width';
	}
);

/**
 * デフォルトページヘッダー画像は設定させない
 *
 * @return boolean
 */
add_filter(
	'theme_mod_default-page-header-image',
	function () {
		return false;
	}
);

/**
 * 投稿/固定ページのアイキャッチ画像表示はコンテンツ上に
 *
 * @return string
 */
foreach ( array( 'post-eyecatch', 'page-eyecatch' ) as $hook ) {
	add_filter(
		'theme_mod_' . $hook,
		function () {
			return 'content-top';
		}
	);
}

/**
 * お知らせバーは設定させない
 *
 * @return boolean
 */
add_filter(
	'theme_mod_infobar-content',
	function () {
		return false;
	}
);

/**
 * シェアボタンの表示位置は記事下に
 *
 * @return string
 */
add_filter(
	'option_mwt-share-buttons-display-position',
	function () {
		return 'bottom';
	}
);

/**
 * 関連記事は表示させない
 *
 * @return array
 */
add_filter(
	'mimizuku_related_posts_args',
	function () {
		return array(
			'post_type'      => 'NO_EXIST_POST_TYPE',
			'posts_per_page' => 1,
		);
	}
);

/**
 * タイトル上、コンテンツ下部ウィジェットエリアは使用させない
 *
 * @param boolean $is_active_sidebar
 * @param string $index
 * @return boolean
 */
add_filter(
	'is_active_sidebar',
	function ( $is_active_sidebar, $index ) {
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

/**
 * ヘッダーサブナビ、フッターサブナビは使用させない
 *
 * @param boolean $has_nav_menu
 * @param string $location
 * @return boolean
 */
add_filter(
	'has_nav_menu',
	function ( $has_nav_menu, $location ) {
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

/**
 * 一覧の記事タイトルをトリムしない
 *
 * @param int
 * @return int|false
 */
add_filter(
	'snow_monkey_entry_summary_title_num_words',
	'__return_false'
);
