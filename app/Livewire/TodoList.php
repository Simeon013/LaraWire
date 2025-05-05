<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{
    public $title;
    public $todos;

    public function mount()
    {
        $this->loadTodos();
    }

    public function loadTodos()
    {
        $this->todos = Todo::orderBy('created_at', 'desc')->get();
    }

    public function addTodo()
    {
        $this->validate([
            'title' => 'required|min:3'
        ]);

        Todo::create([
            'title' => $this->title,
        ]);

        $this->title = '';
        $this->loadTodos();
    }

    public function deleteTodo($id)
    {
        Todo::find($id)?->delete();
        $this->loadTodos();
    }

    public function toggleCompleted($id)
    {
        $todo = Todo::find($id);
        if ($todo) {
            $todo->completed = !$todo->completed;
            $todo->save();
        }
        $this->loadTodos();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
