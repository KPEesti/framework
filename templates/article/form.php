<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create article</title>
    <link rel="stylesheet" href="/templates/styles/style.css">
</head>
<body>
<?php include "templates/headerTemplate.php" ?>
<main>
    <p>Fill form for new article</p>
    <form action="/create" method="POST">
        <label for="name" >Article name</label><br />
        <?php if(!empty($errors) && isset($errors['name']) ):?>
            <span style="color: red">
                <?php echo $errors['name']?>
            </span>
        <?php endif;?>

        <input type="text" name="article[name]" /> <br />

        <label for="body" >Article body</label><br />
        <?php if(!empty($errors) && isset($errors['body']) ):?>
        <span style="color: red">
                <?php echo $errors['body']?>
            </span>
        <?php endif;?>
        <textarea name="article[body]" ></textarea><br />

        <input type="submit" value="Add article" />
    </form>

    <a href="/" >Back to list</a>
</main>
</body>
</html>