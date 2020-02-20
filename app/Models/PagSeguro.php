<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Carbon\Carbon;

class PagSeguro extends Model
{

	/* --------------------------------------------------------------------------------
		Início da função para pegar os dados de uma transação a partir do código de notificação recebido:
		-------------------------------------------------------------------------------- */

    public function getInfoTransaction($notificationCode){

    	//Busca a url de destino na pasta 'config' e concatena com o código de notificação recebido:
    	$url_notification_code = config('pagseguro.url_notification')."/{$notificationCode}";

    	//Cria um array com o email e o token do usuário que estão na pasta config:
    	$params = [
    		'email' => config('pagseguro.email'),
    		'token' => config('pagseguro.token'),   
    	];

    	//converte o array para uma query:
     	$params = http_build_query($params);


    	//Cria um novo objeto da Class Guzzle para fazer uma requisição no pagseguro:
    	$cliente  = new Client;
    	$response = $cliente->request('GET', $url_notification_code, ['query' => $params,]);
    	$body 	  = $response->getBody();
    	$contents = $body->getContents();

    	//Carrega o resultado da requisição em um objeto xml:
    	$contentsJason = simplexml_load_string($contents);

    	// retorna os dados especificados:
    	$dados = [
    	 	'data' 		   => (string) Carbon::parse($contentsJason->date)->format('d/m/Y h:m:s'),
    	 	'codTransacao' => (string) $contentsJason->code,
    	 	'tipo'         => (string) $contentsJason->type,
    	 	'status'       => (string) $contentsJason->status,
    	 	'valorBruto'   => (string) $contentsJason->grossAmount,
    	 	'valorLiquido' => (string) $contentsJason->netAmount,
    	 	'parcelas'     => (string) $contentsJason->installmentCount,
    	];

        return $dados;
    } // Fim da função.

}
