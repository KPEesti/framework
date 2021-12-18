<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Квартиры</title>
    <link rel="stylesheet" href="/templates/styles/style.css">
</head>
<body>
<?php include "templates/headerTemplate.php" ?>
<main>
    <div>
        <h1>Список Квартир</h1>

        <form action="/apartment_Contracts/findByID" method="POST">
            <label for="Apart_ID">Поиск квартиры по ID</label>
            <input type="text" placeholder="ID квартиры" name="Apart_ID">
            <div class="buttons-block">
                <input type="submit" value="найти">
                <input type="submit" formaction="/apartment_Contracts" value="Очистить филтьтр">
            </div>
        </form>
        <?php if(empty($Apartments)): ?>
            <span>Данная квартира не найдена</span>
        <?php else: ?>
        <table>
            <tr>
                <th>ID Квартиры</th>
                <th>Стоимость</th>
                <th>Номер квартиры</th>
                <th>Жилой комплекс</th>
            </tr>
            <?php foreach ($Apartments as $contract):?>
                <tr>
                    <td><?=$contract->Apart_ID?></td>
                    <td><?=$contract->Apart_Cost ?></td>
                    <td><?=$contract->Apart_Num ?></td>
                    <td><?=$contract->ResComplex ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="add_button"><a href="/apartment_Contracts/create_form">Добавит контракт</a></div>
</main>
</body>
</html>