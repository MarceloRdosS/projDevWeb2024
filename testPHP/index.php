<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta
			name="description"
			content="Quiosque Moana é um local à beira-mar para realização de eventos e casamentos, localizado no Recreio dos Bandeirantes, Rio de Janeiro. Oferecemos experiências únicas com bebidas, petiscos e música ao vivo em um ambiente descontraído e à beira-mar."
		/>
		<meta name="keywords" content="Quiosque, Moana, evento, casamento, praia,
		Recreio dos Bandeirantes, Rio de Janeiro, drinks, comida, ambiente tropical,
		música ao vivo" />
		<meta
			name="author"
			content="João Guilherme Bazeth Feistel Goulart, João Vitor da Silva, Luiz Paulo França Costa, Marcelo Ramos dos Santos, Matheus Silva Meirelles Moreno"
		/>
		<title>Quiosque Moana</title>
		<link rel="stylesheet" href="./css/leaflet.css" />
		<link rel="stylesheet" href="./css/indexcss.css" />
		<link rel="stylesheet" href="./css/footer.css" />
		<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
		<link
			href="https://fonts.googleapis.com/css?family=Roboto"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body>
		<nav id="navbar">
			<a href="./index.php"
				><img src="./img/logoimg-no-undertext.png" id="nav-logo" alt=""
			/></a>
			<ul id="menu">
				<li>
					<a
						href="./login.php"
						target="_blank"
						onclick="
        var width = 500;
        var height = 750;
        var left = (screen.width / 2) - (width / 2);
        var top = (screen.height / 2) - (height / 2);
        window.open(this.href, 'mywin', 'width=' + width + ', height=' + height + ', top=' + top + ', left=' + left + ', toolbar=1, resizable=0');
        return false;"
					>
						<button id="orçamentoBtn">
							Faça O Seu Orçamento <b>Grátis</b>
						</button>
					</a>
				</li>
				<li>
					<a href="#info">
						<button id="infoBtn">Informações</button>
					</a>
				</li>
				<li>
					<a
						href="./login.php"
						target="_blank"
						onclick="
        var width = 500;
        var height = 500;
        var left = (screen.width / 2) - (width / 2);
        var top = (screen.height / 2) - (height / 2);
        window.open(this.href, 'mywin', 'width=' + width + ', height=' + height + ', top=' + top + ', left=' + left + ', toolbar=1, resizable=0');
        return false;"
					>
						<button id="loginBtn">Entrar</button>
					</a>
				</li>
			</ul>
		</nav>
		<main>
			<figure class="logo">
					><img src="../img/logoImg.png" alt="logo" class="logoImg" 
				/></a>
			</figure>
		</main>

		<section>
			<div id="info">
				<div id="map"></div>
				<div id="info-content">
					<h1>ENDEREÇO</h1>
					<p>
						<a
							href="http://maps.google.com/maps/search/Quiosque%20Moana%20Tiki%20Bar/@-23.0145511627197,-43.403434753418,17z"
							target="_blank"
							>Av. Lúcio Costa Ilha 10 - Recreio dos Bandeirantes, RJ
							23970-000</a
						>
					</p>
					<p>
						Segunda-Feira - Fechado <br />Terça a Domingo - 08:00 até às 17:00
						ou 22:00 em dias de evento
					</p>
				</div>
			</div>
		</section>
		<footer>
			<div id="footer-top">
				<ul id="footer-menu">
					<li><a href="./quem-somos.html">Quem Somos</a></li>
					<li><a href="./fale-conosco.php">Fale Conosco</a></li>
					<li><a href="https://www.linkedin.com/">Trabalhe Conosco</a></li>
				</ul>
				<ul id="footer-social-ul">
					<li>
						<a
							href="https://www.instagram.com/quiosquemoana/"
							id="footer-insta"
						></a>
					</li>
					<li>
						<a href="https://www.tiktok.com" id="footer-tiktok"></a>
					</li>
					<li>
						<a
							href="https://www.facebook.com/p/quiosque-moana-100063649476127/?locale=pt_BR"
							id="footer-facebook"
						></a>
					</li>
					<li>
						<a href="https://www.youtube.com" id="footer-youtube"></a>
					</li>
				</ul>
			</div>
			<hr />
			<div id="footer-bottom">
				<p class="copyright-text">
					Copyright © 2024 Quiosque Moana Todos os direitos reservados. Todas as
					marcas registradas são propriedade dos seus respectivos donos.
				</p>
			</div>
		</footer>
	</body>
	<script src="./script/leaflet.js"></script>
	<script src="./script/index.js"></script>
</html>
