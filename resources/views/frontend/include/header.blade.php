
<header class="">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" style="padding-left:-30%;" href="index.html">
					<h2 style="margin-left: -50%;" > ChithoMitho<em>.</em></h2>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-it
						em active"  >
							<a class="nav-link" href="#home">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#menu">menu</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#team">Partner</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#service">services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact Us</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href=""><i style="font-size: 22px; color: #fb6e14" class="fas fa-cart-plus">(0)</a></i>
						</li>
						@if (Route::has('login'))

						@auth
						<li>
							<x-app-layout>

							</x-app-layout>
						</li>
						@else
						<li class="nav-item"> <a href="{{ route('login') }}" class="nav-link">Log in</a></li>

						@if (Route::has('register'))
						<li class="nav-item"><a href="{{ route('register') }}" class="nav-link ">Register</a></li>
						@endif
						@endauth

						@endif
						</li>

					</ul>
				</div>
			</div>
		</nav>
	</header>