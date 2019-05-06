<?php
$h1 = "Отзывы наших клиентов";
$title = "Отзывы наших клиентов по услугам промышленного альпинизма";
$des = "Отзывы клиентов нашей компании по услугам промышленного альпинизма и высотных работ";
$key = "отзывы клиенты компании услугам промышленного альпинизма высотных работ";
$alt1= "";
$alt2= "";
$alt3= "";
$alt4= "";
$active_menu = 2;
include "top-uslugy.php";
?>

<div class="all-commets section">
    <div class="blockFeedback-all">
        <h1><?php echo $h1;?></h1>
        <form class="form-feadback" method="post" action="message.php">
            <div class="group-form">
                <label for="nameForm">Имя</label>
                <input required id="nameForm" type="text" name="name" placeholder="Ваше имя">
            </div>
            <input type="hidden" name="fromform" value="Прозьба добавить отзыв">
            <div class="group-form">
                <label for="textForm">Ваш отзыв</label>
                <textarea required name="text" id="textForm" cols="30" rows="10" placeholder="Напишите Ваш отзыв"></textarea>
            </div>
            <input type="submit" value="Отправить">
            <span class="form-sended">Спасибо за отзыв!</span>
        </form>
        <div class="comment">
		  <div class="item">
			<?php
include('daterus.php');
$otz=getFeedback('otzyvy.txt','+++++',5,20,17);
foreach($otz as $otzyv) {
	echo "$otzyv<br>\n";
} ?></div></div></div></div>
<?php include "footer-page.php"?>
<script>
    $(document).ready(function () {
        $(".blockFeedback ").fadeOut(0);
    })
</script>
