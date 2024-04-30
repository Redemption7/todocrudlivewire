<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{   
    #[Rule('required|min:3|max:30')]

    public $name;

    public $search;

    public function create()
    {
        $validated = $this->validateOnly('name');

        Todo::create($validated);

        $this->reset('name');

        session()->flash('success','Created');
    }    

    public function render()
    {
        return view('livewire.todo-list');
    }
}
