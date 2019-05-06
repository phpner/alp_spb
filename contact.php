<?php
$h1 = "Контакты";
$title = "Контактные данные ООО Гиперион - услуги промышленного альпинизма ";
$des = "Контактные данные компании Гиперион - любые услуги промышленного альпинизма. Любые строительные работы на высоте.";
$key = "Гиперион услуги промышленного альпинизма строительные работы на высоте";
$alt1= "";
$alt2= "";
$alt3= "";
$alt4= "";
$active_menu = 2;
include 'top-page.php'?>
<div class="section">
    <div class="page-block">
        <h1><?php echo $h1;?></h1>
        <div class="item">
            <p><b>ООО "Гиперион"</b></p>
            <p><b>Телефон:</b> <a href="tel:+7 (812) 509-24-94">+7 (812) 509-24-94</a></p>
			<p><b>E-mail:</b> <a href="mailto:info@alp-spb.ru">info@alp-spb.ru</a></p>
            <p><b>Адрес:</b> 198095, Санкт-Петербург, ул. Ивана Черных, д.21, лит.А, помещение 6-Н, офис 5.</p><br>
            <div class="form-kontact">
                <form id="formContant" name="CALLBACK_MODAL_CONTACTY_PAGE" action="/message.php" method="POST" class="login-form"  enctype="multipart/form-data">
                    <div id="results-callback-modal">

                        <div class="alert alert-danger" id="beforesend-callback-modal">
                            Пожалуйста заполните все поля.
                        </div>

                        <div class="alert alert-danger" id="error-callback-modal">
                            Ошибка отправки формы.
                        </div>
                        <div class="alert alert-success" id="success-callback-modal">
                            Спасибо, ждите звонка.
                        </div>
                    </div>
                    <div class="clearfix"><img src="/images/loading.gif" alt="Загрузка" id="form-loading-callback-modal" class="pull-right" /></div>
                    <input type="hidden" name="CALLBACK_MODAL[SITE_ID]" value="s1" />
                    <input type="hidden" name="CALLBACK_MODAL[TITLE]" value="Обратный звонок" />
                    <div class="form-group has-feedback">
                        <label class="control-label">Как к Вам обращаться?</label>
                        <input type="text" name="name" placeholder="Имя" class="form-control req">
                        <i class="fa fa-user form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label class="control-label">Телефон для связи</label>
                        <input type="tel" name="phone" pattern="(([ ]*[\+]?[ ]*\d{1,5})[ ]*[\-]?[ ]*)?(\(?\d{1,5}\)?[ ]*[\-]?[ ]*)?[\d\- ]{5,13}" placeholder="Телефон" class="form-control req phone-mask--js">
                        <i class="fa fa-phone form-control-feedback"></i>
                    </div>
                    <div id="photo_block-contact">
                        <input type="file" name="image_file[0]" size="30" class="ofile">
                        <input type="file" name="image_file[1]" size="30" class="ofile">
                        <input type="file" name="image_file[2]" size="30" class="ofile">
                    </div>
                    <a id="photo_block_button" href="#" onClick="addPhoto(); return false">Ещё фото</a>
                    <button type="submit" class="btn btn-group btn-default btn-sm ">Заказать звонок</button>
                </form>
            </div>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A84cb2234ea1bc11444c84e82e43d23d8d7bc43d618380560286a192cdc1edbf4&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script><br><br>
			<p><b>Реквизиты:</b></p>
			<p>Общество с ограниченной ответственностью "Гиперион"
			ОГРН 1167847379150<br>
			ИНН 7810615767<br>
			КПП 780501001<br>
			ОКАТО 40276000000<br>
			ОКТМО 40339000000<br>
			ОКПО 04737134<br>
			Юридический адрес: 198095, Санкт-Петербург, ул. Ивана Черных, д.21, лит.А, помещение 6-Н, офис 5.<br>
			Расчетный счет 40702 810 0 3248 0000468 Филиал "Санкт-Петербургский" АО "АЛЬФА-БАНК"<br>
			Кор. Счет 30101 810 6 0000 0000786<br>
			БИК 044030786</p>
        </div>
    </div>
</div>
<script>
    var lastPhotoNum = 2;
    function addPhoto(){
        lastPhotoNum++;
        $('#photo_block-contact').append('<input type="file" name="image_file['+lastPhotoNum+']" size="30" class="ofile" />');
        if (lastPhotoNum>=6)
            $('#photo_block_button').hide();
    }

</script>

<?php include 'footer-page.php'?>
