<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Recipe;
use Livewire\WithPagination;

class Content extends Component
{
    use WithPagination;

    public $search;
    public $category = [
        'Starter Dish' => 'Starter Dish',
        'Side Dish' => 'Side Dish',
        'Main Dish' => 'Main Dish',
        'Dessert' => 'Dessert',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $recipe = Recipe::latest()->paginate(8);
        return view('livewire.content', ['recipe' => $recipe, 'category'  => $this->category])->extends('layouts.app');
    }
}
