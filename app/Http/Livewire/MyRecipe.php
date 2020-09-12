<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyRecipe extends Component
{
    public function render()
    {
        $user_id = Auth::user()->id;
        $recipe = Recipe::where('user_id', '=', $user_id)->get();
        return view('livewire.my-recipe', ['recipe' => $recipe])->extends('layouts.app');
    }
}
