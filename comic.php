<?php
/**
 * Template Name: Comic
 */
	get_header();
	$comics = comic_loop( 1, $webcomic_series, '&order=' . get_post_meta( 'inkblot_comic_order' ) );
?>

<?php /** Display the comic */ while ( $comics->have_posts() ) : $comics->the_post(); ?>
	<div id="comic-<?php the_id(); ?>" <?php post_class( ':comic' ); ?>>
		<div <?php inkblot_comic_navi_class( true ); ?>><?php comics_nav_link( get_option( 'inkblot_comic_limit' ), '', __( '&laquo; First', 'inkblot' ), __( '&lsaquo; Previous', 'inkblot' ), __( 'Next &rsaquo;', 'inkblot' ), __( 'Last &raquo;', 'inkblot' ) ); ?></div>
		<div class="object"><?php the_comic( 'full', get_inkblot_comic_link(), get_option( 'inkblot_comic_limit' ) ); ?></div>
		<div <?php inkblot_comic_navi_class(); ?>><?php comics_nav_link( get_option( 'inkblot_comic_limit' ), '', __( '&laquo; First', 'inkblot' ), __( '&lsaquo; Previous', 'inkblot' ), __( 'Next &rsaquo;', 'inkblot' ), __( 'Last &raquo;', 'inkblot' ) ); ?></div>
	</div>
<?php endwhile; inkblot_inside_content(); ?>

<?php /** Display the comic post */ while ( $comics->have_posts() ) : $comics->the_post(); ?>
	<div id="post-<?php the_id(); ?>" <?php post_class(); ?>>
		<h2><a href="<?php the_permalink(); ?>" title="<?php printf( __( 'Permanent Link to %s', 'inkblot' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="entry"><?php the_content( __( 'Read More &raquo;', 'inkblot' ) ); ?></div>
		<div class="meta"><?php edit_post_link( __('Edit', 'inkblot' ), '', ' | ' ); the_time( get_option( 'date_format' ) ); ?> | <?php comments_popup_link( __( 'No Comments', 'inkblot' ), __( '1 Comment', 'inkblot' ), __( '% Comments', 'inkblot' ) ); ?></div>
	</div>
<?php endwhile; ?>
	
<?php get_footer(); ?>