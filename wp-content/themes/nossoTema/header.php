<!DOCTYPE html>
<html>
<head>
	<title>Bragantec</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/Skeleton/css/normalize.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/Skeleton/css/skeleton.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.5/css/swiper.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.5/css/swiper.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<header>
		<section id="hero">
			<div>
				<img id="imgBanner" src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner.png" alt="Banner da Bragantec"/>
			</div>

			<div id="menu" class="band navigation row">
				<nav class="conteiner primeira">
					<div class="ten columns">
						<label for="toggle">
							<img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu.png"  style="width:50px; height:50px;">
						</label>
						<input type="checkbox"  id="toggle"/>
						<div class="menuResp twelve columns">
							<ul>
								<li>
									<a href="<?php echo is_home() ?  "#hero" :  get_home_url();?>">Inicio</a>
								</li>
								<li>
									<a href="<?php echo is_home() ?  "#participarAncora" :  get_home_url()."#participarAncora";?>">Como Participar</a>
								</li>
								<li>
									<a href="<?php echo is_home() ?  "#comoChegar" :  get_home_url()."#comoChegar";?>">Como Chegar</a>
								</li>
								<li>
									<a href="<?php echo is_home() ?  "#edicoesAnteriores" :  get_home_url()."#edicoesAnteriores";?>">Edições Anteriores</a>
								</li>
								<li>
									<a href="<?php echo is_home() ?  "#contato" :  get_home_url()."#contato";?>">Contato</a>
								</li>
								<li>
									<a href="<?php echo get_site_url(); ?>/bragantequinha" style="color: rgb(127, 9, 6);">Bragantequinha</a>
								</li>
							</ul>
						</div>
						<div id="acessMobile">
							<div id="aFM">
								A+
							</div>
							<div id="dFM">
								A-
							</div>
						</div>
					</div>
					<div id="acessibilidadeLetra" style="margin-top: 6px;" class="conteiner two columns">
						<div id="aF">
							A+
						</div>
						<div id="dF">
							A-
						</div>
					</div>
				</nav>
			</div>
			<div>

				<img id="imgMobile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/perfil bragantec.jpg" alt="Banner da Bragantec"/>
			</div>
		</section>
	</header>
