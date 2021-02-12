<!DOCTYPE HTML>
<html>
	<head>
		<title>Famous All Star</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href={{ asset('assets/css/main.css') }} />
		<link rel="stylesheet" href={{ asset('assets/css/load-more-button.css') }} />
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">

						<!-- Logo -->
							<h1 id="logo"><a href={{ url('/') }}>{{ $category->name }}</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a class="icon solid fa-home" href={{ url('/') }}><span>Article</span></a></li>
									<li class="active">
										<a href="#" class="icon fa-chart-bar"><span>Categories</span></a>
										<ul>
											@foreach ($categories as $item)
												<li><a href="{{ route('showCategory', $item->slug) }}">{{ $item->name }}</a></li>
											@endforeach
										</ul>
									</li>
								</ul>
							</nav>

					</div>
				</section>

			<!-- Features -->
				<section id="features">
					<div class="container">
						<div class="interior container clearfix">
							<div class="row">

								@foreach ($article as $item)
								<div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox" style="display: none;">
									<div class="item">
										<a href="{{ route('detail', $item->slug) }}">
											<img src="{{ asset("image/$item->image") }}">
										</a>
										<div class="blogTxt">
											<div class="blogCategory">
												<a href="/">{{ $category->name }}</a>
											</div>
											<a href="{{ route('detail', $item->slug) }}">
												<h2 style="color: black;">{{ $item->title }}</h2>
											</a>
											<p class="post_intro hidden-xs">{{ $item->short_description }}</p>
										</div>
									</div>
								</div>
									
								@endforeach

								
								<div id="loadMore" style="">
									<a href="#">Load More</a>
								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<section id="footer">
					<div id="" class="container">
						<ul class="links">
							<li>&copy; Untitled. All rights reserved.</li><li>Made By: <a href="#">Cahyo Bayu</a></li>
						</ul>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src={{ asset('assets/js/jquery.min.js') }}></script>
			<script src={{ asset('assets/js/jquery.dropotron.min.js') }}></script>
			<script src={{ asset('assets/js/browser.min.js') }}></script>
			<script src={{ asset('assets/js/breakpoints.min.js') }}></script>
			<script src={{ asset('assets/js/util.js') }}></script>
			<script src={{ asset('assets/js/main.js') }}></script>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

			<script type="text/javascript">
				$( document ).ready(function () {
					$(".moreBox").slice(0, 3).show();
						if ($(".blogBox:hidden").length != 0) {
							$("#loadMore").show();
						}   
						$("#loadMore").on('click', function (e) {
							e.preventDefault();
							$(".moreBox:hidden").slice(0, 3).slideDown();
							if ($(".moreBox:hidden").length == 0) {
								$("#loadMore").fadeOut('slow');
							}
						});
					});
			</script>

	</body>
</html>