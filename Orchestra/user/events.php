<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/paymentfont.min.css">
	<link rel="stylesheet" href="css/slider-radio.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Orchestra">
	<title>Orchestra</title>

</head>
<body>
	<!-- header -->
	
	<!-- end header -->

	<!-- sidebar -->
	
	<!-- end sidebar -->

	<!-- player -->
	

	
	<!-- end player -->

	<!-- main content -->
	
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb bread">
						<li class="breadcrumb__item"><a href="index.php">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Events</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Events</h1>
					</div>
				</div>
				<!-- end title -->
			</div>

			<div class="row row--grid">
				<div class="col-12">
					<div class="main__filter">
						<form action="#" class="main__filter-search">
							<input type="text" placeholder="Date, place, etc.">
							<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg></button>
						</form>

						<div class="main__filter-wrap">
							<select class="main__select" name="genres">
								<option value="upcoming">Upcoming events</option>
								<option value="past">Past events</option>
								<option value="free">Free events</option>
							</select>
						</div>

						<div class="slider-radio">
							<input type="radio" name="grade" id="upcoming" checked="checked"><label for="upcoming">Upcoming</label>
							<input type="radio" name="grade" id="past"><label for="past">Past</label>
							<input type="radio" name="grade" id="free"><label for="free">Free</label>
						</div>
					</div>

					<div class="row row--grid">
						<div class="col-12 col-md-6 col-xl-4">
							<div class="event" data-bg="img/events/event1.jpg">
								<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg> Buy ticket</a>
								<span class="event__date">March 14, 2021</span>
								<span class="event__time">8:00 pm</span>
								<h3 class="event__title"><a href="event.php">Sorry Babushka</a></h3>
								<p class="event__address">1 East Plumb Branch St.Saint Petersburg, FL 33702</p>
							</div>
						</div>

						<div class="col-12 col-md-6 col-xl-4">
							<div class="event" data-bg="img/events/event2.jpg">
								<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg> Buy ticket</a>
								<span class="event__date">March 16, 2021</span>
								<span class="event__time">7:00 pm</span>
								<h3 class="event__title"><a href="event.php">Big Daddy</a></h3>
								<p class="event__address">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
							</div>
						</div>

						<div class="col-12 col-md-6 col-xl-4">
							<div class="event" data-bg="img/events/event3.jpg">
								<span class="event__out">Sold out</span>
								<span class="event__date">March 23, 2021</span>
								<span class="event__time">9:30 pm</span>
								<h3 class="event__title"><a href="event.php">Rocky Pub</a></h3>
								<p class="event__address">514 S. Magnolia St. Orlando, FL 32806</p>
							</div>
						</div>

						<div class="col-12 col-md-6 col-xl-4">
							<div class="event" data-bg="img/events/event4.jpg">
								<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg> Buy ticket</a>
								<span class="event__date">March 30, 2021</span>
								<span class="event__time">6:00 pm</span>
								<h3 class="event__title"><a href="event.php">Big Club</a></h3>
								<p class="event__address">123 6th St. Melbourne, FL 32904</p>
							</div>
						</div>

						<div class="col-12 col-md-6 col-xl-4">
							<div class="event" data-bg="img/events/event5.jpg">
								<span class="event__out">Sold out</span>
								<span class="event__date">March 30, 2021</span>
								<span class="event__time">10:00 pm</span>
								<h3 class="event__title"><a href="event.php">Big Daddy</a></h3>
								<p class="event__address">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
							</div>
						</div>

						<div class="col-12 col-md-6 col-xl-4">
							<div class="event" data-bg="img/events/event6.jpg">
								<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg> Buy ticket</a>
								<span class="event__date">March 31, 2021</span>
								<span class="event__time">6:30 pm</span>
								<h3 class="event__title"><a href="event.php">Rocky Pub</a></h3>
								<p class="event__address">514 S. Magnolia St. Orlando, FL 32806</p>
							</div>
						</div>
					</div>

					<div class="row row--grid">
						<div class="col-12">
							<button class="main__load" type="button">Load more</button>
						</div>
					</div>
				</div>
			</div>

			<!-- partners -->
			<div class="row">
				<div class="col-12">
					<div class="partners owl-carousel">
						<a href="#" class="partners__img">
							<img src="img/partners/3docean-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/activeden-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/audiojungle-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/codecanyon-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/photodune-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/themeforest-light-background.png" alt="">
						</a>
					</div>
				</div>
			</div>
			<!-- end partners -->
		</div>
	<!-- end main content -->

	<!-- footer -->
	
	<!-- end footer -->

	<!-- modal ticket -->
	
	<!-- end modal ticket -->

	<!-- modal info -->
	
	<!-- end modal info -->

	<!-- modal info -->
	
	<!-- end modal info -->

	<!-- modal info -->
	
	<!-- end modal info -->

	<!-- modal info -->
	
	<!-- end modal info -->

	<!-- JS -->
	    <script src="js/jquery-3.6.4.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/slider-radio.js"></script>
	<script src="js/jquery.inputmask.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/script.js"></script>

	<!-- <script>
			$(document).ready(function() {
			$(".sidebar__nav-item a").click(function() {
				// Clear các thẻ li có Class click cũ
				$(".sidebar__nav-item a").removeClass("sidebar__nav-link--active");
				// Thêm Class
				$(this).addClass("sidebar__nav-link--active");
			});
		});
    </script> -->
</body>

</html>