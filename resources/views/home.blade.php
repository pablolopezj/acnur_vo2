<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container-fluid">
		<!-- section 1 -->
		<section class="section1">
			<div class="row">
				<div class="col-md v100" style="background: #756767;">
					<div class="row align-items-center v100">
						<div class="col"></div>
						<div class="col-md-9">
							<br>
							<img src="./images/logo.png" alt="Logo" class="logo">
							<br><br><br><br><br>
                            @include('texts.header')
							<a href="https://donate.unhcr.org/la/exilio-espanol/" target="_blank" class="btn btnQuieroAyudar">QUIERO AYUDAR A UN REFUGIADO</a>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<div class="col-md-7 v100 back-image-s1"></div>
			</div>
		</section>




	<!-- section 2 -->
	<section class="section2">
		<div class="row">
			<div class="col-md v100" >
					<div class="row align-items-left v100">
						<div class="col-md-2"></div>
							<div class="col-md-10">
								<div class="h50px">
									<h2 id="middle-header">@include('texts.middle_header')</h2>
								</div>
								<div class="content">
									<img src="./images/lupa_docs.png" alt="" style="max-width: 100%">
								</div>
							</div>
					</div>
			</div>
			<div class="col-md-7">
				<div class="col-md-10 ">
					<div class="content" id="middle-text">
									@include('texts.middle_text')
					</div>
				</div>
			</div>
		</div>
</section>







<!-- section laura -->

<section class="laura">
	<div class="row"  style="background: #928989;">

		<div class="col-md-1"></div>
			<div class="col-md-6">
				<div>
					<br><br><br><br><br>
						<h2 class="tituloS1 bodoni">Mi padre decía, 'no fui yo, fue México'</h2>

						<p align="right" style="margin-top: 15px;">
							<span class="txtSeparationNone txtBold">-----</span>
							<span class="nombreTitle">LAURA BOSQUES 98 AÑOS</span>
						</p>

												<br><br>
						<p align="justify">
							Contrario a lo que podría esperarse, cuando Laura describe a su padre, Gilberto Bosques, sus palabras son muy breves y transmiten una humildad que conmueve.
							Como Cónsul General de México en Marsella, Gilberto Bosques lideró la salida de miles
							españoles, judíos, alemanes y personas de diferentes nacionalidades que huían de la
							persecución y la guerra hacia el puerto de Veracruz. Les salvó la vida.
						</p>
						<p align="justify">
							A sus 98 años, Laura opina que su padre, un hombre al que describe como congruente y bueno, trabajador y disciplinado, simplemente cumplió con el rol que le tocó jugar en la
							historia. Ni más, ni menos.
						</p>
						<p align="justify">
							A sus 98 años, Laura opina que su padre, un hombre al que describe como congruente y bueno, trabajador y disciplinado, simplemente cumplió con el rol que le tocó jugar en la
							historia. Ni más, ni menos.
						</p>
						<p align="justify">
							A sus 98 años, Laura opina que su padre, un hombre al que describe como congruente y bueno, trabajador y disciplinado, simplemente cumplió con el rol que le tocó jugar en la
							historia. Ni más, ni menos.
						</p>
						<p align="justify">
							A sus 98 años, Laura opina que su padre, un hombre al que describe como congruente y bueno, trabajador y disciplinado, simplemente cumplió con el rol que le tocó jugar en la
							historia. Ni más, ni menos.
						</p>
					</div>
					<div align="left">
						<button class="btn btnVerMas" data-modal='modal10'>VER MÁS</button>
						<br><br><br><br><br><br>
					</div>

			</div>

			<div class="col-md v100" >
				<br><br><br><br><br><br>
					<div class="col-md-9">
							<img src="./images/s2img1.png" alt="" style="max-width: 100%">

					</div>

		  </div>

	</div>
</section>














		<!-- section 4 -->
		<section class="section3">
			<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="row">
					<!-- Titulo -->
					<div class="col colorCafetxt">
						<h3>TESTIMONIOS</h3>
						<div class="w-100"></div>
						<span class="txtSeparationNone txtBold" style="font-size: 1.5rem;">-----</span>
						<br><br>
					</div>
					<div class="w-100"></div>
					<div class="galery row" align="center">
						@desktop
						    <div class="col">
						@elsedesktop
						    <div class="col-12">
						@enddesktop

							<p class="colorCafetxt" style="margin-top: 15px;">
								<span class="txtSeparationNone txtBold">-----</span>
								<span class="nombreTitle">EMILIA CLARACO</span>
							</p>
							<div class="contentImg">
								<div class="overlay">
									<a href="#img1" class="btnVerMasImg" data-modal='modal01'>VER MÁS</a>
								</div>
								<img src="./images/galeria/thumbnails/01.png" alt="">
							</div>
						</div>
						@desktop
						    <div class="col">
						@elsedesktop
						    <div class="col-12">
						@enddesktop
							<p class="colorCafetxt" style="margin-top: 15px;">
								<span class="txtSeparationNone txtBold">-----</span>
								<span class="nombreTitle">ENRIQUE DALIAS</span>
							</p>
							<div class="contentImg">
								<div class="overlay">
									<a href="#img2" class="btnVerMasImg" data-modal='modal02'>VER MÁS</a>
								</div>
								<img src="./images/galeria/thumbnails/02.png" alt="">
							</div>
						</div>
						@desktop
						    <div class="col">
						@elsedesktop
						    <div class="col-12">
						@enddesktop
							<p class="colorCafetxt" style="margin-top: 15px;">
								<span class="txtSeparationNone txtBold">-----</span>
								<span class="nombreTitle">HELIOS ESTÉVEZ</span>
							</p>
							<div class="contentImg">
								<div class="overlay">
									<a href="#img3" class="btnVerMasImg" data-modal='modal03'>VER MÁS</a>
								</div>
								<img src="./images/galeria/thumbnails/03.png" alt="">
							</div>
						</div>
						@desktop
						    <div class="col">
						@elsedesktop
						    <div class="col-12">
						@enddesktop
							<p class="colorCafetxt" style="margin-top: 15px;">
								<span class="txtSeparationNone txtBold">-----</span>
								<span class="nombreTitle">LAURA BOSQUES</span>
							</p>
							<div class="contentImg">
								<div class="overlay">
									<a href="#img4" class="btnVerMasImg" data-modal='modal04'>VER MÁS</a>
								</div>
								<img src="./images/galeria/thumbnails/04.png" alt="">
							</div>
						</div>

						<div class="w-100"></div>

						@desktop
						    <div class="col">
						@elsedesktop
						    <div class="col-12">
						@enddesktop
							<p class="colorCafetxt" style="margin-top: 15px;">
								<span class="txtSeparationNone txtBold">-----</span>
								<span class="nombreTitle">LUCINDA URRUSTRI</span>
							</p>
							<div class="contentImg">
								<div class="overlay">
									<a href="#img5" class="btnVerMasImg" data-modal='modal05'>VER MÁS</a>
								</div>
								<img src="./images/galeria/thumbnails/05.png" alt="">
							</div>
						</div>
						@desktop
						    <div class="col">
						@elsedesktop
						    <div class="col-12">
						@enddesktop
							<p class="colorCafetxt" style="margin-top: 15px;">
								<span class="txtSeparationNone txtBold">-----</span>
								<span class="nombreTitle">PIEDAD SEMITIEL</span>
							</p>
							<div class="contentImg">
								<div class="overlay">
									<a href="#img6" class="btnVerMasImg" data-modal='modal06'>VER MÁS</a>
								</div>
								<img src="./images/galeria/thumbnails/06.png" alt="">
							</div>
						</div>
						@desktop
						    <div class="col">
						@elsedesktop
						    <div class="col-12">
						@enddesktop
							<p class="colorCafetxt" style="margin-top: 15px;">
								<span class="txtSeparationNone txtBold">-----</span>
								<span class="nombreTitle">RAFAEL URRUSTRI</span>
							</p>
							<div class="contentImg">
								<div class="overlay">
									<a href="#img7" class="btnVerMasImg" data-modal='modal07'>VER MÁS</a>
								</div>
								<img src="./images/galeria/thumbnails/07.png" alt="">
							</div>
						</div>
						@desktop
						    <div class="col">
						@elsedesktop
						    <div class="col-12">
						@enddesktop
							<p class="colorCafetxt" style="margin-top: 15px;">
								<span class="txtSeparationNone txtBold">-----</span>
								<span class="nombreTitle">VICTOR RIVERA</span>
							</p>
							<div class="contentImg">
								<div class="overlay">
									<a href="#img8" class="btnVerMasImg" data-modal='modal08'>VER MÁS</a>
								</div>
								<img src="./images/galeria/thumbnails/08.png" alt="">
							</div>
						</div>

					</div>
				</div>
				<div align="center" style="margin-top: 120px;">
					<br ><br ><br ><br >
					<a href="https://donate.unhcr.org/la-es/siria-arrival" target="_blank" class="btn btnQuieroAyudar" style="background: rgba(0,0,0,0.7)">QUIERO AYUDAR A UN REFUGIADO</a>
				</div>

				<div align="center" style="margin-top: 80px;">
					<img src="./images/logo.png" alt="logo" width="20%"/>
					<br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br >
					<br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br ><br >
				</div>

			</div>
				<div class="col-md-1"></div>
			</div>
		</section>
	</div>

	<!-- Modal -->
	<div class="modal1">
		<div class="container" style="position: relative;">
			<div class="row" style="margin-top: 30px;">
				<div class="col" align="left">
				</div>
			</div>

			<div class="btnCloseModal1">
				<img src="./images/modal/btnCloseModal.png" alt="">
			</div>

			<div class="w-100"></div>

			<div class="contenidoModal1">
				<div class="modal01 contentHidden">
                    @include('texts.enrique_dalias')
				</div>

				<div class="modal02 contentHidden">
                    @include('texts.enrique_dalias')
                </div>

                <div class="modal03 contentHidden">
                    @include('texts.helios_estevez')
				</div>

                <div class="modal04 contentHidden">
                    @include('texts.laura_bosques')
				</div>

                <div class="modal05 contentHidden">
					@include('texts.lucinda_uttustri')
				</div>

                <div class="modal06 contentHidden">
                    @include('texts.piedad_semitiel')
				</div>

                <div class="modal07 contentHidden">
                    @include('texts.rafael_urrustri')
                </div>
                <div class="modal08 contentHidden">
                    @include('texts.victor_rivera')
                </div>

                <div class="modal10 contentHidden">
                    @include('texts.section2')
                </div>

			</div>
		</div>
		<div id="footer"  style="background: #928989;">
			<br>
			<div class="row">

					<div class="col-md" >
						<p class="text-center">
							<a href="#">TODOS LOS DERECHOS RESERVADOS</A>
						</p>
					</div>
					<div class="col-md">
						<p class="text-center">
							<a href="#">TODOS LOS DERECHOS RESERVADOS</A>
						</p>
					</div>
					<div class="col-md">
						<p class="text-center">
							<a href="#">TODOS LOS DERECHOS RESERVADOS</A>
						</p>
					</div>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery.nicescroll.min.js"></script>

	<script type="text/javascript">

	   $( document ).ready(function() {
		    $("#middle-text").niceScroll();
		});

		$('.btnCloseModal1').on('click', function(){
			$('.modal1').hide();
		});


		$('.btnVerMasImg, .btnVerMas').on('click', function(){
			var modalToOpen = $(this).data('modal');
			$('.contentHidden').hide();
			$('.'+modalToOpen).show();

			var scrollTop =  $(window).scrollTop();
			$('.modal1').css('top', scrollTop + 'px' );
			$('.modal1').show();
		});
	</script>
</body>
</html>
