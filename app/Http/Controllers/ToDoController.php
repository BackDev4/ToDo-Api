<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use App\Http\Requests\ToDoRequest;

class ToDoController extends Controller
{
    public function index(ToDoRequest $request)
    {
        $query = ToDo::query();

        if ($request->has('status')) {
            $query->where('status', $request->status);
        }

        if ($request->has('date')) {
            $query->whereDate('created_at', $request->date);
        }

        $todos = $query->get();

        return response()->json(['data' => $todos], 200);
    }

    public  function create(ToDoRequest $request)
    {
        $data = $request->validated();
        $todo = ToDo::create($data);
        return response()->json(['message' => 'ToDo created successfully', 'data' => $todo], 201);
    }

    public  function show($id)
    {
        return ToDo::find($id);
    }

    public function update(ToDoRequest $request, $id)
    {
        $todo = ToDo::find($id);
        if (!$todo) {
            return response()->json(['error' => 'ToDo not found'], 404);
        }

        $data = $request->all();
        $todo->fill($data)->update();

        return response()->json(['message' => 'ToDo updated successfully', 'data' => $todo], 200);
    }


    public function delete($id)
    {
        $todo = ToDo::find($id);
        if (!$todo) {
            return response()->json(['error' => 'ToDo not found'], 404);
        }
        $todo->delete();
        return response()->json(['message' => 'ToDo deleted successfully'], 200);
    }
}
