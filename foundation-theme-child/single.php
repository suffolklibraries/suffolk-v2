<?php get_header(); ?>

<div class="row">

	<div class="small-12 large-8 columns sl-page" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<header class="sl-entry-header">

					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="sl-entry-header-meta">

						<!-- <?php foundationpress_entry_meta(); ?> -->

						<p><time><?php the_date('F j, Y'); ?></time></p>

					</div>

				</header>

				<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

				<div class="entry-content">

					<?php if ( has_post_thumbnail() ) : ?>

						<div class="row">

							<div class="column">

								<?php the_post_thumbnail( '', array('class' => 'th') ); ?>

							</div>

						</div>

					<?php endif; ?>

					<?php the_content(); ?>

				</div>

				<footer class="sl-entry-footer">

					<p>Filed under: <?php the_category(','); ?></p>

				</footer>

				<?php // do_action( 'foundationpress_post_before_comments' ); ?>
				<?php // comments_template(); ?>
				<?php // do_action( 'foundationpress_post_after_comments' ); ?>

			</article>

		<?php endwhile;?>

		<?php do_action( 'foundationpress_after_content' ); ?>

	</div> <!-- end .content column -->

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
