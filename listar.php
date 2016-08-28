

<style type="text/css">
#container{
	width:1150px;
	margin:auto;
}
#container2{
	width:628px;
	height:617px;
	margin:auto;
	display:none;
}
.rangout-box{
	border-radius:3px;
	border: 2px solid #212438;
	float:left;
	margin:10px;
	width:200px;
	padding-top:10px;
	height:170px;
	display:inline;
}

.rangout-box-pic{
	border: 1px solid #212438;
	overflow:hidden;
	background-size:contain;
	margin:auto;
	padding:5px;
	width:170px;
	height:100px;
}

.rangout-vendor{
	margin-left:10px;
	width:80px;
	height:40px;
	margin-top:5px;
	padding:3px;
	float:left;
}

.rangout-purchase{
	width:97px;
	height:40px;
	float:left;;
	margin-top:5px;
	position:relative;
}

.cookie{
	margin:0;padding:0;
	background-position:center center;
	background-repeat:no-repeat;
	width:15px;
	height:20px;
	padding-left:50px;
}

.rk1{
	background:url("./cookie1.png");
}
.rk2{
	background:url("./cookie2.png");
}
.rk3{
	background:url("./cookie3.png");
}
.rk4{
	background:url("./cookie4.png");
}
.rk5{
	background:url("./cookie5.png");
}

.rk1, .rk2, .rk3, .rk4, .rk5{
	background-repeat:no-repeat;
}

.location{
	margin:0;padding:0;
	clear:both;
	background:url("./location.png");
	background-size:20px;
	background-position:center center;
	background-repeat:no-repeat;
	width:15px;
	height:20px;
	padding-left:35px;
}

.fade{
	opacity:0.5;
}
</style>
<div data-role="fieldcontain">
        <label for="slider2">Modo mapa:</label>
        <select name="slider2" id="showmap" data-role="slider" onchange="showmap();">
                <option value="off">Off</option>
                <option value="on">On</option>
        </select>
</div>
<hr>
<div id="container">


<?php

$pic = array();

$pic[] = "http://home.popshi.com/upi/image/147168022457b80ee0a79d5.jpg";
$pic[] = "http://home.popshi.com/upi/image/147168338057b81b346d149.jpg";
$pic[] = "http://home.popshi.com/upi/image/147168348957b81ba14d051.jpg";
$pic[] = "http://home.popshi.com/upi/image/147168352557b81bc5deb6b.jpg";
$pic[] = "http://home.popshi.com/upi/image/147168353757b81bd1b70c8.jpg";
$pic[] = "http://home.popshi.com/upi/image/147168354957b81bdd2bc72.jpg";
$pic[] = "http://home.popshi.com/upi/image/147168356157b81be9cec72.jpg";
$pic[] = "http://home.popshi.com/upi/image/147168357357b81bf5e5da9.jpg";
$pic[] = "http://home.popshi.com/upi/image/147168358657b81c02e923c.jpg";

foreach($pic as $key=>$val){
?>

<div class="rangout-box">
	<div class="rangout-box-pic" style="background:url('<?php echo $pic[$key]; ?>');background-position:center center;"></div>
	<div class="rangout-vendor">
		<?php
			$rank = rand(1, 5);
		?>
		<p class="cookie rk<?php echo $rank; ?>"><?php echo $rank; ?>/5</p>
		<p class="location"><?php echo rand(100, 800); ?>m</p>
	</div>

	<div class="rangout-purchase">
		<a style="width:50px; heigth:18px; font-size:11px;" href="index.html" data-icon="shop" data-theme="d" class="ui-link ui-btn-right ui-btn ui-btn-d ui-icon-shop ui-btn-icon-left ui-shadow ui-corner-all" data-role="button" role="button">Comprar</a>
	</div>	
</div>

<?php
}
?>


</div>

<div id="container2">
	<img src="./map.png"/>
</div>
