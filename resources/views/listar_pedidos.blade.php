<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='t', initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
   @foreach ($pedidos as $pedido)
   <div>ID{{$pedido -> id}}</div>
   <div>Nome: {{$pedido -> user -> name}}</div>
   <div>Total: {{$pedido->total()}}</div>
    @foreach ($pedido ->items as $item )
       <div>Descrição: {{$item -> descricao}}</div>
       <div>Preço: {{$item -> preco}}</div>
    @endforeach
    <hr>
    @foreach ($pedido ->items as $item )
       <div>Pedido_id: {{$item -> pivot -> pedido_id}}</div>
       <div>Produto_id: {{$item -> pivot -> produto_id}}</div>
       <div>Quantidade: {{$item -> pivot -> quantidade}}</div>
    @endforeach

    <hr>
   @endforeach
</body>
</html>