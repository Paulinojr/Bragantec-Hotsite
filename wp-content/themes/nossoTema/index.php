	<?php get_header(); ?>
	<!-- Swiper -->
	<section>
		<div class="swiper-container sliderDesktop">
			<div class="swiper-wrapper">
				<div class="swiper-slide inscricao bannerPc" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/inscricaoPc.jpeg')">
				</div>
				<div class="swiper-slide social-media bannerPc" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/facePc.jpeg')">
				</div>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-next"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
			<div class="swiper-button-prev"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </div>
		</div>
		<div class="swiper-container sliderMobile">
			<div class="swiper-wrapper">
				<div class="swiper-slide inscricao bannerMobile" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/inscricoes.png')">

				</div>
				<div class="swiper-slide social-media bannerMobile" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/rede_social.png')">

				</div>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-next"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </div>
			<div class="swiper-button-prev"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </div>
		</div>
	</section>

	<section>
		<!-- SUBMISSAO -->
		<div id="submissao">
			<div class="row" >
				<h3>Submissão de Projetos</h3>
				<h4 style="text-align: center;" id="submissaoAncora"> Para submeter você deve fazer...</h4>
				<br/>
			</div>
			<div class="row" >
				<!--REGRAS GERAIS -->
				<div class="comoSubmeter one-half column"  title="Clique para acessar o link das Regras da Bragantec">
					<a href="https://docs.google.com/document/d/1RBJ_HqOuuu_9c3D6kS6hGnXAAeAnNilIIcjnIqMkfds/edit" target="_blank"><div class="row">
						<div class="imgSubmissao" style="padding-left: 9px; margin-right: 5px;">
							<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/rules.png" alt="Regras da Bragantec"/>
						</div>
						<div class="row">
							<h5 style="font-weight: bolder; margin-top: 15px;">Regras Gerais da Bragantec</h5>
						</div>
					</div></a>
				</div>
				<!-- CADASTRE-SE -->
				<div class="comoSubmeter one-half column"  title="Clique para acessar o link do formulario de cadastro">
					<a href="http://bra.ifsp.edu.br/eventos/index.php/bragantec/viiibragantec/user/account" target="_blank"><div class="row">
						<div class="imgSubmissao" style="padding-left: 9px; margin-right: 5px;">
							<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/form.png" alt="Faça o cadastro dos autores"/>
						</div>
						<div class="row">
							<h5 style="font-weight: bolder; margin-top: 15px;">Cadastre-se como Autor</h5>
						</div>
					</div></a>
				</div>
			</div>
			<div class="row">
				<!--PLANO DE PESQUISA -->
				<div class="comoSubmeter one-half column" title="Clique para ver o template do plano de pesquisa">
					<a href="https://docs.google.com/document/d/1HYHFE1LUOG3-LDTxmYp8nIpR8UZhFaqkdtUuXNeFKwE/edit" target="_blank"><div class="row">
						<div class="imgSubmissao" style="padding-left: 9px; margin-right: 5px;">
							<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/documento.png" alt="Faça o Plano de Pesquisa de seu projeto"/>
						</div>
						<div class="row">
							<h5 style="font-weight: bolder; margin-top: 15px;">Plano de Pesquisa! </h5>
						</div>
					</div></a>
				</div>
				<!--RELATORIO -->
				<div class="comoSubmeter one-half column" title="Clique para ver como se faz o relatório">
					<a href="https://docs.google.com/document/d/1mC2brGwsa6R1t9ttyHSoQuPSGeTSQ1DhBVt3uiWwBxQ/edit" target="_blank"><div class="row">
						<div class="imgSubmissao" style="padding-left: 9px; margin-right: 5px;">
							<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/resumo.png" alt="Faça o relatório do seu projeto"/>
						</div>
						<div class="row">
							<h5 style="font-weight: bolder; margin-top: 15px;">Relatório!
							</h5>
						</div>
					</div></a>
				</div>
			</div>
			<div class="row">
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
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow.png" alt="clique para ver o conteudo" width="30" height="30" id="arrowDownR"/>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrowUp.png" alt="clique para ver o conteudo" width="30" height="30" id="arrowUpR"/>
					</div>

					<div id="infosResumo" class="row"  align="justify">
						Apenas um parágrafo exponha as informações relativas ao seu trabalho.
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
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow.png" alt="clique para ver o conteudo" width="30" height="30" id="arrowDownV"/>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrowUp.png" alt="clique fechar o conteudo" width="30" height="30" id="arrowUpV"/>
					</div>
					<div class="row" id="infosVideo">
						Faça um vídeo explicando seu trabalho. Deixe a imaginação fluir  : )
						<br/>
						e poste no Youtube :D
					</div>
				</div>
			</div>
			<h5 style="margin-top: 20px" align="justify"> Resumão: O resumo e o vídeo e o plano de pesquisa serão julgados antes da Bragantec para dizer se seu projeto foi ou não aceito. Já o relatório deve estar impresso no dia da apresentação para os avaliadores da feira observarem o desenvolver do projeto  </h5>
		</div>

		<!-- Como chegar -->
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
