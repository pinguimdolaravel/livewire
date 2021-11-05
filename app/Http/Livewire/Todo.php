<?php

namespace App\Http\Livewire;

use App\Models\Todo as ModelsTodo;
use Livewire\Component;

class Todo extends Component
{
    public string $filter = 'all';

    protected $listeners = [
        'todo::updated' => '$refresh',
        'todo::created' => '$refresh',
        'todo::deleted' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.todo', [
            'todos' => ModelsTodo::query()
                ->when($this->filter == 'done', fn ($q) => $q->where('checked', true))
                ->when($this->filter == 'pending', fn ($q) => $q->where('checked', false))
                ->orderBy('checked')
                ->get(),
        ]);
    }
}
