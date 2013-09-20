
<div id="footer">
		
		<div class="container">
		
			<div class="row">
				
				<div class="grid-4">
					<h2>Инжиниринг-Урал.рф</h2>
				</div> 				
				
				<div class="grid-4">
						
					<h3><span class="slash">//</span> Свяжитесь с нами</h3>
					
					<h3>+7 (343) 349-53-37</h3>

					<p>Вас заинтересовала наша продукция?<br />Менеджеры компании
					будут рады ответить на ваши вопросы!</p>

					<p>Также вы можете оставить заявку, и наши менеджеры сами
					свяжутся с вами.</p>

				</div>

				<div class="grid-4">

					<h3><span class="slash">//</span> Оставить заявку</h3>

					<form action="<?php echo base_url();?>sendmail" method="post">  

                        <fieldset>
                            <div class="clearfix">
                                <label for="name"><span>Имя</span></label>
                                <div class="input">
                                    <input tabindex="1" size="18" id="inputName" name="name" type="text" value="">
                                </div>
                            </div>

                            <div class="clearfix">
                                <label for="email"><span>Телефон</span></label>
                                <div class="input">
                                    <input tabindex="2" size="25" id="inputPhone" name="email" type="text" value="" class="input-xlarge">
                                </div>
                            </div>                          
                            
                            <div class="clearfix">
                                <label for="message"><span>Сообщение</span></label>
                                <div class="input">
                                    <textarea tabindex="3" class="input-xlarge" id="inputMessage" name="body" rows="7"></textarea>
                                </div>
                            </div>
                            
                            <div class="actions">
                                <button tabindex="3" type="submit" class="btn btn-warning btn-large">Отправить</button>
                            </div>
                        </fieldset>

                    </form>

				</div>
				
			</div>
			
		</div>
		
	</div>	
	
	<div id="copyright">
		
		<div class="container">
			
			<div class="row">
			
				<div id="rights" class="grid-4">
				© 2013 Инжиниринг-Урал.рф
				</div>
				
				<div id="totop" class="grid-8">
					Разработка и продвижение сайта - <a href="http://stellunger.ru">Бюро интернет маркетинга "Штеллунгер"</a>
				</div> <!-- /grid-6 -->
				
			</div> <!-- /row -->
			
		</div> <!-- /container -->
			
	</div> <!-- /copyright -->
	
</div> <!-- /wrapper -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>

<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/focus.js"></script>

<script>

$(function () {
	
	$('#masthead-carousel').carousel ({ interval: false });
	
});

</script>
  </body>
</html>