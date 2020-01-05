
<!DOCTYPE html>
<html lang="zxx">

<?php
    include 'header.php';

    ?>

	<!-- banner -->
	<div id="carouselExampleIndicators"  data-interval="3000" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">
							<span>Toko</span><br>Aneka Stationery
							</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p></p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">
								Menjual Produk ATK <br> <span>Grosir dan Eceran</span>
							</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<h3>Menjual Produk <br> <span>ATK Terlengkap dan Termurah</span>
							</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item4">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Dapat dipesan melalui</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">
								<span>Telepon atau  Langsung ke Toko</span>
							</h3>
							
						</div>
					</div>
				</div>
			</div>
		
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
</div>
</div>
	<!-- //banner -->

		
								<div class="logo-brand top-brand" style="margin-bottom: -20px;">
									<img src="images/top-brand.png" alt="">
								</div>
							

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				</h3>
					<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
								<span>D</span>iskon
								<span>H</span>ari
								<span>I</span>ni</h3>

							<div class="row">
								<?php
require "koneksi.php";
 $sql="SELECT * FROM produk WHERE status = 'Diskon';";
$proses=mysqli_query($koneksi, $sql);
?>			
<?php
while($data=mysqli_fetch_array($proses)){
?>
								<div class="col-md-4 product-men mt-5">

									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img style="width:300px; height:200px;" src="admin/produk/<?php echo $data['gambar'];?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single?id_produk=<?php echo $data['id_produk']; ?>" class="link-product-add-cart">Detail Produk</a>
												</div>
											</div>
										</div>
										<span class="product-new-top">Diskon</span>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single?id_produk=<?php echo $data['id_produk']; ?>"><?php echo $data['nama_produk'];?></a>
											</h4>
											<div class="info-product-price">
												<span class="item_price">Rp. <?php echo $data['harga_diskon'];?>,-</span>
												<del>Rp. <?php echo $data['harga_awal'];?>,-</del>
											</div>
										</div>
									</div>
								</div>
								<?php
 }
?>
							</div>
							</div>
					<!-- //second section -->
			<!-- //tittle heading -->
				<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
								<span>P</span>roduk
								<span>T</span>erlaris</h3>

							<div class="row">
				<!-- product left -->
						<!-- first section -->
<?php
require "koneksi.php";
 $sql="SELECT * FROM produk WHERE status = 'Terlaris';";
$proses=mysqli_query($koneksi, $sql);
?>			
<?php
while($data=mysqli_fetch_array($proses)){
?>								
								
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img style="width:300px; height:200px;" src="admin/produk/<?php echo $data['gambar'];?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single?id_produk=<?php echo $data['id_produk']; ?>" class="link-product-add-cart">Detail Produk</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single?id_produk=<?php echo $data['id_produk']; ?>"><?php echo $data['nama_produk'];?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">Rp. <?php echo $data['harga_awal'];?>,-</span>
											</div>

										</div>
									</div>
								</div>
<?php
 }
?>
								
									</div>
								</div>
			

						<!-- //first section -->
						<!-- second section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
								<span>P</span>roduk
								<span>T</span>erbaru</h3>
							<div class="row">
								<?php
require "koneksi.php";
 $sql="SELECT * FROM produk WHERE status = 'Terbaru';";
$proses=mysqli_query($koneksi, $sql);
?>			
<?php
while($data=mysqli_fetch_array($proses)){
?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img style="width:300px; height:200px;" src="admin/produk/<?php echo $data['gambar'];?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="admin/produk/uploads/<?php echo $data['gambar'];?>" class="link-product-add-cart">Detail Produk</a>
												</div>
											</div>
										</div>
										<span class="product-new-top">Baru</span>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="admin/produk/uploads/<?php echo $data['gambar'];?>"><?php echo $data['nama_produk'];?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">Rp. <?php echo $data['harga_awal'];?>,-</span>
											</div>
										</div>
									</div>
								</div>
								<?php
 }
?>
							</div>
						</div>
						
						<!-- //second section -->
						<!-- third section -->
						<div class="product-sec1 product-sec2 px-sm-5 px-3" >
							<div class="row" style="margin-left:50px;">
								<h3 class="col-md-4 effect-bg">Brand Kami</h3>
								<div class="col-md-8 bg-right-nut">
									<img src="images/brand.png" alt="">
								</div>
							</div>
						</div>
						<!-- //third section -->
					
					</div>
				</div>
				<!-- //product left -->

				
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->
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
	
	<!-- scroll seller -->
	<script src="js/scroll.js"></script>
	<!-- //scroll seller -->

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
				}, 10000);
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