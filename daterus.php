<?php

/*
���� ��-������
������ ������ - ��� date
echo daterus('l, j F Y');
*/
function daterus($format, $timestamp=NULL) {
static $eng=array('january','february','march','april','may','june','july','august','september','october','november','december','monday','tuesday','wednesday','thursday','friday','saturday','sunday','von','tue','wed','th','fr','sa','su'),
$rus=array('������','�������','�����','������','���','����','����','�������','��������','�������','������','�������','�����������','�������','�����','�������','�������','�������','�����������','��','��','��','��','��','��','��');
	return str_ireplace($eng,$rus,date($format,$timestamp===NULL?time():$timestamp));
}

/*
������� ����� � ����������� �� ����
getDailyText('���� � �������','����������� �������',������ � ����);
������ � ���� �� ��������� 1
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