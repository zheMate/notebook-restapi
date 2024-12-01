<?php

namespace App\Http\Controllers;

use App\Http\Requests\Notebook\StoreRequest;
use App\Http\Requests\Notebook\UpdateRequest;
use App\Http\Resources\Notebook\NotebookResource;
use App\Models\Notebook;
use Illuminate\Http\Request;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notebook = Notebook::all();
        return NotebookResource::collection($notebook);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
            $data = $request->validated();
            $notebook = Notebook::create($data);
            return NotebookResource::make($notebook);
    }

    /**
     * Display the specified resource.
     */
    public function show(Notebook $notebook)
    {
        return NotebookResource::make($notebook);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notebook $notebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Notebook $notebook)
    {
        $data = $request->validated();
        $notebook->update($data);

        return NotebookResource::make($notebook);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notebook $notebook)
    {
        $notebook->delete();
        return response()->json([
           'message' => 'Запись успешно удалена'
        ]);
    }
}
