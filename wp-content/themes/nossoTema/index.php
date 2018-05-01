
<?php get_header(); ?>
<!-- Swiper -->
 <div class="swiper-container">
	 <div class="swiper-wrapper">
		 <div class="swiper-slide inscricao" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/inscricoes.png')">

		 </div>
		 <div class="swiper-slide social-media" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/rede_social.png')">

		 </div>
	 </div>
	 <div class="swiper-pagination"></div>
	 <div class="swiper-button-next"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
	 <div class="swiper-button-prev"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </div>
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
<div id="comoChegar" class="row">
	<div class="row">
		<h3>Como Chegar</h3>
	</div>
	<div class="row">
		<div class="one-half column"> AQUI DEVE IR O MAPA NO GOOGLE MAPS</div>
		<div class="one-half column">
			<div class="row">
				<div class="two columns">
					<div class="imgLocalizacao">
						<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/bus.png" alt="Ir ao IF de ônibus"/>
					</div>
				</div>
				<div class="ten columns">
					A partir do prédio da Penha, utilizar as linhas 123 (entra no bairro) ou 112 (é necessário atravessar a pista) e, para sua segurança, descer na altura do Posto Leão. (OBS: Estas linhas não passam no prédio da Penha, para pegar estes ônibus é necessário ir até a av. Antônio Pires Pimentel).
				</div>
			</div>
			<div class="row" style="margin-top: 25px;">
				<div class="two columns">
					<div class="imgLocalizacao">
						<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/car.png" alt="Ir ao IF de carro"/>
					</div>
				</div>
				<div class="ten columns">
					(acesso pelo retorno para Villa Real de Bragança na rod. Cap.Barduíno);
					Para chegar de carro, utilizar no Google Maps a localização “IFSP - Campus Bragança Paulista”.
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
