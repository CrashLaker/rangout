<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Rangout</title>
		<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
		<link rel="stylesheet" href="themes/Bootstrap.css">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile.structure-1.4.0.min.css" />
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
		<link rel="stylesheet" href="rangout.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
		<script src="rangout.js"></script>
	</head>
	<body>
		<div data-role="page" data-theme="a" style="padding-top:90px;">
			<div style="position:fixed;z-index:1000;top:0;width:100%;left:0;" data-role="header" data-position="inline">
				<h1 style="background:url(./so_logo.png); background-repeat:no-repeat; background-size:35px; background-position:left center;padding-left:35px; line-height:50px; width:70px;line-height:20px;margin:auto;">Rangout</h1>
				<div data-role="navbar">
					<ul>
						<?php
							$home = ""; $listar = ""; $vendedor = ""; $pedido = "";
							if (!isset($_GET["page"])) {$page = "home"; $home = 'class="ui-btn-active"';}
							else if ($_GET["page"] == "home") {$page="home"; $home = 'class="ui-btn-active"';}
							else if ($_GET["page"] == "listar") {$page="listar"; $listar = 'class="ui-btn-active"';}
							else if ($_GET["page"] == "pedido") {$page="pedido"; $pedido = 'class="ui-btn-active"';}
							else if ($_GET["page"] == "vendedor") {$page="vendedor"; $vendedor = 'class="ui-btn-active"';}
						?>
						<li><a href="./index.php?page=home" data-icon="home" <?php echo $home; ?>>Home</a></li>
						<li><a href="./index.php?page=listar" data-icon="grid" <?php echo $listar; ?>>Listar Vendedores</a></li>
						<li><a href="./index.php?page=pedido" data-icon="shop" <?php echo $pedido; ?>>Pedidos</a></li>
						<li><a href="./index.php?page=vendedor" data-icon="location" <?php echo $vendedor; ?>>Quer ser um vendedor?</a></li>
						<!--<li><a href="./listviews.html" data-icon="grid">Lists</a></li>
						<li><a href="./nav.html" data-icon="search">Nav</a></li>
						<li><a href="./forms.html" data-icon="gear">Forms</a></li>-->
					</ul>
				</div>
			</div>
			<div data-role="content" data-theme="a">
				<!--
				<a href="https://github.com/commadelimited/jQuery-Mobile-Bootstrap-Theme" data-role="button" data-icon="star">Get the code</a>
				-->
			<?php include("./".$page.".php");?>
			</div>
		</div>
		<script src="rangout-last.js"></script>
	</body>
</html>
