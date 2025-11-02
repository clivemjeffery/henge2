<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Add Pupil')]
class PupilCreate extends Component
{
    public function render()
    {
        return view('livewire.pupil-create');
    }
}
