<html>
<head>
    <link rel="stylesheet" href="templates/styles/style.css">
</head>
<body>
<header>
    <a href="/" class="nav-item">Главная</a>
    <a href="/agents_Contracts" class="nav-item">Агентские контракты</a>
    <a href="/apartment_Contracts" class="nav-item">Квартиры</a>
</header>
<main>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
        </tr>

        <?php foreach ($articles as $article): ?>
            <tr>
                <td><?php echo $article['id']?></td>
                <td><a href="/show?id=<?php echo $article['id'] ?>"><?php echo $article['name']?></a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/create/form" >Add article</a>

</main>


</body>
</html>