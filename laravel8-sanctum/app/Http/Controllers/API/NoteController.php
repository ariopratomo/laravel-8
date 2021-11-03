<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Http\Resources\NoteResource;
use App\Models\Notes;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Notes::latest()->get();
        return response()->json([NoteResource::collection($data), 'Notes fetched.']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'desc' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $program = Notes::create([
            'name' => $request->name,
            'desc' => $request->desc
        ]);

        return response()->json(['Note created successfully.', new NoteResource($program)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $program = Notes::find($id);
        if (is_null($program)) {
            return response()->json('Data not found', 404);
        }
        return response()->json([new NoteResource($program)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'desc' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $program = Notes::find($id);
        $program->name = $request->name;
        $program->desc = $request->desc;
        $program->save();

        return response()->json(['Note updated successfully.', new NoteResource($program)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Notes::find($id);
        $program->delete();

        return response()->json('Note deleted successfully');
    }
}