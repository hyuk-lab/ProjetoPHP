<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar usuario</title>
</head>
<body>
    <form action="/cadastro_produto" method="post">
        @csrf
        <label for="name">nome</label>
        <input type="text" name="name">

        <label for="descricao">descrição</label>
        <input type="text" name="descricao">

        <label for="preco">Preço</label>
        <input type="number" name="preco">

        <input type="submit" value="Salvar">
    </form>
</body>
</html>
''
