<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Recipe;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        $searchResults = [];
        if(strlen($this->search) >= 3){
            $searchResults = Recipe::where('title', 'like', '%'.$this->search.'%')->get();
        }
        return view('livewire.search', ['searchResults' => collect($searchResults)->take(5)])->extends('layouts.app');
    }
}