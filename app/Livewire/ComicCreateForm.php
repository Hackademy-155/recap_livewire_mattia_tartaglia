<?php

namespace App\Livewire;

use App\Models\Comic;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ComicCreateForm extends Component
{
    use WithFileUploads;
    public $title ;
    public $author;
    public $image;
    public $category_id;

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
            'user_id'=>Auth::user()->id,
            'category_id'=>$this->category_id,
        ]);
        session()->flash('message', 'Fumetto inserito');
        $this->reset();
    }
    public function render()
    {
        $categories=Category::all();
        return view('livewire.comic-create-form', compact('categories'));
    }

    
}
