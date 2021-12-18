<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article - "<?php echo $article['name'] ?>"</title>
    <link rel="stylesheet" href="templates/styles/style.css">
</head>
<body>
    <?php include "templates/headerTemplate.php" ?>
    <h1><?php echo $article['name'] ?></h1>
    <p><?php echo $article['body'] ?> </p>

    <a href="/">back to articles list</a>
</body>
</html>