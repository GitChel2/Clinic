<?php

    
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

	include 'php/Db.php';

	$cards = getCard();

?>



<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Клиника</title>

	<link rel="icon" href="img/favicon.ico">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="style/slider.css">
<link rel="stylesheet" href="style/modal.css">

</head>
<body>

	<!-- HTML модального окна -->
	<div id="openModal" class="modal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h3 class="modal-title">Запись</h3>
	        <a href="#close" title="Close" class="close">×</a>
	      </div>
	      <div class="modal-body">    
	      		

  			<?php
				//проверяем, существуют ли переменные в массиве POST
				if(!isset($_POST['fio']) and !isset($_POST['telephone'])){
				 ?> 
					<form action="#" method="post">
						<input type="text" name="fio" placeholder="Укажите ФИО" required class="input__text">
						<input id="phone" type="text" name="telephone" placeholder="Укажите телефон" required class="input__text">
						<input type="submit" value="Отправить" class="btn__text">
					</form> 
			<?php
				} else {
				 
				 $fio = $_POST['fio'];
				 $telephone = $_POST['telephone'];
				 $fio = htmlspecialchars($fio);
				 $telephone = htmlspecialchars($telephone);
				 $fio = urldecode($fio);
				 $telephone = urldecode($telephone);
				 $fio = trim($fio);
				 $telephone = trim($telephone);
				 mail("", "Заявка с сайта", "ФИО:".$fio.". Телефон: ". $telephone ,"\r\n");
					Header("Location: /#successfully");
				}
			?>

	      </div>
	    </div>
	  </div>
	</div>

	<!-- HTML модального окна -->
	<div id="successfully" class="modal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h3 class="modal-title">Запись</h3>
	        <a href="#close" title="Close" class="close">×</a>
	      </div>
	      <div class="modal-body">    
	      	<p>Вы записались! Мы вам перезвоним</p>
	      </div>
	    </div>
	  </div>
	</div>

	
 


	
	<header class="header" id="header">
	    <div class="container">
	        <div class="header__inner">

	            <div class="logo">

	            	<button class="burger" type="button" id="navToggle">
                		<span class="burger__item">Menu</span>
            		</button>

	                <img src="img/logo/logo.png" alt="">
	                <div class="logo__text">
	                    <h2 class="logo__title">Ростов-на-Дону</h2>
	                    <h2 class="logo__subtitle">ул.Ленина, 2Б</h2>
	                </div>
	            </div>


	            <div class="additionally">
	            	<a href="#" class="link__social link">
	            		<img src="img/social/whatsapp.png" alt="">
	            	</a>
	            	<a href="tel:+78630000000" class="link">+7(863)000-00-00</a>
	            	<h2 class="city">Ростов-на-Дону</h2>
	            	<a href="#openModal" class="btn btn--green" data-scroll="#consultation">Записаться на прием</a>
	            </div>
	        
	        </div>
	        
	        <div class="nav__burger" id="nav__burger">
	        	<nav class="nav" id="burger__nav">
	                <a href="#" class="nav__link">О клинике</a>
	                <a href="#" class="nav__link">Услуги</a>
	                <a href="#" class="nav__link">Специалисты</a>
	                <a href="#" class="nav__link">Цены</a>
	                <a href="#" class="nav__link">Контакты</a>
	               
	                <a href="#openModal" class="btn btn--green">Записаться на прием</a>
	    		</nav>	
	        </div>
	    </div>
	</header>


	<div class="nav__container">
		<div class="container">
			<nav class="nav" id="nav" id="nav">
	                <a href="#" class="nav__link">О клинике</a>
	                <a href="#" class="nav__link">Услуги</a>
	                <a href="#" class="nav__link">Специалисты</a>
	                <a href="#" class="nav__link">Цены</a>
	                <a href="#" class="nav__link">Контакты</a>
	    	</nav>	
		</div>

	</div>


	<div class="block__one">
		<div class="container">
			<div class="block__one__content">
				<div class="block__one__text">

					
						<div class="block__one__text__layer">
							
							<div class="block__one__text__title">
								<p>
									Многопрофильная клиника для детей и взрослых
								</p>
								
							</div>

							<div class="block__one__text__subtitle">
								<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam, justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam ante ac quam. Maecenas urna purus, fermentum id.
								</p>
								
							</div>

						</div>

				</div>

				<div class="block__one__img">
					<img src="img/1.png" alt="" class="img">
				</div>

			</div>

		</div>
	</div>


	<div class="block__two">
		<div class="container">
			<div class="block__two__content">



				 <!-- Разметка слайдера -->
				  <div class="itcss">
				    <div class="itcss__wrapper">
				      <div class="itcss__items">


				      	<?php foreach ($cards as $card): ?>

				      	

			        	<!-- Элемент -->
				        <div class="itcss__item">
				        	<div class="card">
								<div class="information">


									<div class="information__layer">
										
								
										<div class="text">
											


											<div class="title">
												<span><?= $card['title'] ?></span>
											</div>

											<div class="for__whom">
												<span><?= $card['for__whom'] ?></span>
											</div>

											<div class="list">
												<ul class="list__ul">
													<li class="list__ul__li"><span><?= $card['li__1'] ?></span></li>
													<li class="list__ul__li"><span><?= $card['li__2'] ?></span></li>
													<li class="list__ul__li"><span><?= $card['li__3'] ?></span></li>
													<li class="list__ul__li"><span><?= $card['li__4'] ?></span></li>
												</ul>
											</div>

											<div class="price">
												<div class="new">
													Всего <span><?= $card['new'] ?></span> ₽
												</div>
												<div class="old">
													<span><del><?= $card['old'] ?> ₽</del></span>
												</div>
											</div>

											<div class="buttons">
												<a href="#openModal" class="btn btn--green first btn--long btn--green--small" data-scroll="#consultation">Записаться</a>
												<a href="#" class="btn btn--green--mod btn--long btn--green--small" data-scroll="#consultation">Подробнее</a>
											</div>

										</div>
									</div>



								</div>

								<div class="picture">
									<img src="img/2.jpg" alt="">
								</div>
							</div>
				        </div> <!-- Элемент -->

				    <?php endforeach; ?>    

				        
				        




				        

				      </div>
				    </div>





				    <button class="itcss__btn itcss__btn_prev" role="button" data-slide="prev"></button>
				    <button class="itcss__btn itcss__btn_next" role="button" data-slide="next"></button>
				  </div>




				
				

				

			</div>
		</div>
	</div>




	<footer class="footer">
       <div class="container">
	       	<div class="footer__content">
	       		<div class="logo__footer">
	       			<span>LOGO</span>
	       		</div>

	       		<div class="nav__footer">
	       			<nav class="nav" id="nav" id="nav">
		                <a href="#" class="nav__link" data-scroll="#banner">О клинике</a>
		                <a href="#" class="nav__link" data-scroll="#about">Услуги</a>
		                <a href="#" class="nav__link" data-scroll="#approch">Специалисты</a>
		                <a href="#" class="nav__link" data-scroll="#work">Цены</a>
		                <a href="#" class="nav__link" data-scroll="#work">Контакты</a>
	    			</nav>	
	       		</div>

	       		<div class="social">
	       			<a href="#" class="social__link">
	       				<img src="img/social/instagram.png" alt="">
	       			</a>
	       			<a href="#" class="social__link">
	       				<img src="img/social/whatsapp.png" alt="">
	       			</a>
	       			<a href="#" class="social__link">
	       				<img src="img/social/telegram.png" alt="">
	       			</a>
	       		</div>

	       	</div>
       </div>
    </footer>






	<!-- <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
    <script src="js/app.js"></script>

	<!-- Подключаем JS слайдера -->
	<script defer src="js/slider.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', () => {
		// активация слайдера
		new ItcSimpleSlider('.itcss', {
			loop: false,
			autoplay: false,
			swipe: true
			});
		});
	</script>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>

	<script>
		//Код jQuery, установливающий маску для ввода телефона элементу input
		//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
		$(function(){
		  //2. Получить элемент, к которому необходимо добавить маску
		  $("#phone").mask("8(999) 999-99-99");
		});
	</script>




</body>
</html>