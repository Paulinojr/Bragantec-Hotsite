<?php get_header(); ?>

<!-- Slider -->
<div class="conteiner">
	<div class="row">
		<div class="twelve column">
			<div class="conteudo"></div>
		</div>

	</div>
</div>

<div class="row noticias">
			 
<?php 
	if (have_posts()):
		while (have_posts()): the_post();
?>
	<div class="three columns">
		<h1>
			<?php
				the_title();
			?>
		</h1>
		<p><?php the_excerpt();?></p>

	</div>
	<?php
		endwhile; 
	endif
	?>
</div>



<?php get_footer(); ?>