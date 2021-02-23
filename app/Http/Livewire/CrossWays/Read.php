<?php

namespace App\Http\Livewire\CrossWays;

use App\Models\CrossWay;
use Livewire\Component;

class Read extends Component
{
    public $crossWay;
    protected $listeners = ['showReadCrossWayModal'];

    public function render()
    {
        return view('livewire.cross-ways.read');
    }

    public function showReadCrossWayModal(CrossWay $crossWay)
    {
        $this->crossWay = $crossWay;

        $this->emit('showModal', 'read-cross-way-modal');
    }
}
