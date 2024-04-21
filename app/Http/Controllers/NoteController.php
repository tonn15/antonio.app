<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlocNoteStoreRequest;
use App\Http\Requests\BlocNoteUpdateRequest;
use App\Models\BlocNote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\Response;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        $notes = BlocNote::latest()->get();
        return view('note.index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlocNoteStoreRequest $request): RedirectResponse
    {
        BlocNote::create($request->validated());

        return redirect()->route('blocnote.index')
            ->with('success','note created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlocNote $blocnote) : View
    {
        return view('note.show',compact('blocnote'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlocNote $blocnote) : View
    {
        return view('note.edit',compact('blocnote'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlocNoteUpdateRequest $request, BlocNote $blocnote):RedirectResponse
    {
        $blocnote->update($request->validated());
        return redirect()->route('blocnote.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlocNote $blocnote):RedirectResponse
    {
        $blocnote->delete();
        return redirect()->route('blocnote.index');
    }
}
