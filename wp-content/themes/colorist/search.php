<?php
/**
 * The template for displaying search results pages.
 *
 * @package colorist
 */

get_header(); ?>
<div id="content" class="site-content">
		<div class="container">
			<?php do_action('colorist_two_sidebar_left'); ?>	
	<section id="primary" class="content-area <?php colorist_layout_class();?> columns">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf('%1$s: %2$s',__('Search Results For', 'colorist' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php colorist_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php do_action('colorist_two_sidebar_right'); ?>	
<?php get_footer(); ?>
