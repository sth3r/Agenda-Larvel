<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\JsonResponse;

class UserUpdatedResource extends UserResource
{
    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode(201,'User Atualizado!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'User Atualizado com sucesso!!',
        ];
    }
    // /**
    //  * Transform the resource into an array.
    //  *
    //  * @return array<string, mixed>
    //  */
    // public function toArray(Request $request): array
    // {
    //     return parent::toArray($request);
    // }
}
