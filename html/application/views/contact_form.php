            <hr class="row-divider" />

            <div class="row">

                <div class="grid-5">

                    <h2><span class="slash">//</span> Оставить заявку</h2>                  

                    <form action="<?php echo base_url();?>sendmail" method="post">  

                        <fieldset>
                            <div class="clearfix">
                                <label for="name"><span>Имя</span></label>
                                <div class="input">
                                    <input tabindex="1" size="18" id="inputName" name="name" type="text" value="">
                                </div>
                            </div>
                            
                            <div class="clearfix">
                                <label for="email"><span>Электронная почта</span></label>
                                <div class="input">
                                    <input tabindex="2" size="25" id="inputEmail" name="email" type="text" value="" class="input-xlarge">
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

                <div class="grid-3">
                    <br /><br /><br />
                    <p>Вы можете оставить заявку, и наши менеджеры сами свяжутся с вами.</p>
                </div>

            </div>