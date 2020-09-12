<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;
use Illuminate\Http\Request;

class RecipeIndex extends Component
{
    public function render(Request $request)
    {
        $id = $request->id;
        $recipe = Recipe::where('id', '=', $id)->get();
        return view('livewire.recipe', ['recipe' => $recipe])->extends('layouts.app');
    }
}
