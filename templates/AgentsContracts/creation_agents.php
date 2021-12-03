<?php?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/templates/styles/style.css">
    <style>
    </style>
</head>
<body>
    <header>
        <a href="/" class="nav-item">Главная</a>
        <a href="/agents_Contracts" class="nav-item">Агентские контракты</a>
        <a href="/apartment_Contracts" class="nav-item">Квартиры</a>
    </header>
    <main>
        <p>Добавление контракта на агента</p>
        <form action="/agents_Contracts/create" method="POST" name="create-form">
            <label for="Agent">ФИО агента</label>
            <input type="text" name="contract[Agent]" placeholder="Иванов Иван Иванович">

            <label for="Apart_ID">Номер договора на квартиру</label>
            <input type="text" name="contract[Apart_ID]" placeholder="1">

            <label for="Award_Type">Тип вознаграждения</label>
            <select name="contract[Award_Type]" id="">
                <option value="FIX">Фиксированный</option>
                <option value="PERCENT">Процентный</option>
            </select>

            <label for="FIX_AWARD">Фиксированная награда</label>
            <input type="text" name="contract[FIX_AWARD]">

            <label for="PERCENT_AWARD">Процентная награда</label>
            <input type="text" name="contract[PERCENT_AWARD]">

            <label for="Conclusion_Date">Дата заключения договора</label>
            <input type="text" name="contract[Conclusion_Date]">

            <label for="Expiration_Date">Дата окончания договора</label>
            <input type="text" name="contract[Expiration_Date]">

            <input type="submit" value="Добавить">
        </form>

        <div class="back-button"><a href="/agents_Contracts">Вернуться к списку контрактов</a></div>
    </main>
</body>
</html>
