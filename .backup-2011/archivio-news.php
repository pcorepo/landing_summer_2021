<?php 

require_once 'getDataFromGoogle.php';
$archivio = array_reverse(get_archivio());
// $archivio = get_all_news();

?>
<html>

<head>
	<title>Archivio News | Luiss Summer School 2020</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="La NeWorld è una scuola estiva pensata per gli studenti che frequentano i primi due anni di scuola superiore. I suoi contenuti ruotano intorno al futuro prossimo e agli scenari che gli adulti di domani si troveranno a fronteggiare.">
	<meta name="author" content="Luiss Guido Carli">
	<meta name="image" content="https://landing.luiss.it/summer-school-2021/imgs/schools/summer-school-neworld.jpg">
	<meta http-equiv="Cache-control" content="public">

	<!-- METATAGS -->
	<meta property="og:title" content="Luiss Summer School 2020">
	<meta property="og:description" content="La NeWorld è una scuola estiva pensata per gli studenti che frequentano i primi due anni di scuola superiore. I suoi contenuti ruotano intorno al futuro prossimo e agli scenari che gli adulti di domani si troveranno a fronteggiare.">
	<meta property="og:image" content="https://landing.luiss.it/summer-school-2021/imgs/schools/summer-school-neworld.jpg">
	<meta property="og:url" content="http://www.luiss.it/summer-school-2020">

	<meta name="twitter:title" content="Luiss Summer School 2020">
	<meta name="twitter:description" content="La NeWorld è una scuola estiva pensata per gli studenti che frequentano i primi due anni di scuola superiore. I suoi contenuti ruotano intorno al futuro prossimo e agli scenari che gli adulti di domani si troveranno a fronteggiare.">
	<meta name="twitter:image" content="https://landing.luiss.it/summer-school-2021/imgs/schools/summer-school-neworld.jpg">
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

!function(f,b,e,v,n,t,s)

{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};

if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];

s.parentNode.insertBefore(t,s)}(window, document,'script',

'https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1115479755284165');

fbq('track', 'PageView');

</script>

<noscript><img height="1" width="1" style="display:none"

src="https://www.facebook.com/tr?id=1115479755284165&ev=PageView&noscript=1"

/></noscript>

<!-- End Facebook Pixel Code -->


</head>

<body>

	<?php require('header.php'); ?>

	<section class="fourth-section">
		<div class="container">
			<div class="row">
				<div class="col-12 my-3 ">
					<h2 class="section blue-luiss">News</h2>
				</div>
			</div>
			<div id="news" class="row blue-luiss">

				<?php foreach($archivio as $news): ?>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 border-0 my-4">
						<p><i class="fal fa-exclamation-circle"></i></p>
						<!-- <div class="img" style="background-image:url('https://drive.google.com/uc?export=view&id=<?php echo $news['id_immagine'] ?>');"></div> -->
						<div class="min-height">
							<p class="mb-1"><?php echo $news['data_di_pubblicazione'] ?></p>
							<h4><?php echo $news['titolo'] ?></h4>
							<br>
							<!-- <p class="big"><?php echo $news['contenuto'] ?></p> -->
						</div>
						<a class="call red-news" style="position:absolute; bottom: 0; font-size:20px;" title="" href="news.php?uuid=<?php echo $news['uuid'] ?>" target="_blank">Leggi di più <i class="fas fa-arrow-right"></i></a>
					</div>
				<?php endforeach; ?>
				
		

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
	<script src="lightbox/ekko-lightbox.min.js"></script>
	<script src="js/main.js"></script>

	<script>
		$(document).ready(function() {
			/* Get iframe src attribute value i.e. YouTube video url
			and store it in a variable */
			var url = $("#stickyvideo").attr('src');

			/* Remove iframe src attribute on page load to
			prevent autoplay in background */
			$("#stickyvideo").attr('src', '');

			/* Assign the initially stored url back to the iframe src
    attribute when modal is displayed */
			$("#myModal").on('shown.bs.modal', function() {
				$("#stickyvideo").attr('src', url);
			});

			/* Assign empty url value to the iframe src attribute when
			modal hide, which stop the video playing */
			$("#myModal").on('hide.bs.modal', function() {
				$("#stickyvideo").attr('src', '');
			});
		});

	</script>


</body>

</html>
