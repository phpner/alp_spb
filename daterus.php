<?php

/*
Дата по-русски
Пример вызова - как date
echo daterus('l, j F Y');
*/
function daterus($format, $timestamp=NULL) {
static $eng=array('january','february','march','april','may','june','july','august','september','october','november','december','monday','tuesday','wednesday','thursday','friday','saturday','sunday','von','tue','wed','th','fr','sa','su'),
$rus=array('января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье','пн','вт','ср','чт','пт','сб','вс');
	return str_ireplace($eng,$rus,date($format,$timestamp===NULL?time():$timestamp));
}

/*
Вернуть текст в зависимости от даты
getDailyText('файл с текстом','разделитель текстов',период в днях);
период в днях по умолчанию 1
*/
function getDailyText($textFile,$sep,$day=1) {
	if ($text=file_get_contents($textFile)) {
		$texts=explode($sep,$text);
		$day=(time()/86400/$day)%count($texts);
		return $texts[$day];
	}
	else return false;
}

function getFeedback($textFile,$sep,$minDays,$maxDays,$maxPosts) {
	if ($text=file_get_contents($textFile)) {
		$texts=explode($sep,$text);
		if (trim($texts[count($texts)-1])=='') array_pop($texts);
		$param=explode(',',$texts[0]);
		array_shift($texts);
		$shown=(int)$param[0];
		$next=(int)$param[1];
		echo "<!-- $next -->";
		$time=time();
		echo "<!-- $time -->";
		if ($time>=$next) {
			$rand=rand($minDays,$maxDays);
			echo "<!-- $rand -->";
			$next=$time+$rand*86400;
			if ($shown<$maxPosts) $shown++;
			array_unshift($texts,array_pop($texts));
			$text="$shown,$next\r\n$sep".implode($sep,$texts);
			file_put_contents($textFile,$text);
			mail('acid7@mail.ru','Novyj otzyv na '.$_SERVER['HTTP_HOST'],'Novyj otzyv na'.$_SERVER['HTTP_HOST'],'From: admin@'.$_SERVER['HTTP_HOST']);
		}
		return array_slice($texts,0,$shown);
	}
	else return false;
}
?>