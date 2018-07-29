<!DOCTYPE html>
<html>
<head>
	<title>Customer</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Admin Pageur</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle Navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav navbar-sidenav ml-auto" id="exampleAccordion">
					<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
						<a class="nav-link" href="customers">
							<i class="fa fa-fw fa-home"></i>
							<span class="nav-link-text">Customer</span>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
						<a class="nav-link" href="kategoris">
							<i class="fa fa-fw fa-home"></i>
							<span class="nav-link-text">Kategori</span>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Pelanggan">
						<a class="nav-link" href="barangs">
							<i class="fa fa-fw fa-table"></i>
							<span class="nav-link-text">Barang</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<h1 class="text-center">Selamat Datang</h1>

		@yield('content')
	</div>
</body>

<!-- javascript -->
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/popper.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
</html>