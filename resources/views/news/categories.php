<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Категории новостей</title>
</head>

<body>
    <header>
        <?php include('menu.php'); ?>
    </header>
    <div class="context">
        <h1>Категории новостей</h1>
        <ul>
            <? foreach($categories as $key => $value):?>
            <li><a href="<?=route('news.news', [$key])?>"><?=$value?></a></li>
            <? endforeach?>
        </ul>
    </div>
    <footer>&copy</footer>

</body>

</html>