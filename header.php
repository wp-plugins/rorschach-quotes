<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
<title><?php bloginfo( 'name' ); wp_title( ' | ', true ); ?></title>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); _e( ' Feed', 'inkblot' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php inkblot_body_class(); ?>>
	<div id="wrap-outer" class="group <?php inkblot_site_alignment(); ?>">
		<div id="wrap-inner">
			<div id="page">
				<?php get_sidebar( 'page-top' ); ?>
				<div id="head">
					<div class="group">
						<div class="interior">
							<div class="name"><a href="<?php bloginfo( 'home' ); ?>" title="<?php bloginfo( 'description' ); ?>"><span><?php bloginfo( 'name' ); ?></span></a></div>
							<div class="description"><?php bloginfo( 'description' ); ?></div>
						</div>
						<ul <?php inkblot_site_navi_class(); ?>><?php wp_list_pages( 'title_li=&link_before=<span>&link_after=</span>' ); ?></ul>
					</div>
				</div>
				<div id="body">
					<div class="group">
					<?php inkblot_begin_content(); ?>