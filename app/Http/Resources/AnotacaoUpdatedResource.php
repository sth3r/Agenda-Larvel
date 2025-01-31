<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnotacaoUpdatedResource extends AnotacaoResource
{
    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode(201,'Anotacao Atualizada!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Anotacao Atualizada com sucesso!!',
        ];
    }
}
