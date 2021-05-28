<!DOCTYPE html>
<html lang="en">
<head>
<title>{$settings.site_name}  - Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" href="styles/img/favicon.ico" type="image/x-icon"/>
<script>
		document.write("<link rel='stylesheet' href='styles/css/panel.css?v=" + Date.now() + "'>")
	</script>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body>
</a>
<!-- container -->
<div class="container mb-4">
	<!-- header -->
	<header id="cf-panel-header">
	<a href="?a=home" class="logo">
	<img src="styles/img/logo/logo.svg" height="42" width="250">
	</a>
	<button onclick="CoHeaderMenu('.left-sidebar')" class="btn btn-second toggle-menu float-right">
	<svg height="20" width="20">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="menu" width="100%" height="100%">
        <path d="M491.318 235.318H20.682C9.26 235.318 0 244.577 0 256s9.26 20.682 20.682 20.682h470.636c11.423 0 20.682-9.259 20.682-20.682 0-11.422-9.259-20.682-20.682-20.682zm0-156.879H20.682C9.26 78.439 0 87.699 0 99.121c0 11.422 9.26 20.682 20.682 20.682h470.636c11.423 0 20.682-9.26 20.682-20.682 0-11.422-9.259-20.682-20.682-20.682zm0 313.758H20.682C9.26 392.197 0 401.456 0 412.879s9.26 20.682 20.682 20.682h470.636c11.423 0 20.682-9.259 20.682-20.682s-9.259-20.682-20.682-20.682z"></path>
    </svg>
	</svg>
	</button>
	<div class="info d-none d-md-block">
		<ul>
			<li>
			<div class="phone float-right">
				<svg class="icon">
				<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 480.56 480.56" id="telephone" width="100%" height="100%">
				<path d="M365.354 317.9c-15.7-15.5-35.3-15.5-50.9 0-11.9 11.8-23.8 23.6-35.5 35.6-3.2 3.3-5.9 4-9.8 1.8-7.7-4.2-15.9-7.6-23.3-12.2-34.5-21.7-63.4-49.6-89-81-12.7-15.6-24-32.3-31.9-51.1-1.6-3.8-1.3-6.3 1.8-9.4 11.9-11.5 23.5-23.3 35.2-35.1 16.3-16.4 16.3-35.6-.1-52.1-9.3-9.4-18.6-18.6-27.9-28-9.6-9.6-19.1-19.3-28.8-28.8-15.7-15.3-35.3-15.3-50.9.1-12 11.8-23.5 23.9-35.7 35.5-11.3 10.7-17 23.8-18.2 39.1-1.9 24.9 4.2 48.4 12.8 71.3 17.6 47.4 44.4 89.5 76.9 128.1 43.9 52.2 96.3 93.5 157.6 123.3 27.6 13.4 56.2 23.7 87.3 25.4 21.4 1.2 40-4.2 54.9-20.9 10.2-11.4 21.7-21.8 32.5-32.7 16-16.2 16.1-35.8.2-51.8-19-19.1-38.1-38.1-57.2-57.1zm-19.1-79.7l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89-25.7-25.7-58.2-41.9-94-46.9l-5.2 37.1c27.7 3.9 52.9 16.4 72.8 36.3 18.8 18.8 31.1 42.6 35.6 68.8zm57.7-160.4c-42.6-42.6-96.5-69.5-156-77.8l-5.2 37.1c51.4 7.2 98 30.5 134.8 67.2 34.9 34.9 57.8 79 66.1 127.5l36.9-6.3c-9.7-56.2-36.2-107.2-76.6-147.7z"></path>
				</svg>
				</svg>support@{$settings.site_name}.com</a>
			</div>
			</li>
			<li>
			<div class="phone float-right">
				<a href="mailto:support@{$settings.site_name}.com">
				<svg class="icon">
				<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 13.52 8.2" id="mail" width="100%" height="100%">
				<path d="M12.3 0H1.22A1.22 1.22 0 0 0 0 1.22V7a1.22 1.22 0 0 0 1.22 1.2H12.3A1.22 1.22 0 0 0 13.52 7V1.22A1.22 1.22 0 0 0 12.3 0zm-.17 2l-4.5 2.46a2 2 0 0 1-2 0C1.35 2.08 1.26 2 1.22 2a.44.44 0 0 1-.09-.56.31.31 0 0 1 .46-.12c.15.1 1.79 1 4.38 2.42a1.41 1.41 0 0 0 1.38 0l4.5-2.45a.32.32 0 0 1 .45.19.43.43 0 0 1-.17.52z"></path>
				</svg>
				</svg>support@{$settings.site_name}.com</a>
			</div>
			</li>
		</ul>
	</div>
	</header>
	<!-- end header -->