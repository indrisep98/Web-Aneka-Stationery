<!DOCTYPE html>
<html lang="zxx">

	<?php
    include 'header.php';
    ?>

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index">Top Selling</a>
						<i>|</i>
					</li>
					<li>Tentang Kami</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- about -->
	<div class="welcome py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>T</span>entang
				<span>K</span>ami</h3>
			<!-- //tittle heading -->
			<div class="row">
			   
				<div class="col-lg-6 welcome-left">
				    
					<h3>Sejarah Perusahaan</h3>
					<br>
					 <img src="images/toko10.jpg" class="img-fluid1" style="width:400px; height:200px;" alt=" ">
					<h4 class="my-sm-3 my-2" style="text-align:justify;">ANEKA STATIONERY didirikan di kota Palembang, Sumatera Selatan pada bulan Maret 2014 dengan tujuan memberikan solusi perlengkapan alat tulis sekolah dan kantor yang lengkap sehingga bisa menjadi one stop school and stationery supply solution kepada pelanggan kami. Berlokasi di daerah Demang Lebar Daun yang merupakan wilayah yang sangat pesat berkembang dan padat penduduknya di kota Palembang, kami hadir dengan motto kami "We serve better, your satisfaction is our priority /Kami melayani lebih baik, kepuasan anda adalah prioritas kami". 
                    <br>
				        Bermula dari pangsa retail, perlahan kami bergerak maju masuk ke pangsa grosir dalam waktu 3 tahun beroperasi dan kini dalam 5 tahun kita telah  menjangkau lebih jauh hingga ke  daerah  Jambi, Bengkulu, Bangka.
                        Kami berhasil dan dipercaya menjadi exclusive partner untuk beberapa merk national dan international seperti DELI STATIONERY, ZEBRA, MAX, FOX dan STAEDTLER. 
                        Selain itu, kami juga memiliki tim sales yang berpengalaman baik di luar toko (outside sales) maupun di dalam toko (inside sales) untuk memastikan setiap kebutuhan pelanggan kami terjaga dan terpenuhi dengan baik. </h4>
				</div>
				<div class="col-lg-6 welcome-left welcome-right-top mt-lg-0 mt-sm-5 mt-4">

				   <h3> Milestone </h3>
                    <h4 class="my-sm-3 my-2">2014</h4><h4 style="text-align:justify;"> ANEKA STATIONERY PALEMBANG berdiri.</h4>
                    <h4 class="my-sm-3 my-2">2017</h4><h4 style="text-align:justify;"> ANEKA STATIONERY secara official menjadi distributor produk DELI STATIONERY yang merupakan salah satu perusahaan alat tulis sekolah dan kantor terbesar di dunia asal China.</h4>
                    <h4 class="my-sm-3 my-2">2018</h4><h4 style="text-align:justify;"> ANEKA STATIONERY menandatangani MOU dengan PT. ASABA sebagai official distributor produk ZEBRA, MAX, dan FOX untuk wilayah Sumatera Selatan dan sekitarnya.</h4>
                    <h4 class="my-sm-3 my-2">2019</h4><h4 style="text-align:justify;"> ANEKA STATIONERY diberikan MARKETING AWARD 2018 oleh PT. SOLO MURNI (selaku pemegang merk KIKY, OKEY, MERPATI, YOU) atas penjualan terbaik di tahun 2018 di tingkat SEMI GROSIR untuk kategori OFFICE SUPPLIES se-Indonesia.</h4>
                    <h4 class="my-sm-3 my-2">2019</h4><h4 style="text-align:justify;"> ANEKA STATIONERY melakukan perluasan usaha menjadi dari 450 meter persegi menjadi 650 meter persegi.</h4>
                    <h4 class="my-sm-3 my-2">2019</h4><h4 style="text-align:justify;"> ANEKA STATIONERY menjadi exclusive partner STAEDTLER untuk wilayah Sumatera Selatan dan sekitarnya.</h4>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->

	<?php
    include 'footer.php';
    ?>

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>

</html>