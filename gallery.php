<?php include 'header.php'; ?>
<style>
	#Gallery {
		padding-top: 0px;
		max-width: 1500px;
		margin-left: auto;
		margin-right: auto;
	}

	.gallery-item {
		float: left;
		position: relative;
		width: 20%;
		padding-bottom: 14%;
	}

	.gallery-item a {
		position: absolute;
		left: 10px;
		right: 10px;
		top: 10px;
		bottom: 10px;
		overflow: hidden;
	}

	.gallery-item a img {
		width: 100%;
	}

	@media only screen and (max-width:480px) {

		/* Smartphone view: 1 tile */
		.gallery-item {
			width: 100%;
			padding-bottom: 100%;
		}
	}

	@media only screen and (max-width:650px) and (min-width:481px) {

		/* Tablet view: 2 tiles */
		.gallery-item {
			width: 50%;
			padding-bottom: 33.3%;
		}
	}

	@media only screen and (max-width:1050px) and (min-width:651px) {

		/* Small desktop / ipad view: 3 tiles */
		.gallery-item {
			width: 33.3%;
			padding-bottom: 23%;
		}
	}

	@media only screen and (max-width:1290px) and (min-width:1051px) {

		/* Medium desktop: 4 tiles */
		.gallery-item {
			width: 25%;
			padding-bottom: 17%;
		}
	}



	/* Directly from:
http://photoswipe.com/latest/photoswipe.css
*/
	body.ps-active {
		-webkit-text-size-adjust: none;
	}

	body.ps-active * {
		-webkit-tap-highlight-color: rgba(255, 255, 255, 0);
	}

	body.ps-active *:focus {
		outline: 0;
	}


	/* Document overlay */
	div.ps-document-overlay {
		background: #000;
	}


	/* Viewport */
	div.ps-viewport {
		background: #000;
		cursor: pointer;
	}


	/* Zoom/pan/rotate layer */
	div.ps-zoom-pan-rotate {
		background: #000;
	}


	/* Slider */
	div.ps-slider-item-loading {
		background: url(http://abvichico.com/images/photoswipe/photoswipe-loader.gif) no-repeat center center;
	}


	/* Caption */
	div.ps-caption {
		background: #000000;
		background: -moz-linear-gradient(top, #303130 0%, #000101 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #303130), color-stop(100%, #000101));
		border-bottom: 1px solid #42403f;
		color: #ffffff;
		font-size: 13px;
		font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
		text-align: center;
	}

	div.ps-caption-bottom {
		border-top: 1px solid #42403f;
		border-bottom: none;
	}

	div.ps-caption-content {
		padding: 13px;
	}


	/* Toolbar */
	div.ps-toolbar {
		background: #000000;
		background: -moz-linear-gradient(top, #303130 0%, #000101 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #303130), color-stop(100%, #000101));
		border-top: 1px solid #42403f;
		color: #ffffff;
		font-size: 13px;
		font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
		text-align: center;
		height: 44px;
		display: table;
		table-layout: fixed;
	}

	div.ps-toolbar-top {
		border-bottom: 1px solid #42403f;
		border-top: none;
	}

	div.ps-toolbar-close,
	div.ps-toolbar-previous,
	div.ps-toolbar-next,
	div.ps-toolbar-play {
		cursor: pointer;
		display: table-cell;
	}

	div.ps-toolbar div div.ps-toolbar-content {
		width: 44px;
		height: 44px;
		margin: 0 auto 0;
		background-image: url(http://abvichico.com/images/photoswipe/photoswipe-icons.png);
		background-repeat: no-repeat;
	}

	div.ps-toolbar-close div.ps-toolbar-content {
		background-position: 0 0;
	}

	div.ps-toolbar-previous div.ps-toolbar-content {
		background-position: -44px 0;
	}

	div.ps-toolbar-previous-disabled div.ps-toolbar-content {
		background-position: -44px -44px;
	}

	div.ps-toolbar-next div.ps-toolbar-content {
		background-position: -132px 0;
	}

	div.ps-toolbar-next-disabled div.ps-toolbar-content {
		background-position: -132px -44px;
	}

	div.ps-toolbar-play div.ps-toolbar-content {
		background-position: -88px 0;
	}

	/* Hi-res retina display */
	@media only screen and (-webkit-min-device-pixel-ratio: 2) {
		div.ps-toolbar div div.ps-toolbar-content {
			-webkit-background-size: 176px 88px;
			background-image: url(http://abvichico.com/images/photoswipe/photoswipe-icons@2x.png);
		}
	}
</style>
<script>
	document.addEventListener('DOMContentLoaded', function () {
		Code.photoSwipe('a', '#Gallery', { captionAndToolbarHideOnSwipe: false });
	}, false);
</script>
<body
	class="page-template page-template-tmp-page page-template-tmp-page-php page page-id-243 menu-transperant wpb-js-composer js-comp-ver-6.0.4 vc_responsive">



	<a href="#site-content" data-type="section-switch" class="return-to-top"><i class="fa fa-chevron-up"></i></a>


	<div id="site-content" class="site">

		<?php include 'menu.php'; ?>

		<section class="page-banner">
			<div class="banner-top" data-bg-image="images/le7.jpg">
				<div class="overlay"></div>

				<div class="container">
					<div class="page-banner-title">
						<h1 class="title">Gallery</h1>

						<p>See our memories</p>
					</div>
					<!-- /.banner-title -->
				</div><!-- /.container -->

			</div><!-- /.banner-top -->
		</section><!-- /.page_header -->

		<div id="content" class="site-content" style="padding:5em 0;padding-top:0 !important">

			<script>
				document.addEventListener('DOMContentLoaded', function () {
					Code.photoSwipe('a', '#Gallery', { captionAndToolbarHideOnSwipe: false });
				}, false);
			</script>

			<div id="Gallery">
				<br>
				<?php
				include 'connection.php';
				$sql="select * from gallery";
				$result=mysqli_query($connection,$sql);
				if($result){
					while($row=$result->fetch_assoc()){
						$photo=$row['photo'];
						$name=$row['name'];
						 ?>
						<div class="gallery-item" style="margin-top:0em">
							<a href="images/uploads/<?php echo $photo; ?>"><img src="images/uploads/<?php echo $photo; ?>" alt="<?php echo $name; ?>" /></a>
						</div>
				<?php
					}
				}
				 ?>
				 <div class="clearfix"></div>
			</div>

			<!--end #Gallery-->

		</div><!-- #content -->


<?php include 'footer.php'; ?>
