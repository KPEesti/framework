<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление квартиры</title>
    <link rel="stylesheet" href="/templates/styles/style.css">
</head>

<body>
<header>
    <a href="/" class="nav-item">Главная</a>
    <a href="/agents_Contracts" class="nav-item">Агентские контракты</a>
    <a href="/apartment_Contracts" class="nav-item">Квартиры</a>
</header>
<main>
    <p>Добавление контракта на квартиру</p>
    <form action="/apartment_Contracts/create" method="POST" name="create-form">
        <label for="Apart_Cost">Стоимость квартиры</label>
        <input type="text" name="apartment[Apart_Cost]" placeholder="10000000">

        <label for="Apart_Num">Номер квартиры</label>
        <input type="text" name="apartment[Apart_Num]" placeholder="322">

        <label for="ResComplex">Жилой комплекс</label>
        <input type="text" name="apartment[ResComplex]" placeholder="Речной камень">

        <input type="submit" value="Добавить">
    </form>

    <div class="back-button"><a href="/apartment_Contracts">Вернуться к списку контрактов</a></div>
</main>
</body>
</html>