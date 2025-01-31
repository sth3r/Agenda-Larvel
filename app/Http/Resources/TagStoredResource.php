<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TagStoredResource extends TagResource
{
    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode(201,'Tag Criada!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Tag criada com sucesso!!',
        ];
    }
}
