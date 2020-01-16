<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<div class="box">
			<div class="box__message">
					<!-- Messages -->
				<?=$templateMessages?><?="\n"?>
				<?="\n"?>
			</div>
			<!-- Send -->
			<?="\n"?>
			<?=$templateSend?>
			<!-- pop up info-->
			<?="\n"?>
			<?=$templatePopup?>
		</div>
	</div>
</body>
</html>