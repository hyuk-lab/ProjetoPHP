
@foreach ($produtos as $Produto)
  <div>
    {{$user->name}} 
    {{$user->descricao}} 
    {{$user->preco}}
  </div>
@endforeach