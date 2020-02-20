@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
 
@stop

@section('content')


<div>
    <h3 align="center">Pagamentos Realizados</h3> <br>
 
<table class="table table-bordered">
  <thead class="thead-dark">
  <tr>
    <th>Nº do Pagamento</th>
    <th>Cód. da Transação</th>
    <th>Cliente</th>
    <th>Status</th>
    <th>Valor</th>
    <th>Data de pagamento</th>
    <th>Comprovante</th>
  </tr>
  </thead>

  @foreach ($payments as $payment)
  <tr>
    <td>{{$payment->id}}</td>
    <td>{{$payment->codTransacao}}</td>
    <td>{{$payment->maquineta_id}}</td>
    <td>{{$payment->status}}</td>
    <td>{{$payment->valor}}</td>
    <td>{{$payment->comprovante}}</td>
    <td>{{$payment->update_at}}</td>
  </tr>
  @endforeach

</table>
  
</div>
@stop