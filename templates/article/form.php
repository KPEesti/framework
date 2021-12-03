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
    <header>
        <a href="/" class="nav-item">Главная</a>
        <a href="/agents_Contracts" class="nav-item">Агентские контракты</a>
        <a href="/apartment_Contracts" class="nav-item">Квартиры</a>
    </header>
<main>
    <p>Fill form for new article</p>
    <form action="/create" method="POST">
        <label for="name" >Article name</label><br />
        <input type="text" name="article[name]" /> <br />
        <label for="body" >Article body</label><br />
        <textarea name="article[body]" ></textarea><br />
        <input type="submit" value="Add article" />
    </form>

    <a href="/" >Back to list</a>
</main>
</body>
</html>