<?php 
	include_once 'db.php';
	include_once 'php_fun.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/keyboard.js?t=4"></script>
	<title>Хранение ссылок для TV</title>
</head>
<body>
	<div style="min-width:1500px;">
	<div class="left_cont">
		<div class="open_google_search">Open google search</div>
		<div class="title_first">Search in Google</div>
		<div class="hidden_input empty">
			Click on buttons
		</div>

		<div class="cont_all_keyboard">
			<div class="cont_keyboards">
				<ul id="keyboard">
					<li class="symbol"><span class="off">`</span><span class="on">~</span></li>
					<li class="symbol"><span class="off">1</span><span class="on">!</span></li>
					<li class="symbol"><span class="off">2</span><span class="on">@</span></li>
					<li class="symbol"><span class="off">3</span><span class="on">#</span></li>
					<li class="symbol"><span class="off">4</span><span class="on">$</span></li>
					<li class="symbol"><span class="off">5</span><span class="on">%</span></li>
					<li class="symbol"><span class="off">6</span><span class="on">^</span></li>
					<li class="symbol"><span class="off">7</span><span class="on">&amp;</span></li>
					<li class="symbol"><span class="off">8</span><span class="on">*</span></li>
					<li class="symbol"><span class="off">9</span><span class="on">(</span></li>
					<li class="symbol"><span class="off">0</span><span class="on">)</span></li>
					<li class="symbol"><span class="off">-</span><span class="on">_</span></li>
					<li class="symbol"><span class="off">=</span><span class="on">+</span></li>
					<li class="delete lastitem">delete</li>
					<li class="tab">tab</li>
					<li class="letter"><span class="en">q</span><span class="rus">й</span></li>
					<li class="letter"><span class="en">w</span><span class="rus">ц</span></li>
					<li class="letter"><span class="en">e</span><span class="rus">у</span></li>
					<li class="letter"><span class="en">r</span><span class="rus">к</span></li>
					<li class="letter"><span class="en">t</span><span class="rus">е</span></li>
					<li class="letter"><span class="en">y</span><span class="rus">н</span></li>
					<li class="letter"><span class="en">u</span><span class="rus">г</span></li>
					<li class="letter"><span class="en">i</span><span class="rus">ш</span></li>
					<li class="letter"><span class="en">o</span><span class="rus">щ</span></li>
					<li class="letter"><span class="en">p</span><span class="rus">з</span></li>
					<li class="letter"><span class="en">[</span><span class="rus">х</span></li>
					<li class="letter"><span class="en">]</span><span class="rus">ъ</span></li>
					<li class="symbol lastitem"><span class="off">\</span><span class="on">|</span></li>
					<li class="capslock">caps lock</li>
					<li class="letter"><span class="en">a</span><span class="rus">ф</span></li>
					<li class="letter"><span class="en">s</span><span class="rus">ы</span></li>
					<li class="letter"><span class="en">d</span><span class="rus">в</span></li>
					<li class="letter"><span class="en">f</span><span class="rus">а</span></li>
					<li class="letter"><span class="en">g</span><span class="rus">п</span></li>
					<li class="letter"><span class="en">h</span><span class="rus">р</span></li>
					<li class="letter"><span class="en">j</span><span class="rus">о</span></li>
					<li class="letter"><span class="en">k</span><span class="rus">л</span></li>
					<li class="letter"><span class="en">l</span><span class="rus">д</span></li>
					<li class="letter"><span class="en">;</span><span class="rus">ж</span></li>
					<li class="letter"><span class="en">"</span><span class="rus">э</span></li>
					<li class="language lastitem">Lang: <span class="lang">RU</span></li>
					<li class="left-shift">shift</li>
					<li class="letter"><span class="en">z</span><span class="rus">я</span></li>
					<li class="letter"><span class="en">x</span><span class="rus">ч</span></li>
					<li class="letter"><span class="en">c</span><span class="rus">с</span></li>
					<li class="letter"><span class="en">v</span><span class="rus">м</span></li>
					<li class="letter"><span class="en">b</span><span class="rus">и</span></li>
					<li class="letter"><span class="en">n</span><span class="rus">т</span></li>
					<li class="letter"><span class="en">m</span><span class="rus">ь</span></li>
					<li class="letter"><span class="en">,</span><span class="rus">б</span></li>
					<li class="letter"><span class="en">.</span><span class="rus">ю</span></li>
					<li class="symbol"><span class="off">.</span><span class="on">,</span></li>
					<li class="right-shift lastitem">Enter</li>
					<li class="space lastitem">&nbsp;</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="right_cont">
		second
		<div class="cont_add_link">
			<form method="post">
				<input type="hidden" name="event" value="add">
				<input type="text" name="link" value="">
				<button type="submit">save</button>
			</form>
		</div>
		<div class="cont_list_links">
			<?php
				foreach ($results as $key => $value):?>
					<div class="item_link">
						<div class="number"><?=$value['id']?></div>
						<div class="link"><a href="<?=$value['links']?>"><?=$value['links']?></a></div>
						<div class="clear"></div>
					</div>
			<?php endforeach;?>
		</div>
	</div>
	</div>
</body>
</html>