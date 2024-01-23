<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads as SupportFileUploadsWithFileUploads;
use Livewire\WithFileUploads;

class Counter extends Component
{

    use WithFileUploads;
    
    #[Rule('required|min:3')]
    public $title;
    #[Rule('required|min:1000|max:10000')]
    public $content;
    #[Rule('image|max:1024')]
    public $photo;
    
    public function render()
    {
        return view('livewire.counter');
    }

    public function store(){

        $this->validate();
        
        dd('cadastrado');
    }
}