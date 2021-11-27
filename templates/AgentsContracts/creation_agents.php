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
    </header>
    <main>
        <p>Добавление контракта на агента</p>
        <form action="/agents_Contracts" method="post" name="create-form">
            <label for="article"></label>
            <input type="text" id="article" placeholder="Номер Агента" name="article[Agent_Id]">
            <input type="text" id="article" placeholder="Номер договра квартиры">
            <input type="date" id="article" placeholder="Дата заключения договора">
            <input type="date" id="article" placeholder="Дата окончания договора">
            <p>Тип вознаграждения</p>
            <select name="comm-type" id="article">
                <option value="percent" onclick="togle1">Процентный</option>
                <option value="money">Фиксированный</option>
            </select>
            <div>
                <p>Выплата в денежном эквиваленте</p>
                <input id="article" type="text" placeholder="Сумма выплаты">
            </div>
            <div>
                <p>Выплата в процентах</p>
                <input id="article" type="text" placeholder="Процент">
            </div>
            <div>
                <input id="article" type="submit" value="Добавить">
                <input id="article" type="reset" value="Сбросить">
            </div>
        </form>
        <script>
            var comm = create-form.comm-type.options[0]
            if (create-form.comm-type.options[0])
        </script>

        <div class="back-button"><a href="/agents_Contracts">Вернуться к списку контрактов</a></div>
    </main>
</body>

<script>
    function switchComm(element){
        
    }
</script>
</html>
