	<?php get_header(); ?>
	<!-- Swiper -->
	<section>
		<div class="swiper-container sliderDesktop">
			<div class="swiper-wrapper">
				<div class="swiper-slide inscricao bannerPc" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/inscricaoPc.jpeg')">
				</div>
			</div>
<!-- 			<div class="swiper-pagination"></div>
			<div class="swiper-button-next"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
			<div class="swiper-button-prev"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </div> -->
		</div>
		<div class="swiper-container sliderMobile">
			<div class="swiper-wrapper">
				<div class="swiper-slide inscricao bannerMobile" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/inscricoes.png')">
				</div>
			</div>
<!-- 			<div class="swiper-pagination"></div>
			<div class="swiper-button-next"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
			<div class="swiper-button-prev"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </div> -->
		</div>
	</section>
<!-- 	<section id="noticias">
		<div class="row noticias" >
			<h3>Notícias</h3>
			<div class="twelve columns articles"  >
				<?php

				$args = array(
					'posts_per_page' => 4,
					'orderby'        => 'most_recent'
				);

				$custom_query = new WP_Query( $args );

				if (have_posts()):
					while ($custom_query->have_posts()): $custom_query->the_post();
					?>
					<div class="three columns article">
						<img src="<?php echo get_the_post_thumbnail_url() ?>"
						alt="post-thumbnail" class="article-image" />
						<div class="article-text">
							<h5 class="article-title">
								<?php
								the_title();
								?>
							</h5>
							<p><?php the_excerpt();?></p>
						</div>
					</div>
					<?php
				endwhile;
				endif
				?>
			</div>
		</div>	</section> -->
		<section id="participar">
			<div  id="content">
				<div class="row">
					<br/><br/>
					<h3> Como participar ?</h3>
					<h5  id="participarAncora"> Primeiramente confira as <a>regras</a> e então <br/> siga 3 passos (Inscriçao, desenvolvimento e apresentação)</h5>
					<br/>
				</div>
			</div>
			<div class="container">
					<ul id="stepbstep" class="progressbar">
					 		<li id="intro" class="liStep active">Inscrição</li>
							<li id="des" class="liStep" >Desenvolvimento</li>
							<li id="apre" class="liStep" >Apresentação</li>
	 				</ul>
		  </div>
		</section>
		<section  id="introDiv">
			<!-- INCRIÇÃO -->
			<h3 style="text-align:center; font-weight: bolder;">Introdução</h3>
			<br/>
			<div class="row" >
				<div class="row twelve columns" style="padding: 0 20px 0 20px; ">
					<!--RESUMO -->
					<div class="comoSubmeter one-half column"  title="Clique para ver as especificações de um resumo">
						<div id="resumoDiv" class="row">
							<div class="imgSubmissao" style="padding-left: 9px; margin-right: 5px;">
								<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/form.png" alt="Faça o resumo de seu projeto"/>
							</div>
							<div class="row">
								<h5 style="font-weight: bolder; margin-top: 15px">Resumo!</h5>
							</div>
						</div>
						<div id="seta" class="row" style="border-top: solid lightgrey 1px;">
							<i class="fa fa-angle-down" style="font-size:36px;" id="arrowDownR"></i>
							<i class="fa fa-angle-up" style="font-size:36px;" id="arrowUpR"></i>
						</div>

						<div id="infosResumo" class="row"  align="justify">
							Seu projeto precisa ter um resumo, e é <span style="color: green"> APENAS UM PARÁGRAFO </span> que exponha as informações importantes seu trabalho. Ele deve apresentar esses tópicos:
							<br/>
							<BLOCKQUOTE>
								<br/><span style="color: darkgreen;">CONTEXTUALIZAÇÃO:</span> Identificar a grande área onde o trabalho está inserido e qual o problema/questões que o trabalho vai abordar.
								<br/><br/><span style="color: darkgreen;">OBJETIVOS:</span> Qual o propósito do trabalho? Como ele ira responder as questões colocadas na contextualização?
								<br/><br/>
								<span style="color: darkgreen;">METODOLOGIA:</span> Explicar, de maneira geral, de que forma o trabalho foi realizado
								<br/><br/><span style="color: darkgreen;">RESULTADOS:</span> Mostrar de maneira clara e detalhada os principais resultados alcançados
								<br/><br/><span style="color: darkgreen;">CONCLUSÃO:</span> Como os resultados alcançados podem contribuir para a evolução da ciência?
								<br/><br/>
								<span style="color: red;">NÃO</span> divida em topicos. <span style="color: green"> FAÇA</span> em forma corrida.
							</BLOCKQUOTE>
						</div>
					</div>
					<!--PLANO DE PESQUISA -->
					<div class="comoSubmeter one-half column" title="Clique para ver o template do plano de pesquisa" >
						<div class="row" id="planoDiv">
							<div class="imgSubmissao" style="padding-left: 9px; margin-right: 5px;">
								<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/documento.png" alt="Faça o Plano de Pesquisa de seu projeto"/>
							</div>
							<div class="row">
								<h5 style="font-weight: bolder; margin-top: 15px;">Plano de Pesquisa! </h5>
							</div>
						</div>
						<div id="otaseta3" class="row" style="border-top: solid lightgrey 1px;">
							<i class="fa fa-angle-down" style="font-size:36px;" id="arrowDownP"></i>
							<i class="fa fa-angle-up" style="font-size:36px;" id="arrowUpP"></i>
						</div>
						<div class="row" id="infosPlano">
							Para fazer um plano de pesquisa use o <a style="color: blue" href="<?php echo get_stylesheet_directory_uri(); ?>/download/formularioSubmissao2018.docx" download>
							template</a>, o plano de pesquisa é basicamente a teoria de seu projeto.
						</div>
					</div>


					<div class="row" >

						<!-- VIDEO DO PROJETO -->
						<div class="comoSubmeter one-half column"  title="VIDEO? QUE VIDEO? Clique para saber mais">
							<div id="videoDiv" class="row">
								<div class="imgSubmissao" style="padding-left: 9px; margin-right: 5px;">
									<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/video.png" alt="Faça um video explicando seu projeto"/>
								</div>
								<div class="row">
									<h5 style="font-weight: bolder; margin-top: 15px; float: left;">Video do projeto!</h5>
								</div>
							</div>
							<div id="otaseta" class="row" style="border-top: solid lightgrey 1px;">
								<i class="fa fa-angle-down" style="font-size:36px;" id="arrowDownV"></i>
								<i class="fa fa-angle-up" style="font-size:36px;" id="arrowUpV"></i>
							</div>
							<div class="row" id="infosVideo">
								Faça um vídeo explicando seu trabalho. Deixe a imaginação fluir  : )
								<br/>
								e poste no Youtube :D
							</div>
						</div>

						<!-- CADASTRE-SE -->
						<div class="comoSubmeter one-half column"  title="Clique para acessar o link do formulario de cadastro">
							<div id="cadDiv" class="row">
								<div class="imgSubmissao" style="padding-left: 9px; margin-right: 5px;">
									<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/form.png" alt="Faça o cadastro dos autores"/>
								</div>
								<div class="row">
									<h5 style="font-weight: bolder; margin-top: 15px;">Cadastre-se como Autor</h5>
								</div>
							</div>
							<div id="otaseta4" class="row" style="border-top: solid lightgrey 1px;">
								<i class="fa fa-angle-down" style="float:right; font-size:36px;" id="arrowDownC"></i>
								<i class="fa fa-angle-up" style="float:right; font-size:36px;" id="arrowUpC"></i>
							</div>
							<div class="row" id="infosCad">
								Já tem um cadastro? Clique <a style="color: blue" href="http://bra.ifsp.edu.br/eventos/index.php/bragantec/viiibragantec/user/account?existingUser=1" target="_blank">aqui</a>.
								Ou senão, crie seu cadastro clicando <a style="color: blue" href="http://bra.ifsp.edu.br/eventos/index.php/bragantec/viiibragantec/user/account" target="_blank">aqui</a>.
							</div>
						</div>



					</div>
				</div>
			</div>
			<br/>
		</section>
		<section style="padding: 0 30px 0 10px" id="desDiv">
			<!-- DESENVOLVIMENTO -->
			<h3 style="text-align:center; font-weight: bolder;">Desenvolvimento</h3>
			</br>
			<div class="row">
				<div class="row twelve columns">
					<!--RELATORIO -->
					<div class="comoSubmeter one-half column" title="Clique para ver como se faz o relatório">
						<a href="<?php echo get_stylesheet_directory_uri(); ?>/download/diretrizesRelatorio.docx" download>
							<div class="row">
							<div class="imgSubmissao" style="padding-left: 9px; margin-right: 5px;">
								<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/resumo.png" alt="Faça o relatório do seu projeto"/>
							</div>
							<div class="row">
								<h5 style="font-weight: bolder; margin-top: 15px;">Relatório!
								</h5>
							</div>
						</div>
					</a>
					</div>
				</div>
			</div>
		</section>
		<section style="padding: 0 20px 0 20px" id="apreDiv">
			<!-- APRESENTAÇÃO -->
			<h3 style="text-align:center; font-weight: bolder;">Apresentação</h3>
			</br>
			<div class="row">
				<!--RELATORIO -->

				<div class="row twelve columns">
					<div class="comoSubmeter one-half column" title="Clique para ver como se faz o relatório">

					</div>
					<div class="comoSubmeter one-half column" title="Clique para ver como se faz o relatório">

					</div>
				</div>
			</div>
		</section>
		<section>
			<!-- Como chegar -->
			<div id="comoChegar" class="row">
				<div class="row">
					<h3>Como Chegar ?</h3>
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
							<div class="ten columns" align="justify">
								A partir do prédio da Penha, utilizar as linhas 123 (entra no bairro) ou 112 (é necessário atravessar a pista) e, para sua segurança, descer na altura do Posto Leão. (OBS: Estas linhas não passam no prédio da Penha, para pegar estes ônibus é necessário ir até a av. Antônio Pires Pimentel).
							</div>
						</div>
						<div class="row" style="margin-top: 25px;"  align="justify">
							<div class="two columns">
								<div class="imgLocalizacao">
									<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/car.png" alt="Ir ao IF de carro"/>
								</div>
							</div>
							<div class="ten columns"  align="justify">
								(acesso pelo retorno para Villa Real de Bragança na rod. Cap.Barduíno);
								Para chegar de carro, utilizar no Google Maps a localização “IFSP - Campus Bragança Paulista”.
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div id="edicoesAnteriores" class="row">
				<div class="row">
					<h3>Edições Anteriores</h3>
					<p/>
					<h4>Em breve aqui!</h4>
				</div>
			</div>
		</section>

		<?php get_footer(); ?>
