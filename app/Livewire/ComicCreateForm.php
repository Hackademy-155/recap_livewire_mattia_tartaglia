<?php

namespace App\Livewire;

use App\Models\Comic;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class ComicCreateForm extends Component
{
    use WithFileUploads;
    public $title ;
    public $author;
    public $image;

    public function rules(){
        return[
            'title'=>'required',
            'author'=>'required',
            'image'=>'required|image|mimes:jpg,jpeg,png,webp'
        ];
    }

    public function messages(){
        return[
            'required'=>'Campo obbligatorio',
            'mimes'=>'L\'immagine deve essere di tipo :values'
        ];
    }

    public function store(){
        $this->validate();
        Comic::create([
            'title'=>$this->title,
            'author'=>$this->author,
            'image'=>$this->image->store('comics', 'public'),
            'user_id'=>Auth::user()->id
        ]);
        session()->flash('message', 'Fumetto inserito');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.comic-create-form');
    }

    
}
