@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
 
@stop

@section('content')


<div>
    <h3 align="center">Últimas Transações</h3> <br>

 
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col" >Data/Hora</th>
      <th scope="col" >Cód. da Transação</th>
      <th scope="col" >Status</th>
      <th scope="col" >Valor Bruto</th>
      <th scope="col" >Valor Líquido</th>
      <th scope="col" >Parcelas</th>
    </tr>
  </thead>
  
  <tbody>
    @foreach ($transactions as $transaction)
  <tr>
    <td >{{$transaction->data}}</td>
    <td >{{$transaction->codTransacao}}</td>
    <td >{{$transaction->status}}</td>
    <td >R$ {{$transaction->valorBruto}}</td>
    <td >R$ {{$transaction->valorLiquido}}</td>
    <td >{{$transaction->parcelas}}x</td>
  </tr>
  @endforeach
  </tbody>
 
</table>

</div>
@stop