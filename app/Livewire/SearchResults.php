<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class SearchResults extends Component
{
    #[Reactive]
    public $pupils = [];

    #[Reactive]
    public $show = false;

    public function render()
    {
        return view('livewire.search-results');
    }
}
