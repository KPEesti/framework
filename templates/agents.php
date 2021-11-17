

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Agents</title>
    <style>
        table{
            border-collapse: collapse;
        }

        th, td{
            padding: 10px;
            border: 1px solid black;
        }

        form{
            margin-bottom: 20px;
        }

        input {
            margin: 5px;
        }
    </style>
</head>
<body>
    <!--<p>Agents</p>
    <form action="" style="display: flex; flex-direction: column; width: 250px;">
        <input type="text" placeholder="Номер Агента">
        <input type="text" placeholder="Номер договра квартиры">
        <input type="date" placeholder="Дата заключения договора">
        <input type="date" placeholder="Дата окончания договора">
        <p>Тип вознаграждения</p>
        <div><input type="radio"> Процентный</div>
        <div><input type="radio"> Фиксированный</div>
        <input type="submit" value="Добавить">
    </form>-->
    <table>
        <tr>
            <th>ID Договора</th>
            <th>ID Агента</th>
            <th>ID Квартиры</th>
            <th>Дата заключения договора</th>
            <th>Дата окончания договора</th>
            <th>Тип вознаграждения</th>
            <th>Размер вознаграждения</th>
        </tr>
        <?php foreach ($Contracts_Agent as $contract):?>
        <tr>
            <td><?=$contract->id?></td>
            <td><?=$contract->agent_id ?></td>
            <td><?=$contract->apart_id ?></td>
            <td><?=$contract->conclusion_date->format('Y-m-d')?></td>
            <td><?=$contract->expiration_date->format('Y-m-d')?></td>
            <td><?=$contract->comm_type ?></td>
            <td><?=$contract->comm_amt ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>