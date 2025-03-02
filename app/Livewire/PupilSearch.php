<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class PupilSearch extends Component
{
    #[Validate('required')]
    public $searchText = '';
    public $pupils = [];
    public $placeholder;

    public function updatedSearchText($value) {
        $this->reset('pupils');

        $this->validate();
        
        $searchTerm = "%{$value}%";

        // Naive query right now...
        // It doesn't support typing a full name because it compares
        // to the fields individually. It needs to detect whitespace
        // and do something more brainy.

        $this->pupils = User::where('user_type', 'pupil')
            ->where('name_first', 'LIKE', $searchTerm)
            ->orWhere(function (Builder $query) use ($searchTerm) {
               $query->where('user_type', 'pupil')
                    ->where('name_last', 'LIKE', $searchTerm);
            })
            ->orWhere(function (Builder $query) use ($searchTerm) {
                $query->where('user_type', 'pupil')
                     ->where('reg', 'LIKE', $searchTerm);
            })
            ->orderBy('reg')
            ->orderBy('name_first')
            ->orderBy('name_last')
            ->get();   
    }

    #[On('search:clear-results')]
    public function clear() {
        $this->reset('searchText', 'pupils');
    }

    public function render()
    {
        return view('livewire.pupil-search');
    }
}
