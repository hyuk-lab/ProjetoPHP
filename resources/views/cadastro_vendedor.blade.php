<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Vendedor</title>
    <link rel="stylesheet" href="/css/vendedor.css">
</head>
<body>
    <div class="container">
    <div class="box">
    <form action="/criar_vendedor" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">

        <label for="matricula">matricula</label>
        <input type="text" name="matricula">

        <label for="comissao">comissao</label>
        <input type="text" name="comissao">

        <input type="submit" value="Salvar">
    </form>
    </div>
    </div>
</body>
</html>