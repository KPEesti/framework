<html>
<head>
    <title>Главная</title>
    <link rel="stylesheet" href="templates/styles/style.css">
</head>
<body>
<?php include "templates/headerTemplate.php" ?>
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