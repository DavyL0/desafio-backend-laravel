<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all(); // Retorna todas as tarefas
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pending,in_progress,completed', 
        ]);

        // Define 'pending' como status padrão, se não informado
        $task = Task::create(array_merge($validated, [
            'status' => $validated['status'] ?? 'pending',
        ]));

        return response()->json($task, 201);
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pending,in_progress,completed',
        ]);

        $task->update($validated);

        return response()->json($task);
    }

    public function filterByStatus(Request $request)
{
    $validated = $request->validate([
        'status' => 'required|in:pending,in_progress,completed',
    ]);

    //faz a busca do status da task
    $tasks = Task::where('status', $validated['status'])->get();

    return response()->json($tasks);
}


    public function destroy(Task $task)
    {
        $task->delete();

        return response()->noContent();
    }
}
