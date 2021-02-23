<?php

namespace App\Http\Livewire\GraalWays;

use App\Models\GraalWay;
use Livewire\Component;

class Delete extends Component
{
    public $graalWay;

    public function mount(GraalWay $graalWay)
    {
        $this->graalWay = $graalWay;
    }

    public function render()
    {
        return view('livewire.graal-ways.delete');
    }

    public function delete()
    {
        $this->graalWay->delete();

        $this->emitUp('$refresh');
    }
}
