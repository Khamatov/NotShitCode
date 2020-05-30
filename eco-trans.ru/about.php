
<?php


if (isset($_POST['submit'])){
    
    $height=$_POST['height'];
    $width=$_POST['width'];
    $long=$_POST['long'];
    $volume =  $height * $width * $long;
	if ($_POST['distance']>10 && $_POST['distance']<10000){
     $dist=$_POST['distance'];
     $mass=$_POST['mass'];
     $sum=$dist*2;
     $sum=$volume*2*$sum;
     $mass-=120;
     if($width>0){
      for($i=1;$i<=$mass;$i++){
          $sum+=7;
      }
    }
}

	
}





$echo=	"
<header>
<nav>
			<div class='row'>
				<!-- Keep within 1140px width -->
				<img src='resources/img/logo-white.svg'  class='logo'>
		
				<ul class='main-nav js--main-nav'>
					<li><a href='?use=about'>О НАС</a></li>
					<li><a href='?use=form'>ОФОРМИТЬ ЗАЯВКУ</a></li>
					<li><a href='?use=tracking'>ОТСЛЕЖИВАНИЕ ДОСТАВКИ</a></li>
					<li><a href='?use=branch'>ФИЛИАЛЫ</a></li>
					<li><a href='?use=test'>TEST</a></li>
				</ul>
				<a class='mobile-nav-icon js--nav-icon'><i class='ion-navicon-round'></i></a> <!-- No href -->
			</div>
		</nav>
		<div class='hero-text'>
			<h1> Транспортная компания<br>'ЭкоТранс' </h1>
			<a class='button' href='#'>Заказать сейчас</a>
		</div>
		<div class='calculate'>

<div class='forma' id='forma' action='?use=about#forma'>
<form method='post' >
<div class='row' >
<h3 style='color:white;font-size:18px;text-align:center'> Рассчитайте стоимость маршрута </h3>
   <p>Введите получившееся расстояние:</p>
	<input type='text'  name='distance' size='80'><br>
	<div class='gruz'>
	<div><p>Высота:</p>
	<input type='text' name='height' size='10'><br></div>
	<div><p>Ширина:</p>
	<input type='text' name='width'  size='10'><br></div>
	<div><p>Длина:</p>
	<input type='text'  name='long' size='10'><br></div>
	</div>
	<p>Вес:</p>
	<input type='text' name='mass' size='80'>
	<input type='submit' name='submit' size='80' value='РАССЧИТАТЬ' >
	</div>
</form>

</div>

		</header>
<!-- КАЛЬКУЛЯТОР МАРШРУТА -->
<section class='calc'>
<div class='row'  >
			<h2>Рассчитайте расстояние</h2>
		</div>
<div class='blkyrsb'>
<div class='blkyrs1b'>
</div>
<div class='blkyrs3b'>
<a class='blavtorsb' href='https://blogjquery.ru' target='_blank' title='Скрипты на jQuery, PHP, Joomla и Wordpress'>Создано в blogjquery.ru</a>
</div>

</div>
</section>

<script type='text/javascript' src='https://blogjquery.ru/wp-content/files/demo/pytcalkylator/pytcalkylator.php?cod=654897'></script>




<!-- Cities section-->

	<section  class='cities' id='cities'>
		<div class='row'>
			<h2>Мы работаем в 20 крупных городах России</h2>
		</div>
		
		<div class='row1'>
			<div class='cityBox'>
				<img src='resources/img/spb.jpg'>
				<h3>Санкт-Петербург</h3>
				
			</div>
			<div class='cityBox'>
				<img src='resources/img/vladvstk.jpg'>
				<h3>Владивосток</h3>
				
			</div>
			<div class='cityBox'>
				<img src='resources/img/msk.jpg'>
				<h3>Москва</h3>
				
			</div>
			<div class='cityBox'>
				<img src='resources/img/kzn.jpg'>
				<h3>Казань</h3>
				</div>
			</div>
	
		
		<div class='row1'>
			<div class='cityBox'>
				<img src='resources/img/ekb.jpg'>
				<h3>Екатеринбург</h3>
				
			</div>
			<div class='cityBox'>
				<img src='resources/img/nN.jpg'>
				<h3>Нижний новгород</h3>
				
			</div>
			<div class='cityBox'>
				<img src='resources/img/sochi.jpg'>
				<h3>Сочи</h3>
				
			</div>
			<div class='cityBox'>
				<img src='resources/img/cheb.jpg'>
				<h3>Чебоксары</h3>
				</div>
			</div>
	
	</section>

	<!-- Testimonials section -->

	<section class='testimonials'>
		<div class='row'>
			<h2>Мы работаем с такими крупными брендами, как</h2>
			<div class='row'>
				<div class='col span-1-of-3'>
					<blockquote>
						Я просто без ума от них
						<cite><img src='resources/img/customer-1.jpg' alt='Alberto Duncan'>Lamoda</cite>
					</blockquote>
				</div>
				<div class='col span-1-of-3'>
					<blockquote>
						Крутые ребята, я вам скажу
						<cite><img src='resources/img/customer-2.jpg' alt='Joana Silva'>Wildberres</cite>
					</blockquote>
				</div>
				<div class='col span-1-of-3'>
					<blockquote>
						Я обожаю эту компанию
						<cite><img src='resources/img/customer-3.jpg' alt='Milton Chapman'>Ozon</cite>
					</blockquote>
				</div>
			</div>
		</div>
	</section>





	<script src='//cdn.jsdelivr.net/respond/1.4.2/respond.min.js'></script>
	<script src='//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js'></script>
	<script src='//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js'></script>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
	<script src='vendors/js/jquery.waypoints.min.js'></script>
	<script src='resources/js/scripts.js'></script> <!-- Sticky nav -->
	<script src='http://maps.google.com/maps/api/js?sensor=true'></script>
	<script src='vendors/js/gmaps.js'></script>
</body>

</html>";




?>