<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL PRIMI PASSI</title>
</head>

<body>
    <header>
        <nav>
            <span><a href={{route("home")}}>HOME</a></span>
            <span><a href={{route("about")}}>CHI SIAMO</a></span>
            <span><a href={{route("service")}}>SERVIZI</a></span>
            <span><a href={{route("contacts")}}>CONTATTI</a></span>
        </nav>
    </header>
    <div class="container">
        <h1>HELLO WORLD!</h1>
        <h2>{{$dati}}</h2>
    </div>
</body>

</html>