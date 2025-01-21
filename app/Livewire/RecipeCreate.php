<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class RecipeCreate extends Component
{
    use WithFileUploads;


    // public $title, $image, $procedure;
    #[Validate('required|min:5|max:20')]
    public $title;
    public $procedure;
    public $image;
    public $category_id;

    protected function rules()
    {
        return [
            // 'title' => 'required|min:5|max:20',
            'procedure' => 'required|min:5|max:500',
            'image' => 'required|image|mimes:jpg,jpeg,webp,png'
        ];
    }

    protected function messages()
    {
        return [
            'required' => 'il campo :attribute e richiesto',
            'min' => 'devi inserire almeno :min caratteri',
            'max' => 'devi inserire :max caratteri',
            'image' => 'il file deve essere una immagine',
            'mimes' => 'la immagine deve avere queste estensioni :values'
        ];
    }

    public function store()
    {
        $this->validate();
        Auth::user()->recipes()->create([
            'title' => $this->title,
            'image' => $this->image->store('images', 'public'),
            'procedure' => $this->procedure,
            // 'user_id'=> Auth::user()->id
            'category_id'=>$this->category_id
        ]);

        session()->flash('message', 'ricetta inserita con successo');
        $this->reset();
    }

    public function render()
    {
        $categories = Category::orderBy('name')->get();
        return view('livewire.recipe-create', compact('categories'));
    }
}
