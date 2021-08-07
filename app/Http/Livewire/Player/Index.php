<?php

namespace App\Http\Livewire\Player;

use App\Models\Player;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.player.index', [
            'players' => Player::orderBy('name', 'ASC')->get()
        ]);
    }
}
