<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TarefaStoredResource extends TarefaResource
{
    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode(201,'Tarefa Criada!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Tarefa criada com sucesso!!',
        ];
    }
}
