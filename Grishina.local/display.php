<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спасибо за обращение</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class="container">
        <img src="главная.jpg" WIDTH=1270 HEIGHT=400 class="image">
        <div class="text"><h1><I><P ALIGN="center">Книжный мир</P></I><h1></div>
    </div>
	<div class="container2">
		<div class="container3">
		<A HREF="index.html"><h3>Главная<h3></A>
        </div>
        <div class="container4">
		<A HREF="каталог.html"><h3>Каталог<h3></A>
        </div>
		<div class="container5">
		<A HREF="отзыв.html"><h3>Отзывы<h3></A>
        </div>
	</div>
        </div>
    </header>
    <section class="content">
        <div class="container">
            <h1>Спасибо за ваше обращение!</h1>
            <p>Имя: <?php echo htmlspecialchars($_GET['sirname']); ?></p>
            <p>Сообщение: <?php echo nl2br(htmlspecialchars($_GET['message'])); ?></p>
        </div>
    </section>
	<link rel="stylesheet" href="styles.css">
</body>
</html>
