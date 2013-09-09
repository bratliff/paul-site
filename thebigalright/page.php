<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<!-- absolutely positioned elements -->
			<div id="backbutton">Return to Top &and;</div>
			<div class="moveElem1 moveElem"></div>
			<div class="moveElem2 moveElem"></div>
			<div class="moveElem3 moveElem"></div>
			<div class="moveElem4 moveElem"></div>
			<div class="moveElem5 moveElem"></div>
			<div class="moveElem6 moveElem"></div>
			<div class="moveElem7 moveElem"></div>
			<div class="moveElem8 moveElem"></div>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<!-- about page content -->

				<article id="Abou" <?php post_class(); ?>>
					<header class="entry-header">

						<h1 class="entry-title"><?php echo get_the_title(2); ?> </h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php echo get_post_field('post_content', 2); ?>
						
					</div><!-- .entry-content -->
					
				</article><!-- #post -->

				<!-- experience page content -->

				<article id="Expe" <?php post_class(); ?>>
					<hr>
					<header class="entry-header">

						<h1 class="entry-title"><?php echo get_the_title(14); ?> </h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php echo get_post_field('post_content', 14); ?>
					</div><!-- .entry-content -->
				</article><!-- #post -->

				<!-- clients page content -->

				<article id="Clie" <?php post_class(); ?>>
					<header class="entry-header">

						<h1 class="entry-title"><?php echo get_the_title(20); ?> </h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php echo get_post_field('post_content', 20); ?>
					</div><!-- .entry-content -->

				</article><!-- #post -->

				<!-- ethnography page content -->

				<article id="Ethn" <?php post_class(); ?>>
					<header class="entry-header">

						<h1 class="entry-title"><?php echo get_the_title(8); ?> </h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php echo get_post_field('post_content', 8); ?>
					</div><!-- .entry-content -->

				</article><!-- #post -->

				<!-- design strategist page content -->

				<article id="Desi" <?php post_class(); ?>>
					<header class="entry-header">

						<h1 class="entry-title"><?php echo get_the_title(18); ?> </h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php echo get_post_field('post_content', 18); ?>

					</div><!-- .entry-content -->
					
				</article><!-- #post -->

				<!-- perspectives page content -->

				<article id="Pers" <?php post_class(); ?>>
					<hr>
					<header class="entry-header">

						<h1 class="entry-title"><?php echo get_the_title(22); ?> </h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php echo get_post_field('post_content', 22); ?>
					</div><!-- .entry-content -->

				</article><!-- #post -->


				<!-- what works page content -->

				<article id="What" <?php post_class(); ?>>
					<header class="entry-header">

						<h1 class="entry-title"><?php echo get_the_title(24); ?> </h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php echo get_post_field('post_content', 24); ?>
					</div><!-- .entry-content -->

				</article><!-- #post -->

				<!-- reading list -->

				<article id="Read" <?php post_class(); ?>>
					<header class="entry-header">

						<h1 class="entry-title"><?php echo get_the_title(26); ?> </h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php echo get_post_field('post_content', 26); ?>
					</div><!-- .entry-content -->

				</article><!-- #post -->

				<!-- daily ordfinary joy -->

				<article id="Dail" <?php post_class(); ?>>
					<header class="entry-header">

						<h1 class="entry-title"><?php echo get_the_title(28); ?> </h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php echo get_post_field('post_content', 28); ?>
					</div><!-- .entry-content -->

				</article><!-- #post -->	

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>