<?php

namespace App\Http\Livewire\CrossWays;

use App\Models\CrossWay;
use Livewire\Component;
use Redbastie\Larawire\Traits\HandlesData;

class Save extends Component
{
    use HandlesData;

    public $crossWay;
    protected $listeners = ['showSaveCrossWayModal'];

    public function render()
    {
        return view('livewire.cross-ways.save');
    }

    public function showSaveCrossWayModal(CrossWay $crossWay = null)
    {
        $this->crossWay = $crossWay ?? new CrossWay;
        $this->data = $crossWay->toArray();

        $this->emit('showModal', 'save-cross-way-modal');
    }

    public function save()
    {
        $validatedData = $this->validateData($this->crossWay->rules());

        if ($this->crossWay && $this->crossWay->exists) {
            $this->crossWay->update($validatedData);
        }
        else {
            $this->crossWay->create($validatedData);
        }

        $this->emitUp('$refresh');
        $this->emit('hideModal', 'save-cross-way-modal');
    }
}
