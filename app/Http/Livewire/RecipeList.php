<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Recipe;
use Livewire\WithPagination;

class RecipeList extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];
    public function render()
    {
        if($this->search){
            $recipe = Recipe::where('title', 'like', '%'.$this->search.'%')->get();
        }
        else {
            $recipe = Recipe::latest()->paginate(8);
        }
        return view('livewire.recipe-list', ['recipe' => $recipe]);
    }
}
