<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class ForumDiksusi extends Component
{
    public function render()
    {
        return view('livewire.front.forum-diksusi')->extends('layouts.front')->section('content');
    }
}
