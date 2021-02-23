<?php

namespace App\Http\Livewire\GraalWays;

use App\Models\GraalWay;
use Livewire\Component;

class Read extends Component
{
    public $graalWay;
    protected $listeners = ['showReadGraalWayModal'];

    public function render()
    {
        return view('livewire.graal-ways.read');
    }

    public function showReadGraalWayModal(GraalWay $graalWay)
    {
        $this->graalWay = $graalWay;

        $this->emit('showModal', 'read-graal-way-modal');
    }
}
