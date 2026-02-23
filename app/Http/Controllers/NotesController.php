<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Models\Note;

class NotesController extends Controller
{
    public function index()
    {   
        $notes = Note::all()->reverse();
        return view('notes.index', ['notes' => $notes]);
    }

    public function store(StoreNoteRequest $request)
    {
        Note::create($request->validated());
        return redirect()->route('notes.index');
    }

    public function edit(Note $note)
    {
        return view('notes.edit', ['note' => $note]);
    }

    public function update(StoreNoteRequest $request, string $id)
    {       
        $note = Note::findOrFail($id);
        $data = $request->validated();
        $note->update($data);
        return redirect()->route('notes.index')->with('message', 'Note updated succesfully!');
    }

    public function destroy(Note $note)
    {   
        $note->delete();
        return redirect()->route('notes.index')->with('message', 'Note deleted succesfully!');
    }
}
