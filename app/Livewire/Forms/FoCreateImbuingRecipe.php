<?php

namespace App\Livewire\Forms;

use Livewire\Component;

class FoCreateImbuingRecipe extends Component
{

    public $title = 'Enter a new imbuing recipe:';

    public function render()
    {
        return view('livewire.forms.fo-create-imbuing-recipe');
    }
}
