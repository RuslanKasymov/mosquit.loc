<?php get_header(); ?>
	<div class="container mb-5">
		<div class="row">
			<div class="col-12">
				<div class="block block-shadow relative">
					<div class="news-category-head"><h1><? the_title(); ?></h1></div>
					<?
					wp_reset_query();
					the_content();
					?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>