<?php

namespace App\Http\Livewire\GraalWays;

use App\Models\GraalWay;
use Livewire\Component;
use Redbastie\Larawire\Traits\HandlesData;

class Save extends Component
{
    use HandlesData;

    public $graalWay;
    protected $listeners = ['showSaveGraalWayModal'];

    public function render()
    {
        return view('livewire.graal-ways.save');
    }

    public function showSaveGraalWayModal(GraalWay $graalWay = null)
    {
        $this->graalWay = $graalWay ?? new GraalWay;
        $this->data = $graalWay->toArray();

        $this->emit('showModal', 'save-graal-way-modal');
    }

    public function save()
    {
        $validatedData = $this->validateData($this->graalWay->rules());

        if ($this->graalWay && $this->graalWay->exists) {
            $this->graalWay->update($validatedData);
        }
        else {
            $this->graalWay->create($validatedData);
        }

        $this->emitUp('$refresh');
        $this->emit('hideModal', 'save-graal-way-modal');
    }
}
