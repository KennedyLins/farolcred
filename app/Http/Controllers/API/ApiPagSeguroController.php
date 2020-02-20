<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PagSeguro;
use App\Models\Transaction;
use App\Models\Payment;

class ApiPagSeguroController extends Controller
{

    public function request(Request $request, PagSeguro $pagseguro)
    {
            
            $notificationCode = $request->notificationCode;
            $response = $pagseguro->getInfoTransaction($notificationCode);
            

            $transaction = new Transaction;

            $transaction->data         = $response['data'];
            $transaction->codTransacao = $response['codTransacao'];
            $transaction->tipo         = $response['tipo'];
            $transaction->status       = $response['status'];
            $transaction->valorBruto   = $response['valorBruto'];
            $transaction->valorLiquido = $response['valorLiquido'];
            $transaction->parcelas     = $response['parcelas'];

            $transaction->save();
            

            //Salvando alguns dados da transação na tabela payments:

            $payment = new Payment;

            $payment->codTransacao    = $response['codTransacao'];
            $payment->status            = "Aguardando Pagamento";

            $payment->save();

            
    }

    

}
