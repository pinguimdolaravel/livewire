<?php

namespace App\Http\Livewire;

use App\Models\Todo as ModelsTodo;
use Livewire\Component;

class Todo extends Component
{
    protected $listeners = [
        'todo::created' => '$refresh',
        'todo::deleted' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.todo', [
            'todos' => ModelsTodo::all()
        ]);
    }
}
