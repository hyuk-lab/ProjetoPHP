


@foreach ($vendedores as $venda)
  <div>
    {{$venda->name}} 
    {{$venda->matricula}} 
    {{$venda->comissao}}
  </div>
@endforeach