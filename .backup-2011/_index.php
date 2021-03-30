<?php

require_once 'getDataFromGoogle.php';

/* limito a 3 le news da visualizzare in home
 * se si voglioni visualzzare tutte, utilizzare solo
 * la funzione get_all_news() e togliere tutto il resto
 */
$archivio =  array_slice(get_all_news(), 0, 0);
//$archivio =  array_slice(get_all_news(), 0, 1);


// questa è la notizia in evidenza che deve rimanere fissa
$sticky4 = getNews('UID67261');
$sticky3 = getNews('UID94970');
$sticky2 = getNews('UID94969');
$sticky = getNews('UID949619');
?>

<html>

<head>
	<title>Luiss Summer Schools 2020</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Le Luiss Summer School si rivolgono agli studenti delle scuole secondarie superiori dai 13 ai 18 anni per supportarli nella scelta del giusto percorso di studi dopo il diploma.Lezioni universitarie in italiano e inglese, lavori di gruppo e preparazione ai test di ammissione completano l’offerta delle settimane di orientamento organizzate dall’Ateneo.">
	<meta name="author" content="Luiss Guido Carli">
	<meta name="image" content="https://landing.luiss.it/summer-school-2021/imgs/home-page/summer-school-home.jpg">

	<!-- METATAGS -->
	<meta property="og:title" content="Luiss Summer School 2020">
	<meta property="og:description" content="Le Luiss Summer School si rivolgono agli studenti delle scuole secondarie superiori dai 13 ai 18 anni per supportarli nella scelta del giusto percorso di studi dopo il diploma.Lezioni universitarie in italiano e inglese, lavori di gruppo e preparazione ai test di ammissione completano l’offerta delle settimane di orientamento organizzate dall’Ateneo.">
	<meta property="og:image" content="https://landing.luiss.it/summer-school-2021/imgs/home-page/summer-school-home.jpg">
	<meta property="og:url" content="http://www.luiss.it/summer-school-2020">

	<meta name="twitter:title" content="Luiss Summer School 2020">
	<meta name="twitter:description" content="Le Luiss Summer School si rivolgono agli studenti delle scuole secondarie superiori dai 13 ai 18 anni per supportarli nella scelta del giusto percorso di studi dopo il diploma.Lezioni universitarie in italiano e inglese, lavori di gruppo e preparazione ai test di ammissione completano l’offerta delle settimane di orientamento organizzate dall’Ateneo.">
	<meta name="twitter:image" content="https://landing.luiss.it/summer-school-2021/imgs/home-page/summer-school-home.jpg">
	<meta name="twitter:card" content="summary_large_image">

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/summerschool.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-Bx4pytHkyTDy3aJKjGkGoHPt3tvv6zlwwjc3iqN7ktaiEMLDPqLSZYts2OjKcBx1" crossorigin="anonymous">
	<link rel="stylesheet" href="lightbox/ekko-lightbox.css">
	<link rel="stylesheet" href="main.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->

	<script src="https://connect.facebook.net/signals/config/1115479755284165?v=2.8.47&amp;r=stable" async=""></script>
	<script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
	<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
	<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-391482-1"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-391482-1');

	</script>

	<!-- Facebook Pixel Code -->

	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.call blue - luissMethod ?
					n.call blue - luissMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1115479755284165');
		fbq('track', 'PageView');

	</script>
	<noscript>
		<img height="1" width="1" src="https://www.facebook.com/tr?id=1115479755284165&ev=PageView
&noscript=1" />
	</noscript>
	<!-- End Facebook Pixel Code -->
</head>

<body>

	<?php require 'header.php';?>


	<section class="container-fluid" id="intro">
		<div class="container py-5 my-md-5">
			<div class="row py-xs-3 my-xs-3 py-5 ">

				<div class="col-12 col-md-6">
					<p class="big white">Le Luiss Summer School si rivolgono agli <strong> studenti delle scuole Superiori</strong> per aiutarli a scegliere il giusto percorso di studi dopo il Diploma.<br>
						Consentono di partecipare a un <strong>percorso accelerato di ingresso in Luiss</strong></p>
					<button style="border: 2px solid #fff;" onclick="location.href='http://jsa.luiss.it/Summer/'">
						Iscriviti subito <i class="fas fa-arrow-right white"></i>
					</button>
				</div>
			</div>
		</div>
	</section>


	<!-- NEWS -->
	<section class="fourth-section pb-5">
		<div class="container" style="border-bottom:solid 0.5px rgba(0, 58, 112, 0.5);">
			<div class="row">
				<div class="col-lg-9 my-3" style="border-bottom:solid 0.5px rgba(0, 58, 112, 0.5);">
					<h2 class="section blue-luiss mb-0">News</h2>
				</div>
				<div class="col-lg-3 my-3">
					<button class="red-news red-news-border" style="padding:23px 10px; line-height:15px; background: rgba(255, 255, 255, 0);" onclick="location.href='archivio-news.php'">SCOPRI TUTTE LE NEWS <i class="fas fa-arrow-right"></i></button>
				</div>
			</div>
			<div id="news" class="row blue-luiss pt-2">
				
				<!-- STICKY 4 -->
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 border-0 mb-4 mb-md-0">
					<p><i class="fal fa-exclamation-circle"></i></p>
						<!-- <div class="img" style="
						background-image:url('https://drive.google.com/uc?export=view&id=<?php echo $sticky4['id_immagine'] ?>');
						background-size: cover;
						height: 10em;
						background-position: center center;
						margin-bottom: 1em;
						"></div> -->
						<div class="min-height mb-2">
							<p class="mb-1" style="font-size:24px;"><?php echo $sticky4['data_di_pubblicazione'] ?></p>
							<h4 style="font-size:30px;"><?php echo $sticky4['titolo'] ?></h4>
							<br>
							<!--<p class="big"><?php echo $sticky4['riassunto'] ?></p>-->
						</div>
						<a class="call red-news" style="position:absolute; bottom: 0; font-size:20px;" title="" href="news.php?uuid=<?php echo $sticky4['uuid'] ?>" target="_blank">Leggi di più <i class="fas fa-arrow-right"></i></a>
					</div>
				
				<!-- STICKY 3 -->
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 border-0 mb-4 mb-md-0">
					<p><i class="fal fa-exclamation-circle"></i></p>
						<!-- <div class="img" style="
						background-image:url('https://drive.google.com/uc?export=view&id=<?php echo $sticky3['id_immagine'] ?>');
						background-size: cover;
						height: 10em;
						background-position: center center;
						margin-bottom: 1em;
						"></div> -->
						<div class="min-height mb-2">
							<p class="mb-1" style="font-size:24px;"><?php echo $sticky3['data_di_pubblicazione'] ?></p>
							<h4 style="font-size:30px;"><?php echo $sticky3['titolo'] ?></h4>
							<br>
							<!--<p class="big"><?php echo $sticky3['riassunto'] ?></p>-->
						</div>
						<a class="call red-news" style="position:absolute; bottom: 0; font-size:20px;" title="" href="news.php?uuid=<?php echo $sticky3['uuid'] ?>" target="_blank">Leggi di più <i class="fas fa-arrow-right"></i></a>
					</div>
				
				
				<!-- STICKY 2 -->
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 border-0 mb-4 mb-md-0">
					<p><i class="fal fa-exclamation-circle"></i></p>
						<!-- <div class="img" style="
						background-image:url('https://drive.google.com/uc?export=view&id=<?php echo $sticky2['id_immagine'] ?>');
						background-size: cover;
						height: 10em;
						background-position: center center;
						margin-bottom: 1em;
						"></div> -->
						<div class="min-height mb-2">
							<p class="mb-1" style="font-size:24px;"><?php echo $sticky2['data_di_pubblicazione'] ?></p>
							<h4 style="font-size:30px;"><?php echo $sticky2['titolo'] ?></h4>
							<br>
							<!--<p class="big"><?php echo $sticky2['riassunto'] ?></p>-->
						</div>
						<a class="call red-news" style="position:absolute; bottom: 0; font-size:20px;" title="" href="news.php?uuid=<?php echo $sticky2['uuid'] ?>" target="_blank">Leggi di più <i class="fas fa-arrow-right"></i></a>
					</div>

				<!-- STICKY 1 -->
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 border-0 mb-4 mb-md-0">
					<p><i class="fal fa-exclamation-circle"></i></p>
						<!-- <div class="img" style="
						background-image:url('https://drive.google.com/uc?export=view&id=<?php echo $sticky['id_immagine'] ?>');
						background-size: cover;
						height: 10em;
						background-position: center center;
						margin-bottom: 1em;
						"></div> -->
						<div class="min-height mb-2">
							<p class="mb-1" style="font-size:24px;"><?php echo $sticky['data_di_pubblicazione'] ?></p>
							<h4 style="font-size:30px;"><?php echo $sticky['titolo'] ?></h4>
							<br>
							<!--<p class="big"><?php echo $sticky['riassunto'] ?></p>-->
						</div>
						<a class="call red-news" style="position:absolute; bottom: 0; font-size:20px;" title="" href="news.php?uuid=<?php echo $sticky['uuid'] ?>" target="_blank">Leggi di più <i class="fas fa-arrow-right"></i></a>
					</div>


				
				<?php foreach ($archivio as $news): ?>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 border-0 mb-4 mb-md-0">
						<p><i class="fal fa-exclamation-circle"></i></p>
						<!--<div class="img" style="
						background-image:url('https://drive.google.com/uc?export=view&id=<?php echo $news['id_immagine'] ?>');
						background-size: cover;
						height: 10em;
						background-position: center center;
						margin-bottom: 1em;
						"></div> -->
						<div class="min-height mb-2">
							<p class="mb-1" style="font-size:24px;"><?php echo $news['data_di_pubblicazione'] ?></p>
							<h4 style="font-size:30px;"><?php echo $news['titolo'] ?></h4>
							<br>
							<!-- <p class="big"><?php echo $news['riassunto'] ?></p>-->
						</div>
						<a class="call red-news" style="position:absolute; bottom: 0; font-size:20px;" title="" href="news.php?uuid=<?php echo $news['uuid'] ?>" target="_blank">Leggi di più <i class="fas fa-arrow-right"></i></a>
					</div>
				<?php endforeach;?>



			</div>
		</div>
	</section>

	<section class="first-section">
		<div class="container">
			<div class="row">
				<div class="col-12 my-3 ">
					<h2 class="section blue-luiss">Vantaggi</h2>
				</div>
			</div>
			<div class="row blue-luiss">
				<div class="col-12 col-md-4 mb-5">
					<div class="embed-responsive embed-responsive-16by9 mb-3">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sOM9g5OJkEk?rel=0" allowfullscreen></iframe>
					</div>
					<div class="min-height">
						<h4>L’offerta Summer School 2020</h4>
						<p class="big">Le Luiss Summer School si rivolgono agli <strong>studenti delle scuole superiori</strong> per aiutarli a scegliere il giusto percorso di studi dopo il diploma. Lezioni universitarie in italiano e inglese su discipline economiche, giuridiche e delle scienze sociali, lavori di gruppo, didattica innovativa e laboratori. </p>
					</div>
					<a class="call blue-luiss" title="" href="offerta-summer-school.php">Scopri di più</a>
				</div>



				<div class="col-12 col-md-4 mb-5">
					<div class="img" style="background-image:url('imgs/home-page/summer-school-ammissione-anticipata.jpg');"></div>
					<div class="min-height">
						<h4>Ammissione<br />anticipata</h4>
						<p class="big">Le Luiss Summer School consentono, agli studenti delle scuole Superiori, di iniziare un <strong>percorso accelerato di ingresso in Luiss</strong> già a partire dal terzultimo anno scolastico. Gli studenti del penultimo anno possono sostenere il test di ammissione anticipata ai corsi di laurea Luiss</p>
					</div>
					<a class="call blue-luiss" title="" href="ammissione-anticipata.php">Scopri di più</a>
				</div>


				<div class="col-12 col-md-4 mb-5">
					<div class="img" style="background-image:url('imgs/home-page/summer-school-lezioni-ita-eng.jpg');"></div>
					<div class="min-height">
						<h4>Borse di studio per merito<br />Progetto 9000</h4>
						<p class="big">Gli studenti del penultimo anno che superano il test al termine della Orientation 4 con un punteggio eccellente e che conseguono un ottimo voto alla Maturità, possono partecipare all’assegnazione di un numero illimitato di borse di studio per frequentare gratuitamente l’Università Luiss.</p>
					</div>
					<a class="call blue-luiss" title="" href="borse-di-studio.php">Scopri di più</a>
				</div>
			</div>
		</div>
	</section>
	<a name="scegli-summer-school"></a>
	<section class="second-section">
		<div class="container">
			<div class="row">
				<div class="col-12 my-3 ">
					<h2 class="section blue-luiss">Scegli la Summer School che fa per te</h2>
				</div>
			</div>


			<div class="row">
				<div class="col-12 col-md-6 py-4 orientation-4">
					<div class="header-stripe orientation-4-stripe"></div>
					<div class="min-height">
						<h3 class="school color-orientation-4"> <strong>Luiss</strong> <br /> Orientation 4</h3>
						<h3 class="school color-orientation-4"><strong>Summer School</strong></h3>
						<p class="small blue-luiss my-3"> <strong>Per studenti del penultimo anno</strong> <br /> Approfondire un’area accademica di interesse, prepararsi alle prove di ammissione e sostenere in anticipo il test di ingresso.<br />
						</p>
					</div>
					<a class="call blue-luiss" title="" href="orientation-4-summer-school.php">Vai al corso</a>
				</div>
				<div class="col-12 col-md-6 py-4 orientation-3">
					<div class="header-stripe orientation-3-stripe"></div>
					<div class="min-height">
						<h3 class="school color-orientation-3"> <strong>Luiss</strong> <br /> Orientation 3</h3>
						<h3 class="school color-orientation-3"><strong>Summer School</strong></h3>
						<p class="small blue-luiss my-3"> <strong>Per studenti del terzultimo anno</strong><br /> Scegliere consapevolmente, chiarirsi le idee sul corso di studi più in linea con le proprie attitudini e con i propri interessi, avviando il percorso di accesso in Luiss.<br />
						</p>
					</div>
					<a class="call blue-luiss" title="" href="orientation-3-summer-school.php">Vai al corso</a>
				</div>
			</div>
 			<div class="row">
<!--				<div class="col-12 col-md-6 py-4">
					<div class="header-stripe neworld-stripe"></div>
					<div class="min-height">
						<h3 class="school color-neworld"><strong>Luiss</strong> <br /> NeWorld Junior</h3>
						<h3 class="school color-neworld"><strong>Summer School</strong></h3>
						<p class="small blue-luiss my-3"> <strong>Per studenti delle scuole medie</strong> <br /> Agli studenti delle scuole Medie è riservata un’edizione Junior della NeWorld. Con uno sguardo verso il futuro, gli studenti prenderanno parte a lezioni tematiche sull’intelligenza artificiale, le nuove tecnologie e la cybersecurity.</p>
					</div>
					<a class="call blue-luiss" title="" href="neworld-junior-summer-school.php">Vai al corso</a>
				</div>
-->
				<div class="col-12 col-md-6 py-4">
					<div class="header-stripe writing-stripe"></div>
					<div class="min-height">
						<h3 class="school color-writing"> <strong>Luiss</strong> <br /> Writing</h3>
						<h3 class="school color-writing"><strong>Summer School</strong></h3>
						<p class="small blue-luiss my-3"> <strong>Per studenti dal primo al penultimo anno</strong> <br> Conoscere i fondamenti della sceneggiatura e della scrittura cinematografica, con particolare focus sulle serie televisive.</p>
					</div>
					<a class="call blue-luiss" title="" href="writing-summer-school.php">Vai al corso</a>
				</div>
			</div>
		</div>

	</section>

	<section class="third-section">
		<div class="container" style="border-bottom: solid 1px #003A70;">
			<div class="row">
				<div class="col-12 my-3 ">
					<h2 class="section blue-luiss">Focus on</h2>
				</div>
			</div>
			<div class="row blue-luiss">
				<div class="col-12 col-md-3 mb-5">
					<div class="img" style="background-image:url('imgs/home-page/summer-school-percorso-biennale.jpg');"></div>
					<div class="min-height">
						<h4 style="min-height: 4rem;">Calendario Corsi</h4>
						<p class="big">Tutti i percorsi estivi 2020.</p>
					</div>
					<a class="call blue-luiss" title="" href="calendario.php">Leggi di più</a>
				</div>
				<div class="col-12 col-md-3 mb-5">
					<div class="img" style="background-image:url('imgs/home-page/summer-school-giornate.jpg');"></div>
					<div class="min-height">
						<h4 style="min-height: 4rem;">Costi e Modalità di iscrizione</h4>
						<p class="big"><strong>Come partecipare alle Summer School 2020</strong></p>
					</div>
					<a class="call blue-luiss" title="" href="costi-iscrizioni.php">Leggi di più</a>
				</div>
				<div class="col-12 col-md-3 mb-5">
					<div class="img" style="background-image:url('imgs/home-page/summer-school-convenzioni.jpg');"></div>
					<div class="min-height">
						<h4 style="min-height: 4rem;">Open Day</h4>
						<p class="big">Riguarda l’ultimo <strong>Open day di sabato 30 maggio</strong></p>
					</div>
					<a class="call blue-luiss" title="" href="open-day.php">Leggi di più</a>
				</div>
				<div class="col-12 col-md-3 mb-5">
					<div class="img" style="background-image:url('imgs/home-page/summer-school-piccoli.jpg');"></div>
					<div class="min-height">
						<h4 style="min-height: 4rem;">Facilitazioni economiche</h4>
						<p class="big">Scopri le scuole superiori assegnatarie di borsa di studio, le convenzioni in essere e le iniziative di Welfare Aziendale che consentono di partecipare alle Summer School 2020 a condizioni agevolate.</p>
					</div>
					<a class="call blue-luiss" title="" href="convenzioni.php">Leggi di più</a>
				</div>
			</div>
		</div>
	</section>



	<div class="container header-stripe general-stripe"></div>
	<footer class="blue-luiss-bg py-3">
		<div class="container">
			<div class="row py-3 mb-3">
				<div class="col-6 col-md-2">
					<a href="https://www.luiss.it/contatti ">Contatti</a>
					<a href="https://www.luiss.it/dove-siamo ">Dove siamo</a>
					<a href="https://www.luiss.it/servizi-informatici ">Servizi informatici</a>
					<a href="http://ufficiostampa.luiss.it/ ">Ufficio stampa</a>

				</div>
				<div class="col-6 col-md-2">
					<a href="http://www.radioluiss.it/ ">Radio Luiss</a>
					<a href="http://sport.luiss.it/">Associazione sportiva</a>
					<a href="http://www.luisshop.it/">Luiss shop</a>
					<a href="https://www.luiss.it/informativa-sulla-privacy ">Privacy policy</a>
					<a href="https://www.luiss.it/credits ">Credits</a>
				</div>
				<div class="col-12 col-md-3 offset-md-5" id="luiss-logo-white"></div>
			</div>
			<p class="white x-small">© 2020 Luiss Guido Carli - Viale Pola 12, 00198 Roma, Italia - Centralino T 06 852251 - P.IVA 01067231009</p>
		</div>
	</footer>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html>
