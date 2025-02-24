<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowPupil extends Component
{
    public User $pupil;

    public function mount(User $user) {
        $this->pupil = $user;
    }

    public function render()
    {
        return view('livewire.show-pupil');
    }
}
