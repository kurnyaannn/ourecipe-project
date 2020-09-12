<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;
use Illuminate\Http\Request;

class RecipeCategorized extends Component
{
    public function render(Request $request)
    {
        $recipe_category = $request->category;
        $recipe = Recipe::where('category', '=', $recipe_category)->get();
        return view('livewire.recipe-categorized', ['recipe' => $recipe, 'category' => $recipe_category])->extends('layouts.app');
    }
}
