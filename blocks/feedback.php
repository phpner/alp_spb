<div class="blockFeedback section">
    <h2>ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h2>
        <div class="comment">
		  <div class="item">
			<?php
include('daterus.php');
$otz=getFeedback('otzyvy2.txt','+++++',5,20,4);
foreach($otz as $otzyv) {
	echo "$otzyv<br>\n";
} ?>
        </div>
    </div>
    <a class="allCommets" href="/all-commets.php">Больше отзывов...</a>
</div>