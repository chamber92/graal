<?php

namespace App\Http\Livewire\CrossWays;

use App\Models\CrossWay;
use Livewire\Component;

class Delete extends Component
{
    public $crossWay;

    public function mount(CrossWay $crossWay)
    {
        $this->crossWay = $crossWay;
    }

    public function render()
    {
        return view('livewire.cross-ways.delete');
    }

    public function delete()
    {
        $this->crossWay->delete();

        $this->emitUp('$refresh');
    }
}
