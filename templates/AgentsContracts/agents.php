<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Agents</title>
    <link rel="stylesheet" href="/templates/styles/style.css">
</head>
<body>
    <header>
        <a href="/" class="nav-item">Главная</a>
        <a href="/agents_Contracts" class="nav-item">Агентские контракты</a>
        <a href="/apartment_Contracts" class="nav-item">Квартиры</a>
    </header>
    <main>
        <div>
            <h1>Список контрактов</h1>

            <table>
                <tr>
                    <th>ID Договора</th>
                    <th>Агент</th>
                    <th>ID Квартиры</th>
                    <th>Тип вознаграждения</th>
                    <th>Фиксированное вознаграждение</th>
                    <th>Процентное вознаграждение</th>
                    <th>Дата заключения договора</th>
                    <th>Дата окончания договора</th>
                </tr>
                <?php foreach ($Contracts_Agent as $contract):?>
                    <tr>
                        <td><?=$contract->id?></td>
                        <td><?=$contract->agent ?></td>
                        <td><?=$contract->apart_id ?></td>
                        <td><?=$contract->award_type ?></td>
                        <td><?=$contract->fix_award ?></td>
                        <td><?=$contract->percent_award ?></td>
                        <td><?=$contract->conclusion_date->format('Y-m-d')?></td>
                        <td><?=$contract->expiration_date->format('Y-m-d')?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <div class="add_button"><a href="/agents_Contracts/create_form">Добавит контракт</a></div>
    </main>
</body>
</html>