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
<div id="comoChegar" class="twelve columns">
	<div class="twelve columns"> 
		<h3>Como Chegar</h3>
	</div>
	<div class="one-half column">
		(acesso pelo retorno para Villa Real de Bragança na rod. Cap.Barduíno);
		Para chegar de carro, utilizar no Google Maps a localização “IFSP - Campus Bragança Paulista”.

	Para chegar de ônibus, a partir do prédio da Penha, utilizar as linhas 123 (entra no bairro) ou 112 (é necessário atravessar a pista) e, para sua segurança, descer na altura do Posto Leão. (OBS: Estas linhas não passam no prédio da Penha, para pegar estes ônibus é necessário ir até a av. Antônio Pires Pimentel). 

	Para saber sobre outras linhas de ônibus e traçar o melhor itinerário, recomenda-se utilizar o aplicativo NSF_APP, disponível para smartphones.
	</div>
</div>

<?php get_footer(); ?>