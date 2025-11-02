<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pupils')]
class PupilIndex extends Component
{
    public function delete(User $pupil) {
        $pupil->delete();
    }

    public function render()
    {
        return view('livewire.pupil-index', [
            'pupils' => User::where('user_type', 'pupil')
            ->orderBy('reg')
            ->orderBy('name_first')
            ->orderBy('name_last')
            ->get(),
        ]);
    }
}
