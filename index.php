<?php include('./header.php'); ?>
	<header id="home">
		<section id="video-container">
			<video  src="./videos/bg1.webm" type="video/webm" autoplay="true" loop="true" muted></video>
		</section>
		<nav class="navbar navbar-default navbar-fixed-top clearfix">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sept-main-nav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#home"><img src="./imgs/egreen_logo.png" alt="logo E-Green" class="img-responsive"></a>
				</div>
				<div class="navbar-collapse main-nav collapse" id="sept-main-nav" aria-expanded="false" style="height: 0px;">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">Home</a></li>
						<li><a href="#e-green-intro">E-Green</a></li>
						<li><a href="#battle-energie">La battle énergie</a></li>
						<li><a href="#le-defi">Le défi</a></li>
						<li><a href="#newsletter-container">Newsletter</a></li>
						<li><a href="#le-jeu">Ils ont joué le jeu</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<h1>De grandes responsabilités <br>impliquent <br>de grands pouvoirs.</h1>
	</header>
	<main>
		<div class="container">
			<section class="row" id="e-green-intro">
				<div class="col-lg-12">
					<div class="heading-img">
						<h2>E-Green c'est quoi ? </h2>
							<img src="./imgs/egreen_logo.png" alt="logo E-Green" class="img-responsive">
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-md-offset-2 vignette-intro">
					<div class="picto-intro">
						<div class="img-rounded">
							<img src="./imgs/power-button.png" alt="Power button pictogram">
						</div>
						<h3>Un dispositif...</h3>
						<p>
							Qui aide à réduire les consommations d'énergie dans tout type de bâtiments.
						</p>	
					</div>
				</div>
				<div class="col-md-4 col-sm-12 vignette-intro">
					<div class=" picto-intro">
						<div class="img-rounded">
							<img src="./imgs/capteur.png" alt="Capteur pictogram">
						</div>
						<h3>Qui permet de...</h3>
						<p>
							Mieux comprendre les consommations grâce à des capteurs
							qui mesurent en temps réel les consommations d'électricité, d'eau, de gaz
							ou la température intérieure.
						</p>	
					</div>
				</div>
			</section>
			<section class="row" id="battle-energie">
				<div class="col-md-12">
					<h2>LE BATTLE ÉNERGIE</h2>
					<div class="content-battle">
						<div class="col-md-6 col-sm-12">
							<h3>Un projet en commun pour réduire les consommations d'énergie</h3>
							<p>
								Le mois de décembre arrive, le froid commence à s’installer.
								 C’est aussi un des mois où la consommation d’énergie dans l’ensemble des bâtiments est la
								plus importante.
								E-Green et le collectif le Sentier se mobilisent pour lutter contre le gaspillage énergétique.
								Selon de nombreuses études, Il faut 21 jours pour passer le premier palier de la création d’une
								habitude. Une occasion ludique et décalée pour découvrir des micro-gestes du quotidien et
								d’adopter de nouvelles habitudes plus durables et respectueuses de l’environnement.
							</p>
						</div>
						<div class="col-md-6 col-sm-12">
							<img src="./imgs/e-green-sentier.png" alt="E-Green et le Sentier">	
						</div>
					</div>
					<div class="content-battle-second">
						<div class="col-md-4 col-sm-12 number-battle">
							<div>
								<span class="number">
									21 jours
								</span>
								<p>
									Entre plusieurs bâtiments du quartier
								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 number-battle">
							<div>
								<span class="number">
									1
								</span>
								<p>
									Battle Énergie
								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 number-battle">
							<div>
								<span class="number">
									15%
								</span>
								<p>
									Objectif de réduction sur la facture d'énergie pour chaque bâtiment
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="row" id="le-defi">
				<div class="col-md-12">
					<h2>Le défi</h2>
					<div class="content-defi">
						<div class="col-md-6 col-sm-12">
							<h3>Un défi entre chaque étages</h3>
							<p>
								Le Défi a lieu entre les étages afin de stimuler la compétition. Les consommations globales de chaque étage sont mesurées en tant réel. Un capteur sera installé à chacun des étages. 

							</p>
						</div>
						<div class="col-md-6 col-sm-12">
							<h3>Un challenge proposé aux participants</h3>
							<p>
								Consommer le moins d’énergie possible et adopter des modes de consommation plus durables. Un classement est proposé chaque semaine, des points sont attribués en fonction du classement, et l’étage qui gagne le plus de points sur les 3 semaines de challenge remporte un lot à définir avec les lieux !
							</p>	
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="container-fluid" id="newsletter-container">
			<div class="container">
				<section class="row">
					<div class="col-md-12" id="newsletter">
						<h2>T'INSCRIRE À NOTRE NEWSLETTER, CA TE DIT ?</h2>
						<form class="subscribe-form col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" method="POST">
							<div class="input-group">
								<input type="email" class="form-control" id="mc-email" placeholder="Email..." name="email" required><!--
								whitespace--><span class="input-group-btn">
									<button class="btn btn-main btn-lg" type="submit">Je m'inscris !</button>
								</span>
							</div>
							<div id="notification"></div>
						</form>
					</div>
				</section>
			</div>
		</div>
		<div class="container">
			<section class="row" id="le-jeu">
				<div class="col-md-12">
					<h2>Ils ont joué le jeu</h2>
					<div class="col-md-3 col-sm-12 partner">
						<img src="./imgs/logos/logo-Cerise.png" alt="Logo Cerise">
						<h3>Cerise</h3>
					</div>
					<div class="col-md-3 col-sm-12 partner">
						<img src="./imgs/logos/logo-insa.png" alt="Logo INSA">
						<h3>INSA</h3>
					</div>
					<div class="col-md-3 col-sm-12 partner">
						<img src="./imgs/logos/logo-paillasse.png" alt="Logo Paillasse">
						<h3>La Paillasse</h3>
					</div>
					<div class="col-md-3 col-sm-12 partner">
						<img src="./imgs/logos/logo-schoolab.png" alt="Logo Schoolab">
						<h3>Schoolab</h3>
					</div>

				</div>
			</section>
		</div>
	</main>
<?php include('./footer.php'); ?>
