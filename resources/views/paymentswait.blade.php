@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
 
@stop

@section('content')


<div>
    <h3 align="center">Aguardando Pagamento</h3> <br>
 
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col" >Cód. da Transação</th>
      <th scope="col" >Cliente</th>
      <th scope="col" >Status</th>
      <th scope="col" >Valor</th>
      <th scope="col" >Ação</th>
    </tr>
  </thead>

  @foreach ($payments as $payment)
  <tr>
    <td>{{$payment->codTransacao}}</td>
    <!--<td>{{$payment->maquineta_id}}</td>-->
    <td>Cliente Teste</td>
    <td>{{$payment->status}}</td>
    <td>{{$payment->valor}}</td>
    <!--<td><button type="button" class="btn btn-primary">Pagar</button></td>

    <td><button type="button" class="btn btn-primary" onclick="window.location='{{ url("paymentswork"), 'idCodtransacao' }}'">Pagar</button></td>-->

    <td><form method="get" action="paymentswork">
      <button id="22" type="submit" class="btn btn-primary" name="transacao">Pagar</button></form></td>
  </tr>
  @endforeach

</table>
  
</div>
@stop