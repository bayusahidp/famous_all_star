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
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a class="icon solid fa-home" href={{ url('/') }}><span>Article</span></a></li>
								<li>
									<a href="#" class="icon fa-chart-bar"><span>Categories</span></a>
									<ul>
										@foreach ($categories as $item)
											<li><a href="#">{{ $item->name }}</a></li>
										@endforeach
									</ul>
								</li>
							</ul>
						</nav>

				</div>
			</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">

							<!-- Content -->
								<div id="content" class="col-8 col-12-medium">

									<!-- Post -->
										<article class="box post">
											<header>
												<h2><a href="#">{{ $article->title }}</a></h2>
											</header>
											<a href="#" class="image featured"><img src="{{ asset("image/$article->image") }}" alt="" /></a>
											<h3>{{ $article->short_description }}</h3><br>
											{!! $article->content !!}
										</article>

								</div>

							<!-- Sidebar -->
								<div id="sidebar" class="col-4 col-12-medium">

									<!-- Excerpts -->
										<section>
											<ul class="divided">

												@forelse ($article_serupa as $item)
												<li>
													<!-- Excerpt -->
													<article class="box excerpt">
														<header>
															<span class="date">{{ date('M Y', strtotime($item->created_at)) }}</span>
															<h3><a href="{{ route('detail', $item->slug) }}">{{ $item->title }}</a></h3>
														</header>
														{{ $item->short_description }}
													</article>
												</li>
												@empty
													
												@endforelse
											</ul>
										</section>

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