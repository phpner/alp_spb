<?php include  "./blocks/price-list.php"?>
<?php include  "./blocks/advantages-company.php"?>
<!--Портфолио компании-->
<?php include "./blocks/img-gallery-uslugy.php" ?>
<!--Комментарии-->
<?php include "./blocks/feedback.php" ?>
<!--Видео блок-->
<?php include "./blocks/video-block.php" ?>
<!--С кем мы работаем-->
<?php include "./blocks/we-work-with.php" ?>
<!--Наша команда профессионалов-->
<?php include "./blocks/our-team.php" ?>
<!--Почему выбирают нас-->
<?php include "./blocks/why-we.php" ?>
<!--Сила ветра-->
<?php include "./blocks/wind-force.php" ?>
<div class="container xref-block">
    <div class="row">
        <ul class="xref">
            <?php include $_SERVER[DOCUMENT_ROOT]."/xref.php"?>
        </ul>
    </div>
</div>
<!--Остались вопросы?-->
<?php include "./blocks/have_questions.php" ?>

<footer class="dark">
    <div class="subfooter">
        <div class="container">
            <div class="row flex-footer">
                <div class="col-md-5">
                    <div>
                        <p>© <?php echo date("Y");?> «Гиперион» - промышленный альпинизм в Санкт-Петербурге
                            <br>Все права защищены.
                        </p>
                        <br class="dell-br">
                        <br class="dell-br">
                        <p style="">Заполняя любую форму на сайте, вы соглашаетесь
                            <br>с <a style="text-decoration: underline;" href="local/assets/files/Scan_20180111_164835.pdf" target="_blank">политикой конфиденциальности</a>.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-1 subfooter__info">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="collapse navbar-collapse" id="navbar-collapse-2">
                            <ul class="nav navbar-nav">
                                <li><a href="/">Главная</a></li>
								<li><a href="about.php">О компании</a></li>
                                <li><a href="gallery.php">Фотогалерея</a></li>
								<li><a href="price.php">Цены</a></li>
                                <li><a href="contact.php">Контакты</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-5 col-md-6 adress">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> г. Санкт-Петербург, ул. Ивана Черных, д.21</p>
                    <p>
                        <i class="fa fa-phone" aria-hidden="true"></i> <a class="mgo-number-11523" href="tel:+78125092494">+7 (812) 509-24-94</a>
                    </p>
                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="info@alp-spb.ru">info@alp-spb.ru</a></p>
                </div>
                <div class="col-lg-5 col-md-6 hidden-sm">

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END page-wrapper-->
</div>
<div class="scrollToTop"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
<div class="modal fade FEEDBACK" tabindex="-1" role="dialog" aria-labelledby="FLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                <div style="font-weight:bold;" class="modal-title" id="FLabel">Задать вопрос</div>
            </div>
            <form name="FEEDBACK_MODAL" action="/message.php" method="POST" role="form">
                <input type="hidden" name="FEEDBACK_MODAL[SITE_ID]" value="s1" />
                <input type="hidden" name="FEEDBACK_MODAL[TITLE]" value="Задать вопрос" />
                <div class="modal-body">
                    <p><i class="icon-check"></i> Пожалуйста заполните все поля. Наш специалист свяжется с вами в ближайшее время.</p>
                    <div id="results-feedback-modal">
                        <div class="alert alert-danger" id="beforesend-feedback-modal">
                            Пожалуйста заполните все поля.
                        </div>
                        <div class="alert alert-danger" id="error-feedback-modal">
                            Ошибка отправки сообщения.
                        </div>
                        <div class="alert alert-success" id="success-feedback-modal">
                            Спасибо, ваше сообщение отправлено администрации сайта.
                        </div>
                    </div>
                    <img src="/images/loading.gif" alt="Загрузка" id="form-loading-feedback-modal" class="pull-right mb-10" />
                    <div class="clearfix"></div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control req" name="name" placeholder="Как к Вам обращаться?">
                        <i class="fa fa-user form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control req phone-mask--js" name="phone" placeholder="Телефон для связи">
                        <i class="fa fa-phone form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <textarea rows="4" class="form-control req" name="text" placeholder="Ваш вопрос"></textarea>
                        <i class="fa fa-pencil form-control-feedback"></i>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-default"><i class="icon-check"></i>Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="call_back_mdfrom">
    <div class="call_back_mdfrom__close">×</div>
    <form name="CALLBACK_MODAL" action="/message.php" method="POST" class="login-form">
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
        <p>Нажимая кнопку «Отправить» я соглашаюсь с условиями <a href="/local/assets/files/Scan_20180111_164835.pdf" target="_blank">политики обработки персональных данных</a>.</p>
        <button type="submit" class="btn btn-group btn-default btn-sm pull-right">Заказать звонок</button>
    </form>
</div>

<script src="/js/plugins/jquery-1.12.4.min.js"></script>
<script src="/js/plugins/modernizr.js"></script>
<script src="/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/js/plugins/jquery.appear.js"></script>
<script src="/js/plugins/jquery.maskedinput.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="/js/plugins/jquery.themepunch.tools.min.js"></script>
<script src="/js/plugins/jquery.themepunch.revolution.min.js"></script>
<script src="/js/jquery.mmenu.all.js"></script>
<script src="/js/plugins/slick.min.js"></script>
<script src="/js/template.js"></script>
</body>
</html>

