<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Amphibious
 */

get_header(); ?>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur possimus sed quibusdam modi deserunt laudantium ea tenetur, labore temporibus quam eius sunt animi, excepturi enim cupiditate ad quis minus non? Nihil voluptatem, tenetur quisquam beatae quos cum praesentium sapiente nam! Sequi sed perspiciatis in id, sint quibusdam accusamus incidunt nobis, quo, vel perferendis quod accusantium eligendi voluptatum omnis consectetur! Doloribus qui asperiores culpa dicta. Fugit quo est quis, adipisci soluta quos nemo sapiente corporis enim laboriosam laudantium! Quisquam quas magni iusto laudantium dolores praesentium aliquid voluptas eius nulla id, autem ratione? Neque dolor non eius officiis architecto quis saepe consequatur eos illum enim at eaque nobis autem veritatis, dolores necessitatibus expedita minima. Facilis modi sapiente et, aliquid accusamus omnis non possimus aspernatur aliquam laborum temporibus reiciendis at! Ducimus, repudiandae tempore libero amet sit, alias, nisi quos soluta expedita nesciunt blanditiis perspiciatis. Recusandae quae enim consequuntur doloremque pariatur quod, tenetur quas porro, laudantium odit. At totam possimus magnam maiores, voluptate! Eos, ut iusto. Magni dolorem itaque, iste, sed quibusdam ducimus, in soluta corporis, officiis dolores praesentium harum! Ad cum tenetur quam fugit suscipit molestias. Expedita provident nemo, voluptates libero consequatur voluptatum numquam nesciunt nulla vero laborum quae voluptas non explicabo consectetur.
	<?php if ( ! have_posts() ) : ?>
	<div class="page-header-wrapper">
		<div class="container">

			<div class="row">
				<div class="col">

					<header class="page-header">
						<?php printf( '<h1 class="page-title">%1$s</h1>', esc_html__( 'Nothing Found', 'amphibious' ) ); ?>
					</header><!-- .page-header -->

				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .page-header-wrapper -->
	<?php endif; ?>

	<div class="site-content-inside">
		<div class="container">
			<div class="row">

				<div id="primary" class="content-area <?php amphibious_layout_class( 'content' ); ?>">
					<main id="main" class="site-main">

					<?php if ( have_posts() ) : ?>

						<div id="post-wrapper" class="post-wrapper post-wrapper-archive">
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
								/* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );
							?>

						<?php endwhile; ?>
						</div><!-- .post-wrapper -->

						<?php amphibious_the_posts_pagination(); ?>

					<?php else : ?>

						<div class="post-wrapper post-wrapper-single post-wrapper-single-notfound">
							<?php get_template_part( 'template-parts/content', 'none' ); ?>
						</div><!-- .post-wrapper -->

					<?php endif; ?>

					</main><!-- #main -->
				</div><!-- #primary -->

				<?php get_sidebar(); ?>

			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .site-content-inside -->

<?php get_footer(); ?>
