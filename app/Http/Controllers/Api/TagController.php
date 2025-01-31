<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagStoredRequest;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;
use App\Http\Resources\TagCollection;
use App\Http\Resources\TagResource;
use App\Http\Resources\TagResourceCollection;
use App\Http\Resources\TagStoredResource;
use App\Http\Resources\TagUpdatedResource;
use App\Models\Tag;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new TagResourceCollection(Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(TagStoreRequest $request)
    {
        try {
            return new TagStoredResource(Tag::create($request->validated()));
        }catch(Exception $error){
            return $this->errorHandler("Erro ao criar nova Tag!!", $error);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return new TagResource($tag);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagUpdateRequest $request, Tag $tag)
    {
        try{
            $tag->update(($request->validated()));
            return new TagUpdatedResource($tag);
        } catch(Exception $error){
            return $this->errorHandler("Erro ao atualizar Tag", $error);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        try{
            $tag->delete();
            return (new TagResource($tag))->additional(["message"=>"Tag removida!!!"]);
        } catch(Exception $error){
            return $this->errorHandler("Erro ao atualizar Tag", $error);
        }
    }
}
