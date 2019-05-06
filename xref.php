<?php

$links = [
    '<li class="dropdown"><a href="/germetizaciya-shvov.php">герметизация швов</a></li>',
   ' <li class="dropdown"><a href="/remont-fasadov.php">ремонт фасадов</a></li>',
   ' <li class="dropdown"><a href="/osteklenie-fasadov.php">остекление фасадов</a></li>',
    '<li class="dropdown"><a href="/uteplenie-fasadov.php">утепление фасадов</a></li>',
    '<li class="dropdown"><a href="/remont-balkonov.php">ремонт балконов</a></li>',
   ' <li class="dropdown"><a href="/remont-okon.php">ремонт окон</a></li>',
   ' <li class="dropdown"><a href="/mojka-fasadov.php">мойка фасадов</a></li>',
   ' <li class="dropdown"><a href="/mojka-okon.php">мойка окон</a></li>',
    '<li class="dropdown"><a href="/obespylivanie.php">обеспыливание</a></li>',
    '<li class="dropdown"><a href="/uborka-snega-s-krysh.php">уборка снега</a></li>',
    '<li class="dropdown"><a href="/sbivanie-sosulek.php">сбивание сосулек</a></li>',
    '<li class="dropdown"><a href="/udalenie-vysolov.php">удаление высолов</a></li>',
   ' <li class="dropdown"><a href="/montazh-fasadov.php">монтаж фасадов</a></li>',
    '<li class="dropdown"><a href="/montazh-metallokonstrukcij.php">монтаж металлоконструкций</a></li>',
   ' <li class="dropdown"><a href="/demontazh-metallokonstrukcij.php">демонтаж металлоконструкций</a></li>',
    '<li class="dropdown"><a href="/montazh-naruzhnoj-reklamy.php">монтаж наружной рекламы</a></li>',
    '<li class="dropdown"><a href="/montazh-kondicionerov.php">монтаж кондиционеров и вентиляции</a></li>',
    '<li class="dropdown"><a href="/obsluzhivanie-ventilyacii.php">обслуживание вентиляции</a></li>',
   ' <li class="dropdown"><a href="/montazh-vodostokov.php">монтаж водостоков и воздуховодов</a></li>',
   ' <li class="dropdown"><a href="/svarochnye-raboty-na-vysote.php">высотные сварные работы</a></li>',
   ' <li class="dropdown"><a href="/montazh-sistem-videonablyudeniya.php">монтаж систем видеонаблюдения</a></li>',
   ' <li class="dropdown"><a href="/podsvetka-fasadov-zdanij.php">монтаж подсветки зданий</a></li>',
    '<li class=""><a href="/remont-myagkoj-krovli.php">ремонт мягкой кровли</a></li>',
    '<li class=""><a href="/montazh-myagkoj-krovli.php">монтаж мягкой кровли</a></li>',
    '<li class=""><a href="/obsluzhivanie-krovli.php">обслуживание кровли</a></li>',
    '<li class=""><a href="/montazh-sistem-antiobledeneniya.php">монтаж систем антиобледенения</a></li>',
    '<li class=""><a href="/montazh-stropilnoj-sistemy.php">монтаж стропильной системы</a></li>',
    '<li class=""><a href="/okraska-metallokonstrukcij.php">окраска металлоконструкций</a></li>',
   ' <li class=""><a href="/okraska-trub.php">окраска труб</a></li>',
    '<li class=""><a href="/pokraska-fasadov.php">окраска фасадов</a></li>',
    '<li class=""><a href="/podem-gruzov.php">подъем грузов</a></li>',
   ' <li class=""><a href="/kronirovanie-derevev.php">кронирование деревьев</a></li>',
    '<li class=""><a href="/obsledovanie-sooruzhenij.php">обследование сооружений</a></li>',
    '<li class=""><a href="/prochie-vysotnye-raboty.php">другие высотные работы</a></li>'
];

$rand_keys = array_rand($links, 4);

echo $links[$rand_keys[0]], $links[$rand_keys[1]], $links[$rand_keys[2]], $links[$rand_keys[3]];