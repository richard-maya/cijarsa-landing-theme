<?php get_header(); ?>

<main>
<section>
	<div class="container">
		<div class="row justify-content-center py-4">
			<h1>CIJARSA</h1>
		</div>
	</div>
</section>

	
<section class="gallery-item">
	<div class="container mb-5">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<div class="col-12 col-md-4">
				
				<div class="row justify-content-center">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<h2 class="blog-title"><?php the_title(); ?></h2>
					</a>
				</div>
				
				<div class="row justify-content-center">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail(array('class' => 'img-fluid')); ?>
					</a>
				</div>
				
				<div class="row justify-content-center mt-3 mb-5 pb-5">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<button class="btn btn-lentedrone btn-sm">Ver proyecto</button>
					</a>
				</div>
				
			</div>
			
			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Lo sentimos, no hay artículos en éste momento.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>
</main>

<?php get_footer(); ?>