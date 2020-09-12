<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class StoreRecipe extends Component
{
    use WithFileUploads;

    public $picture;
    public $form = [
        'user_id' => '',
        'picture' => '',
        'title' => '',
        'category' => '',
        'duration' => '',
        'ingredient' => '',
        'detail' => '',
    ];

    public $category = [
        'Starter Dish' => 'Starter Dish',
        'Side Dish' => 'Side Dish',
        'Main Dish' => 'Main Dish',
        'Dessert' => 'Dessert',
    ];

    protected $rules = [
        'form.title' => 'required',
        'form.category' => 'required',
        'form.duration' => 'required',
        'form.ingredient' => 'required',
        'form.detail' => 'required',
    ];

    public function store()
    {
        $this->validate([
            'picture' => 'image|max:2048',
        ]);
        $this->validate();
        $this->form['user_id'] = Auth::user()->id;
        $this->form['picture'] = $this->picture->getClientOriginalName();
        $this->picture->storeAs($this->form['user_id'].'-'.$this->form['title'], $this->form['picture']);
        Recipe::create($this->form);
        session()->flash('message', 'Recipe successfully posted.');
        return redirect('/my-recipe');
    }

    public function render()
    {
        return view('livewire.store-recipe', ['category'  => $this->category])->extends('layouts.app');
    }
}
