<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AnotacaoStoredResource extends AnotacaoResource
{
    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode(201,'Anotacao Criada!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Anotacao criada com sucesso!!',
        ];
    }
}
